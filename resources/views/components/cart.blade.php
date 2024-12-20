    <div class="card card-flush bg-body " id="kt_pos_form">
        <div class="card-header pt-5">
            <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>

            <div class="card-toolbar">
                <button type="button" class="btn btn-light-primary fs-4 fw-bold py-4 pointer-auto"
                    onclick="clearCart()">Clear All</button>
            </div>
        </div>
        @if (count($cart) == 0)
            <div class="card-body">
                <div class="col-12 d-flex align-items-center justify-content-center my-5">
                    <img src="{{ asset('media/svg/illustrations/no-data.svg') }}" class="mw-100 mh-150px"
                        alt="empty-cart">
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center my-5">
                    <span class="text-gray-800 fw-bold fs-2qx">Cart is Empty</span>
                </div>
            </div>
        @else
            <div class="card-body pt-0">
                <div class="table-responsive mb-8">
                    <table class="table align-middle gs-0 gy-4 my-0">
                        <thead>
                            <tr>
                                <th class="min-w-175px"></th>
                                <th class="w-125px"></th>
                                <th class="w-60px"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cart as $c)
                                <tr data-kt-pos-element="item" data-kt-pos-item-price="{{ $c['price'] }}">
                                    <td class="pe-0">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ !empty($c['image']) ? asset('storage/img/product/' . $c['image']) : asset('media/svg/avatars/blank.svg') }}"
                                                class="w-50px h-50px rounded-3 me-3" alt="">
                                            <span
                                                class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">{{ $c['name'] }}</span>
                                        </div>
                                    </td>

                                    <td class="pe-0">
                                        <div class="position-relative d-flex align-items-center" data-kt-dialer="true"
                                            data-kt-dialer-min="0" data-kt-dialer-max="10" data-kt-dialer-step="1"
                                            data-kt-dialer-decimals="0" data-kt-pos-item-id="{{ $c['id'] }}">
                                            <input type="text"
                                                class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                readonly name="quantity" value="{{ $c['quantity'] }}">
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <span class="fw-bold text-primary fs-2"
                                            data-kt-pos-element="item-total">{{ $c['quantity'] * $c['price'] }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                    <div class="fs-6 fw-bold text-white">
                        {{-- <span class="d-block lh-1 mb-2">Subtotal</span>
                    <span class="d-block mb-2">Discounts</span>
                    <span class="d-block mb-9">Tax(12%)</span> --}}
                        <span class="d-block fs-3 lh-1">Total</span>
                    </div>

                    <div class="fs-6 fw-bold text-white text-end">
                        {{-- <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                    <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                    <span class="d-block mb-9" data-kt-pos-element="tax">$11.20</span> --}}
                        <span class="d-block fs-3 lh-1" data-kt-pos-element="grant-total">{{ $total }}</span>
                    </div>
                </div>

                <div class="m-0">
                    {{-- <h1 class="fw-bold text-gray-800 mb-5">Payment Method</h1>

                <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true"
                    data-kt-buttons-target="[data-kt-button]" data-kt-initialized="1">
                    <label
                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 "
                        data-kt-button="true">
                        <input class="btn-check" type="radio" name="method" value="0">

                        <i class="bi bi-cash fs-2hx mb-2 pe-0"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>

                        <span class="fs-7 fw-bold d-block">Cash</span>
                    </label>
                    <label
                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active"
                        data-kt-button="true">
                        <input class="btn-check" type="radio" name="method" value="1">

                        <i class="bi bi-credit-card fs-2hx mb-2 pe-0"><span class="path1"></span><span
                                class="path2"></span></i>

                        <span class="fs-7 fw-bold d-block">Card</span>
                    </label>
                    <label
                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 "
                        data-kt-button="true">
                        <input class="btn-check" type="radio" name="method" value="2">

                        <i class="bi bi-wallet fs-2hx mb-2 pe-0"><span class="path1"></span><span
                                class="path2"></span></i>

                        <span class="fs-7 fw-bold d-block">E-Wallet</span>
                    </label>
                </div> --}}

                    <button class="btn btn-primary fs-1 w-100 py-4">Print Bills</button>
                </div>
            </div>
        @endif
    </div>
