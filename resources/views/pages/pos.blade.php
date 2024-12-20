@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack ">

                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            POS System
                        </h1>


                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="" class="text-muted text-hover-primary">
                                    Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>

                            <li class="breadcrumb-item text-muted">
                                Dashboards </li>

                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-2 gap-lg-3">


                        <a href="" class="btn btn-sm fw-bold btn-secondary">
                            Recent Orders </a>

                        <a href="" class="btn btn-sm fw-bold btn-primary">
                            New Product </a>
                    </div>
                </div>
            </div>

            <div id="kt_app_content" class="app-content  flex-column-fluid ">

                <div id="kt_app_content_container" class="app-container container-fluid ">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0" id="pos-container" data-kt-pos-name="pos">
                            <x-pos :category="$category" :cart="$cart" />
                        </div>
                        <div class="flex-row-auto w-xl-450px" id="cart-container">
                            <x-cart :cart="$cart" :total="$total" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    @parent

    <script>
        function refreshCart() {
            $('#cart-container').html(`
                <div class="card" style="min-height:'150px'">
                    <div class="card-body">
                        <div class="col-12 d-flex align-items-center justify-content-center my-5" id="spinner">
                            <div class="spinner-border spinner-border-lg fs-3 fw-semibold" role="status"></div>
                        </div>
                    </div>
                </div>
            `);
            fetch("{{ route('pos.refresh-cart') }}")
                .then(response => response.text())
                .then(html => {
                    $('#cart-container').empty();
                    $('#cart-container').html(html);
                })
                .finally(() => {
                    $('#spinner').remove();
                });
        }

        function refreshPos() {
            fetch("{{ route('pos.refresh-pos') }}")
                .then(response => response.text())
                .then(html => {
                    $('#pos-container').empty();
                    $('#pos-container').html(html);
                });
        }

        function clearCart() {
            fetch("{{ route('pos.clear-cart') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                })
                .then(() => {
                    refreshCart();
                    refreshPos();
                });
        }

        function debounce(func, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => func.apply(this, args), delay);
            };
        }

        let debouncedUpdatePos = {};

        function updateCartPos(productId, action) {
            let qty = $(`[data-kt-pos-name="pos"] [data-kt-pos-item-id='` + productId +
                `'] input[name='quantity']`).val();
            if (qty == 0 && action == 'decrease') {
                return;
            }

            if (qty == 10 && action == 'increase') {
                return;
            }

            if (qty > 0 && action == 'decrease') {
                qty--;
            } else if (qty >= 0 && action == 'increase') {
                qty++;
            }

            qty = parseInt(qty);
            $(`[data-kt-pos-name="pos"] [data-kt-pos-item-id='` + productId +
                `'] input[name='quantity']`).val(qty);

            console.log(qty);

            if (!debouncedUpdatePos[productId]) {
                debouncedUpdatePos[productId] = debounce(function(productId, action) {
                    fetch("{{ route('pos.update-cart') }}", {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                                "Content-Type": "application/json",
                            },
                            body: JSON.stringify({
                                product_id: productId,
                                action: action,
                                quantity: $(
                                    `[data-kt-pos-name="pos"] [data-kt-pos-item-id='` + productId +
                                    `'] input[name='quantity']`
                                ).val(),
                            }),
                        })
                        .then((response) => response.json())
                        .then(() => {
                            refreshCart();
                        });
                }, 500);
            }

            debouncedUpdatePos[productId](productId, action);
        }
    </script>
@endsection
