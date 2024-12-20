<div class="card card-flush card-p-0 bg-transparent border-0 ">
    <div class="card-body">
        <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-7 mb-6" role="tablist">
            @foreach ($category as $c)
                <li class="nav-item mb-3 me-0" role="presentation">
                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg "
                        data-bs-toggle="pill" href="#kt_pos_food_content_{{ $c->id }}"
                        style="width: 138px;height: 180px" aria-selected="false" tabindex="-1" role="tab">
                        <div class="nav-icon mb-3">
                            <img src={{ !empty($c->image) ? asset('storage/img/category/' . $c->image) : asset('media/svg/avatars/blank.svg') }}
                                class="w-50px" alt="">
                        </div>

                        <div class="">
                            <span class="text-gray-800 fw-bold fs-2 d-block">{{ $c->name }}</span>
                            <span class="text-gray-500 fw-semibold fs-7">{{ $c->products_count }}
                                {{ $c->name }}</span>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>

        <div class="tab-content">
            @foreach ($category as $c)
                <div class="tab-pane fade" id="kt_pos_food_content_{{ $c->id }}" role="tabpanel">
                    <div class="row">
                        @foreach ($c->products as $p)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                    <div class="card-body text-center">
                                        <img src={{ !empty($p->image) ? asset('storage/img/product/' . $p->image) : asset('media/svg/avatars/blank.svg') }}
                                            class="rounded-3 mb-4 w-100px h-100px w-xxl-150px h-xxl-150px"
                                            alt="">
                                        <div class="mb-2">
                                            <div class="text-center">
                                                <span
                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">{{ $p->name }}</span>
                                                <span
                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">{{ $p->description }}</span>
                                            </div>
                                        </div>
                                        <span class="text-success text-end fw-bold fs-1">{{ $p->price }}</span>
                                        <div class="d-flex justify-content-between"
                                            data-kt-pos-item-id="{{ $p->id }}">
                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                onclick="updateCartPos({{ $p->id }}, 'decrease')">
                                                <i class="bi bi-dash fs-3x"></i>
                                            </button>
                                            <input type="text"
                                                class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                readonly name="quantity"
                                                value="{{ isset($cart[$p->id]) ? $cart[$p->id]['quantity'] : '0' }}">

                                            <button type="button"
                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                onclick="updateCartPos({{ $p->id }}, 'increase')">
                                                <i class="bi bi-plus fs-3x"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
