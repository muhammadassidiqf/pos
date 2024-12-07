<!--begin::Aside-->
<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="" class="d-flex align-items-center">
            <img alt="Logo" src="{{ asset('media/logos/Nisa-02.png') }}" class="h-45px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item py-2">
                    <a class="menu-link {{ Route::is('home') ? 'active' : '' }} menu-center" href="{{ route('home') }}"
                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">Home</span>
                    </a>
                </div>
                @if (Auth::user()->hasPermissionTo('user'))
                    <div class="menu-item py-2">
                        <a class="menu-link {{ Route::is('users') ? 'active' : '' }} menu-center"
                            href="{{ route('users') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon me-0">
                                <i class="bi bi-person-badge fs-2"></i>
                            </span>
                            <span class="menu-title">Users</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->hasPermissionTo('clients'))
                    <div class="menu-item py-2">
                        <a class="menu-link {{ Route::is('clients') ? 'active' : '' }} menu-center"
                            href="{{ route('clients') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon me-0">
                                <i class="bi bi-people-fill fs-2"></i>
                            </span>
                            <span class="menu-title">Client</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->hasPermissionTo('role'))
                    <div class="menu-item py-2">
                        <a class="menu-link {{ Route::is('roles') ? 'active' : '' }} menu-center"
                            href="{{ route('roles') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon me-0">
                                <i class="bi bi-gear-wide fs-2"></i>
                            </span>
                            <span class="menu-title">Roles</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->hasPermissionTo('permission'))
                    <div class="menu-item py-2">
                        <a class="menu-link {{ Route::is('permission') ? 'active' : '' }} menu-center"
                            href="{{ route('permission') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon me-0">
                                <i class="bi bi-circle-square fs-2"></i>
                            </span>
                            <span class="menu-title">Permission</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->hasPermissionTo('pos'))
                    <div class="menu-item py-2">
                        <a class="menu-link {{ Route::is('pos') ? 'active' : '' }} menu-center"
                            href="{{ route('pos') }}" data-bs-trigger="hover" data-bs-dismiss="click"
                            data-bs-placement="right">
                            <span class="menu-icon me-0">
                                <i class="bi bi-wallet fs-2"></i>
                            </span>
                            <span class="menu-title">POS</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
