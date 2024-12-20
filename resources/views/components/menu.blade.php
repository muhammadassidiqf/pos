@foreach ($product as $p)
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
            <div class="card-body text-center">
                <img src={{ !empty($p->image) ? asset('storage/img/product/' . $p->image) : asset('media/svg/avatars/blank.svg') }}
                    class="rounded-3 mb-4 w-100px h-100px w-xxl-150px h-xxl-150px" alt="">
                <div class="mb-2">
                    <div class="text-center">
                        <span
                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">{{ $p->name }}</span>
                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">{{ $p->description }}</span>
                    </div>
                </div>
                <span class="text-success text-end fw-bold fs-1">{{ $p->price }}</span>
                <div class="d-flex justify-content-between" data-kt-pos-item-id="{{ $p->id }}">
                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                        onclick="updateCartPos({{ $p->id }}, 'decrease')">
                        <i class="bi bi-dash fs-3x"></i>
                    </button>
                    <input type="text"
                        class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" readonly
                        name="quantity" value="{{ isset($cart[$p->id]) ? $cart[$p->id]['quantity'] : '0' }}">

                    <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                        onclick="updateCartPos({{ $p->id }}, 'increase')">
                        <i class="bi bi-plus fs-3x"></i> </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
