<div class="card card-flush card-p-0 bg-transparent border-0 ">
    <div class="card-body">
        <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-7 mb-6" role="tablist">
            @foreach ($category as $c)
                <li class="nav-item mb-3 me-0" role="presentation">
                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-gray-500 flex-column flex-stack pt-9 pb-7 page-bg {{ $loop->first ? 'active' : '' }}"
                        data-bs-toggle="pill" href="#kt_pos_food_content_{{ $c->id }}"
                        style="width: 138px;height: 180px" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                        tabindex="{{ $loop->first ? '0' : '-1' }}" role="tab">
                        <div class="nav-icon mb-3">
                            <img src={{ !empty($c->image) ? asset('storage/img/category/' . $c->image) : asset('media/svg/avatars/blank.svg') }}
                                class="w-50px" alt="">
                        </div>

                        <div class="">
                            <span class="text-gray-800 fw-bold fs-2 d-block">{{ $c->name }}</span>
                            <span class="text-white fw-semibold fs-7">{{ $c->products_count }}
                                {{ $c->name }}</span>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>

        <div class="tab-content">
            @foreach ($category as $c)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                    id="kt_pos_food_content_{{ $c->id }}" role="tabpanel">
                    <div class="row">
                        <x-menu :product="$c->products" :cart="$cart" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
