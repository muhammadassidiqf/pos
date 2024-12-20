@extends('layouts.app')
@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="h-100 d-flex align-items-center justify-content-center d-none" id="loading-spinner-pos">
            <div class="spinner-border spinner-border-lg fs-3 text-black fw-semibold" role="status">
            </div>
            <div class="loading-text fs-4 text-black fw-semibold ms-3">
                Loading, please wait
                <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
            </div>
        </div>
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container container-fluid ">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0" id="pos-container" data-kt-pos-name="pos">
                            <x-pos :category="$category" :cart="$cart" />
                        </div>
                        <div class="card flex-row-auto w-xl-450px" id="cart-container">
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
            $('#loading-spinner-pos').removeClass('d-none');
            fetch("{{ route('pos.clear-cart') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                })
                .then(() => {
                    refreshCart();
                    refreshPos();
                })
                .finally(() => {
                    $('#loading-spinner-pos').addClass('d-none');
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
            $('#cart-container').html(`  
            <div class="h-100 d-flex align-items-center justify-content-center" id="loading-spinner-cart">
                <div class="spinner-border spinner-border-lg fs-3 text-black fw-semibold" role="status">
                </div>
                <div class="loading-text fs-4 text-black fw-semibold ms-3">
                    Loading, please wait
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                    <div class="spinner-grow" style="width: 5px; height: 5px;" role="status"></div>
                </div>
            </div>
            `);
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
