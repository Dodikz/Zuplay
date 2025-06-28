<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                class="desktop-dark">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                class="toggle-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- DASHBOARD -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M3 13h1v7c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-7h1c.4 0 .77-.24.92-.62.15-.37.07-.8-.22-1.09l-8.99-9a.996.996 0 0 0-1.41 0l-9.01 9c-.29.29-.37.72-.22 1.09s.52.62.92.62Zm7 7v-5h4v5zm2-15.59 6 6V20h-2v-5c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v5H6v-9.59z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <!-- MANAJEMEN KANTIN -->
                <li class="slide__category"><span class="category-name">Manajemen Kantin</span></li>
                <li class="slide">
                    <a href="food-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.20-1.10-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z" />
                        </svg>
                        <span class="side-menu__label">Makanan</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="beverage-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 3v18h2v-2h10v2h2V3H5zm12 14H7V5h10v12z" />
                            <path d="M8 6h8v2H8zm0 3h8v2H8zm0 3h6v2H8z" />
                        </svg>
                        <span class="side-menu__label">Minuman</span>
                    </a>
                </li>

                <!-- MANAJEMEN BOOKING & RESERVASI -->
                <li class="slide__category"><span class="category-name">Manajemen Booking</span></li>
                <li class="slide">
                    <a href="booking-schedule.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                        <span class="side-menu__label">Jadwal Booking</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="booking-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 11H7v6h2v-6zm4 0h-2v6h2v-6zm4 0h-2v6h2v-6zm2-7h-3V2h-2v2H8V2H6v2H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H3V9h18v11z"/>
                        </svg>
                        <span class="side-menu__label">Kelola Booking</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="booking-options.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        <span class="side-menu__label">Opsi Booking</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="booking-timer.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 1H9v2h6V1zm-4 13h2V8h-2v6zm8.03-6.61l1.42-1.42c-.43-.51-.9-.99-1.41-1.41l-1.42 1.42A8.962 8.962 0 0 0 12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9a8.994 8.994 0 0 0 7.03-14.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/>
                        </svg>
                        <span class="side-menu__label">Timer Booking</span>
                    </a>
                </li>

                <!-- MANAJEMEN FASILITAS -->
                <li class="slide__category"><span class="category-name">Manajemen Fasilitas</span></li>
                <li class="slide">
                    <a href="pc-room-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="side-menu__icon"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 3H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h6l-2 2v1h8v-1l-2-2h6c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 12H4V5h16v10z" />
                        </svg>
                        <span class="side-menu__label">PC Room</span>
                    </a>
                </li>

                <li class="slide">
                    <a href="futsal-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24" class="side-menu__icon">
                            <path
                                d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10 10-4.49 10-10S17.51 2 12 2m6.23 15H16l-1.25 2.5c-.86.32-1.78.5-2.75.5s-1.89-.18-2.75-.5L8 17H5.77a8 8 0 0 1-1.63-3.53L6 10.99 4.78 8.56a8.02 8.02 0 0 1 4.79-4.19L12 5.99l2.43-1.62c2.11.68 3.84 2.21 4.79 4.19L18 11l1.86 2.48A8.1 8.1 0 0 1 18.24 17Z">
                            </path>
                            <path d="m8.5 11 1.5 4h4l1.5-4L12 8.5z"></path>
                        </svg>
                        <span class="side-menu__label">Futsal</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="badminton-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24" class="side-menu__icon">
                            <path
                                d="M20.48 10.92c.16-.32.28-.67.32-1.04a3.2 3.2 0 0 0-.92-2.64c-.59-.59-1.39-.89-2.2-.9-.01-.84-.34-1.63-.94-2.23a3.2 3.2 0 0 0-2.64-.92c-.37.04-.71.16-1.03.32-.15-.31-.35-.6-.61-.85a3.2 3.2 0 0 0-3.07-.84A3.18 3.18 0 0 0 7.1 4.03l-2.41 8.2-1.23 1.23C2.52 14.4 2 15.66 2 17s.52 2.59 1.46 3.54S5.72 22 7 22s2.56-.49 3.54-1.46l1.23-1.23 8.2-2.41c1.1-.32 1.93-1.18 2.21-2.29s-.03-2.26-.84-3.07a3.2 3.2 0 0 0-.85-.61Zm-1.67-1.26c-.04.37-.25.7-.56.89l-.55.35c-.12.06-.24.11-.35.18l-7.37 4.64-.14-.14 6.92-6.92c.46-.46 1.26-.46 1.72 0 .26.26.39.63.35 1Zm-4.48-4.48c.37-.04.73.08 1 .35.23.23.36.54.36.86s-.13.63-.36.86l-6.92 6.92-.14-.14 4.64-7.37c.07-.11.12-.23.18-.35l.35-.56c.2-.32.52-.52.89-.56Zm-5.31-.59c.12-.42.44-.73.87-.83.43-.11.85 0 1.16.32.36.36.44.88.24 1.33l-4.48 7.16-.11-.11 2.31-7.87ZM4.87 19.11c-.57-.57-.88-1.32-.88-2.12s.31-1.55.88-2.12 4.24 4.24 4.24 4.24a3 3 0 0 1-4.24 0m15.36-5.01c-.05.2-.24.69-.83.87l-7.87 2.31-.11-.11 7.17-4.48c.45-.19.97-.11 1.33.24.44.44.37.96.32 1.16Z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Badminton</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="volleyball-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24" class="side-menu__icon">
                            <path
                                d="M12 2c-1.8 0-3.49.48-4.95 1.32-.04.02-.07.04-.11.06-2.95 1.74-4.95 4.95-4.95 8.61s1.96 6.83 4.88 8.57c.03.03.07.04.11.06 1.48.86 3.19 1.36 5.01 1.36 5.51 0 10-4.49 10-10S17.51 2 12 2m-1.47 17.56c-.15.04-.28.12-.39.22h-.04c1.89-1.18 2.64-2.89 2.93-4.28.26-1.27.16-2.43.06-3.11.52-.41 1.51-1.08 2.77-1.29.28 1.71.63 6.88-5.32 8.48ZM6.28 7.08c.4 3.19 2.93 4.99 4.85 5.69.11.68.19 1.89-.27 3.08-1.7-.66-6.12-2.97-4.59-8.77Zm5.48 3.79c-.62-.24-1.66-.74-2.45-1.67 1.4-1.13 5.58-3.79 9.82.31-2.96-1.25-5.79.04-7.36 1.35Zm5.28-5.07c-2.12-.79-4.07-.54-5.54-.05-1.33.44-2.4 1.12-3.12 1.65-.18-.71-.2-1.55 0-2.53C9.47 4.32 10.7 4 12 4c1.91 0 3.66.68 5.04 1.8M4 12c0-.37.03-.74.08-1.1.38 2.21 1.57 3.76 2.72 4.79 1.02.9 2.1 1.48 2.91 1.84-.51.47-1.19.87-2.08 1.16a8 8 0 0 1-3.64-6.7Zm11.24 7.31c1.53-1.39 2.23-3.09 2.52-4.52.29-1.4.23-2.69.12-3.58.68.2 1.38.59 2.09 1.22a7.99 7.99 0 0 1-4.74 6.88Z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Voli</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="basketball-management.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24" class="side-menu__icon">
                            <path
                                d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10 10-4.49 10-10S17.51 2 12 2m4.9 3.69-4.9 4.9-1.54-1.54c.09-.12.18-.23.26-.35.27-.4.5-.83.69-1.27.19-.45.34-.93.44-1.41.1-.49.15-1 .15-1.51 0-.17-.01-.33-.03-.5H12c1.85 0 3.54.63 4.9 1.69ZM7.62 9.03s-.03.02-.04.03a5.341 5.341 0 0 1-1.96.83c-.44.09-.89.11-1.34.09.28-1.06.76-2.03 1.42-2.87l1.93 1.93Zm-.51-3.34c.84-.65 1.81-1.14 2.87-1.42 0 .08.02.15.02.23 0 .37-.04.75-.11 1.11a5.3 5.3 0 0 1-.83 1.96c0 .01-.02.03-.03.04L7.1 5.68Zm-3.1 6.29c.17.01.33.03.5.03.51 0 1.02-.05 1.51-.15.48-.1.96-.25 1.41-.44.44-.19.87-.42 1.27-.69.12-.08.23-.17.35-.26l1.54 1.54-4.9 4.9A8 8 0 0 1 4 12.01v-.03Zm3.1 6.34 4.9-4.9 1.54 1.54c-.09.12-.18.23-.26.35-.27.4-.5.83-.69 1.27-.19.45-.34.93-.44 1.41-.1.49-.15 1-.15 1.51 0 .17.01.33.03.5h-.03c-1.85 0-3.54-.63-4.9-1.69Zm9.28-3.34s.03-.02.04-.03a5.341 5.341 0 0 1 1.96-.83c.44-.09.89-.11 1.34-.09a7.9 7.9 0 0 1-1.42 2.87l-1.93-1.93Zm.51 3.34c-.84.65-1.81 1.14-2.87 1.42 0-.08-.02-.15-.02-.23 0-.37.04-.75.11-1.11a5.3 5.3 0 0 1 .83-1.96c0-.01.02-.03.03-.04l1.93 1.93Zm3.1-6.29c-.67-.04-1.35 0-2.01.13-.48.1-.96.25-1.41.44-.44.19-.87.42-1.27.69-.12.08-.23.17-.35.26l-1.54-1.54 4.9-4.9a8 8 0 0 1 1.69 4.9v.03Z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Basket</span>
                    </a>
                </li>

                <!-- LAPORAN & ANALITIK -->
                <li class="slide__category"><span class="category-name">Laporan & Analitik</span></li>
                <li class="slide">
                    <a href="rental-reports.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="side-menu__icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z" />
                        </svg>
                        <span class="side-menu__label">Laporan Penyewaan</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="fnb-reports.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="side-menu__icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                        </svg>
                        <span class="side-menu__label">Laporan Penjualan F&B</span>
                    </a>
                </li>

            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>