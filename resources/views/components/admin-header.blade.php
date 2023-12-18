<nav class="navbar">
    <div class="container">
        <button class="btn-navbar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <svg width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 0.5L44 14V37H38.5V17L22 7L5.5 17V37H0V14L22 0.5Z" fill="#3db072"/>
                <path d="M22 16.5L31 22V37.5H25V25.5L22 23.5L19 25.5V37.5H13V22L22 16.5Z" fill="#3db072"/>
            </svg>
        </button>
        <div class="d-flex align-items-center">
            @auth
            <a href="/logout" class="btn-navbar-logout">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                    <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#3DB072" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            @endauth
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Пользователи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/postList">Объявления</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
