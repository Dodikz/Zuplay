<header class="app-header sticky" id="header">

    <div class="main-header-container container-fluid">

        <div class="header-content-left">

            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="{{ route('dashboard') }}" class="header-logo">
                        <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                        <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                        <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                        <img src="{{ asset('build/assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                    </a>
                </div>
            </div>

            <div class="header-element mx-lg-0 mx-2">
                <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link" data-bs-toggle="sidebar"
                    href="javascript:void(0);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M4 5h12M4 12h16M4 19h8" color="currentColor" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon menu-btn-close" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="m18 6l-6 6m0 0l-6 6m6-6l6 6m-6-6L6 6" color="currentColor" />
                    </svg>
                </a>
            </div>
        </div>

        <ul class="header-content-right">

            <li class="header-element d-md-none d-block">
                <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal"
                    data-bs-target="#header-responsive-search">
                    <i class="bi bi-search header-link-icon"></i>
                </a>
            </li>

            <li class="header-element header-theme-mode">
                <a href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="1em"
                            height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M21.5 14.078A8.557 8.557 0 0 1 9.922 2.5C5.668 3.497 2.5 7.315 2.5 11.873a9.627 9.627 0 0 0 9.627 9.627c4.558 0 8.376-3.168 9.373-7.422"
                                color="currentColor" />
                        </svg>
                    </span>
                    <span class="dark-layout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="1em"
                            height="1em" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5"
                                d="M17 12a5 5 0 1 1-10 0a5 5 0 0 1 10 0M12 2v1.5m0 17V22m7.07-2.929l-1.06-1.06M5.99 5.989L4.928 4.93M22 12h-1.5m-17 0H2m17.071-7.071l-1.06 1.06M5.99 18.011l-1.06 1.06"
                                color="currentColor" />
                        </svg>
                    </span>
                </a>
            </li>

            <li class="header-element dropdown">
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="{{ asset('build/assets/images/faces/10.jpg') }}" alt="img"
                                class="avatar avatar-sm avatar-rounded">
                        </div>
                    </div>
                </a>
                
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li class="p-3 border-bottom">
                        <div class="d-flex align-items-center justify-content-center text-center">
                            <div>
                                <p class="mb-0 fw-semibold lh-1">Arjun Arora</p>
                                <span class="fs-11 text-muted">arjunarora@mail.com</span>
                            </div>
                        </div>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i
                                class="ri-user-settings-line fs-15 me-2 text-gray fw-normal"></i>Account Settings</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.html"><i
                                class="ri-logout-circle-line fs-15 me-2 text-gray fw-normal"></i>Sign Out</a></li>
                </ul>
            </li>

        </ul>

    </div>

</header>
