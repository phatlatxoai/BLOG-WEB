@auth
<header class="header" id="header">

    <nav class="navbar container">
        <a href="/">
            <h2 class="logo">VĂN LANG BLOG</h2>
        </a>

        <div class="menu" id="menu">
            <ul class="list">
                <li class="list-item">
                    <a href="/" class="list-link current">Home</a>
                </li>
                <li class="list-item">
                    <a href="/management" class="list-link">Quản lí bài viết</a>
                </li>
                <li class="list-item">
                    <a href="/thanhvien" class="list-link">Thành Viên</a>
                </li>
                <li class="list-item">
                    <a href="#ft" class="list-link">Liên Hệ</a>
                </li>
                <li class="list-item screen-lg-hidden">
                    <a href="/register" class="list-link">Đăng Nhập</a>
                </li>
                <li class="list-item screen-lg-hidden">
                    <a href="/register" class="list-link">Đăng Ký</a>
                </li>
            </ul>
        </div>

        <div class="list list-right">
            <button class="btn place-items-center" id="theme-toggle-btn">
                <i class="ri-sun-line sun-icon"></i>
                <i class="ri-moon-line moon-icon"></i>
            </button>

            <button class="btn place-items-center" id="search-icon">
                <i class="ri-search-line"></i>
            </button>

            <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                <i class="ri-menu-3-line open-menu-icon"></i>
                <i class="ri-close-line close-menu-icon"></i>
            </button>

            <a href="/management" class="list-link screen-sm-hidden">{{ auth()->user()->name }}</a>
            <form action="/logout" class="inline" method="POST">
                @csrf
                <button type="submit">
                    <a href="" class="btn sign-up-btn fancy-border screen-sm-hidden">
                        <span>Logout</span>
                    </a>
                </button>
            </form>

        </div>
        <div class="search-form-container container" id="search-form-container">

            <div class="form-container-inner">

                <form action="/" class="form">
                    <input class="form-input" type="text" name="search" placeholder="BẠN ĐANG TÌM GÌ VẬY?">
                    <button class=" form-btn btn" type="submit">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
                <span class="form-note">NHẤN [ESC] ĐỂ QUAY LẠI.</span>

            </div>

            <button class="btn form-close-btn place-items-center" id="form-close-btn">
                <i class="ri-close-line"></i>
            </button>

        </div>

    </nav>

</header>



@else

<header class="header" id="header">

    <nav class="navbar container">
        <a href="/">
            <h2 class="logo">VĂN LANG BLOG</h2>
        </a>

        <div class="menu" id="menu">
            <ul class="list">
                <li class="list-item">
                    <a href="/" class="list-link current">Home</a>
                </li>
                <li class="list-item">
                    <a href="/thanhvien" class="list-link">Thành Viên</a>
                </li>
                <li class="list-item">
                    <a href="#ft" class="list-link">Liên Hệ</a>
                </li>
                <li class="list-item screen-lg-hidden">
                    <a href="/login" class="list-link">Đăng Nhập</a>
                </li>
                <li class="list-item screen-lg-hidden">
                    <a href="/register" class="list-link">Đăng Ký</a>
                </li>
            </ul>
        </div>

        <div class="list list-right">
            <button class="btn place-items-center" id="theme-toggle-btn">
                <i class="ri-sun-line sun-icon"></i>
                <i class="ri-moon-line moon-icon"></i>
            </button>

            <button class="btn place-items-center" id="search-icon">
                <i class="ri-search-line"></i>
            </button>

            <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                <i class="ri-menu-3-line open-menu-icon"></i>
                <i class="ri-close-line close-menu-icon"></i>
            </button>

            <a href="/login" class="list-link screen-sm-hidden">ĐĂNG NHẬP</a>
            <a href="/register" class="btn sign-up-btn fancy-border screen-sm-hidden">
                <span>ĐĂNG KÝ</span>
            </a>
        </div>
        <div class="search-form-container container" id="search-form-container">

            <div class="form-container-inner">

                <form action="/" class="form">
                    <input class="form-input" type="text" name="search" placeholder="BẠN ĐANG TÌM GÌ VẬY?">
                    <button class=" form-btn btn" type="submit">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
                <span class="form-note">NHẤN [ESC] ĐỂ QUAY LẠI.</span>

            </div>

            <button class="btn form-close-btn place-items-center" id="form-close-btn">
                <i class="ri-close-line"></i>
            </button>

        </div>

    </nav>

</header>



@endauth
