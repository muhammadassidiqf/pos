@extends('layouts.app')
@section('content-admin')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



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


                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <div class="d-flex flex-column flex-xl-row">
                        <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">

                            <div class="card card-flush card-p-0 bg-transparent border-0 ">
                                <div class="card-body">
                                    <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-6"
                                        role="tablist">

                                        <li class="nav-item mb-3 me-0" role="presentation">
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active"
                                                data-bs-toggle="pill" href="#kt_pos_food_content_1"
                                                style="width: 138px;height: 180px" aria-selected="true" role="tab">
                                                <div class="nav-icon mb-3">
                                                    <img src="{{ asset('') }}media/svg/food-icons/spaghetti.svg"
                                                        class="w-50px" alt="">
                                                </div>

                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Lunch</span>
                                                    <span class="text-gray-500 fw-semibold fs-7">8 Options</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mb-3 me-0" role="presentation">
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg"
                                                data-bs-toggle="pill" href="#kt_pos_food_content_2"
                                                style="width: 138px;height: 180px" aria-selected="false" role="tab"
                                                tabindex="-1">
                                                <div class="nav-icon mb-3">
                                                    <img src="{{ asset('') }}media/svg/food-icons/salad.svg"
                                                        class="w-50px" alt="">
                                                </div>

                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Salad</span>
                                                    <span class="text-gray-500 fw-semibold fs-7">14 Salads</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mb-3 me-0" role="presentation">
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg "
                                                data-bs-toggle="pill" href="#kt_pos_food_content_4"
                                                style="width: 138px;height: 180px" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3">
                                                    <img src="{{ asset('') }}media/svg/food-icons/coffee.svg"
                                                        class="w-50px" alt="">
                                                </div>

                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Coffee</span>
                                                    <span class="text-gray-500 fw-semibold fs-7">7 Beverages</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mb-3 me-0" role="presentation">
                                            <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg "
                                                data-bs-toggle="pill" href="#kt_pos_food_content_5"
                                                style="width: 138px;height: 180px" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3">
                                                    <img src="{{ asset('') }}media/svg/food-icons/cheesecake.svg"
                                                        class="w-50px" alt="">
                                                </div>

                                                <div class="">
                                                    <span class="text-gray-800 fw-bold fs-2 d-block">Dessert</span>
                                                    <span class="text-gray-500 fw-semibold fs-7">8 Desserts</span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">


                                        <div class="tab-pane fade active show" id="kt_pos_food_content_1" role="tabpanel">
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-2.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                                    Stake</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-7.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                                    Salmon</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-8.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-4.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                                    Breast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-10.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                                    Steak</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                                    of the Day</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-5.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-11.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="kt_pos_food_content_2" role="tabpanel">
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-11.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-5.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-4.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                                    Breast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-8.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-10.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                                    Steak</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                                    of the Day</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-7.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                                    Salmon</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-2.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                                    Stake</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_pos_food_content_3" role="tabpanel">
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-5.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-11.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-2.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                                    Stake</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-7.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                                    Salmon</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-4.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                                    Breast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-8.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                                    of the Day</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-10.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                                    Steak</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_pos_food_content_4" role="tabpanel">
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-5.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-4.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                                    Breast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-8.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                                    of the Day</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-11.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-7.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                                    Salmon</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-10.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                                    Steak</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_pos_food_content_5" role="tabpanel">
                                            <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-10.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                                    Steak</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-5.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-4.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                                    Breast</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-2.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                                    Stake</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-7.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                                    Salmon</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-8.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                                    of the Day</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                    </div>
                                                </div>

                                                <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('') }}media/stock/food/img-11.jpg"
                                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                            alt="">

                                                        <div class="mb-2">
                                                            <div class="text-center">
                                                                <span
                                                                    class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>

                                                                <span
                                                                    class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16
                                                                    mins to cook</span>
                                                            </div>
                                                        </div>

                                                        <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-row-auto w-xl-450px">

                            <div class="card card-flush bg-body " id="kt_pos_form">
                                <div class="card-header pt-5">
                                    <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>

                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                                    </div>
                                </div>

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
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}media/stock/food/img-2.jpg"
                                                                class="w-50px h-50px rounded-3 me-3" alt="">
                                                            <span
                                                                class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone
                                                                Stake</span>
                                                        </div>
                                                    </td>

                                                    <td class="pe-0">
                                                        <div class="position-relative d-flex align-items-center"
                                                            data-kt-dialer="true" data-kt-dialer-min="1"
                                                            data-kt-dialer-max="10" data-kt-dialer-step="1"
                                                            data-kt-dialer-decimals="0">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i> </button>

                                                            <input type="text"
                                                                class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                                data-kt-dialer-control="input" placeholder="Amount"
                                                                name="manageBudget" readonly="" value="2">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i> </button>
                                                        </div>
                                                    </td>

                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2"
                                                            data-kt-pos-element="item-total">$66.00</span>
                                                    </td>
                                                </tr>
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}media/stock/food/img-9.jpg"
                                                                class="w-50px h-50px rounded-3 me-3" alt="">
                                                            <span
                                                                class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup
                                                                of the Day</span>
                                                        </div>
                                                    </td>

                                                    <td class="pe-0">
                                                        <div class="position-relative d-flex align-items-center"
                                                            data-kt-dialer="true" data-kt-dialer-min="1"
                                                            data-kt-dialer-max="10" data-kt-dialer-step="1"
                                                            data-kt-dialer-decimals="0">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i> </button>

                                                            <input type="text"
                                                                class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                                data-kt-dialer-control="input" placeholder="Amount"
                                                                name="manageBudget" readonly="" value="1">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i> </button>
                                                        </div>
                                                    </td>

                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2"
                                                            data-kt-pos-element="item-total">$7.50</span>
                                                    </td>
                                                </tr>
                                                <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                                    <td class="pe-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('') }}media/stock/food/img-3.jpg"
                                                                class="w-50px h-50px rounded-3 me-3" alt="">
                                                            <span
                                                                class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                                        </div>
                                                    </td>

                                                    <td class="pe-0">
                                                        <div class="position-relative d-flex align-items-center"
                                                            data-kt-dialer="true" data-kt-dialer-min="1"
                                                            data-kt-dialer-max="10" data-kt-dialer-step="1"
                                                            data-kt-dialer-decimals="0">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="decrease">
                                                                <i class="ki-duotone ki-minus fs-3x"></i> </button>

                                                            <input type="text"
                                                                class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                                data-kt-dialer-control="input" placeholder="Amount"
                                                                name="manageBudget" readonly="" value="2">

                                                            <button type="button"
                                                                class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                                data-kt-dialer-control="increase">
                                                                <i class="ki-duotone ki-plus fs-3x"></i> </button>
                                                        </div>
                                                    </td>

                                                    <td class="text-end">
                                                        <span class="fw-bold text-primary fs-2"
                                                            data-kt-pos-element="item-total">$27.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                        <div class="fs-6 fw-bold text-white">
                                            <span class="d-block lh-1 mb-2">Subtotal</span>
                                            <span class="d-block mb-2">Discounts</span>
                                            <span class="d-block mb-9">Tax(12%)</span>
                                            <span class="d-block fs-2qx lh-1">Total</span>
                                        </div>

                                        <div class="fs-6 fw-bold text-white text-end">
                                            <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                                            <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                                            <span class="d-block mb-9" data-kt-pos-element="tax">$11.20</span>
                                            <span class="d-block fs-2qx lh-1"
                                                data-kt-pos-element="grant-total">$93.46</span>
                                        </div>
                                    </div>

                                    <div class="m-0">
                                        <h1 class="fw-bold text-gray-800 mb-5">Payment Method</h1>

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

                                                <i class="bi bi-credit-card fs-2hx mb-2 pe-0"><span
                                                        class="path1"></span><span class="path2"></span></i>

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
                                        </div>

                                        <button class="btn btn-primary fs-1 w-100 py-4">Print Bills</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div id="kt_app_footer" class="app-footer ">
            <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                <div class="text-gray-900 order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2024©</span>
                    <a href="" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                </div>

                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">About</a></li>

                    <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Support</a></li>

                    <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Purchase</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
