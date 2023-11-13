<nav class="navbar fixed-top">
    <div class="container">
        <button class="btn-navbar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <svg width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 0.5L44 14V37H38.5V17L22 7L5.5 17V37H0V14L22 0.5Z" fill="#DBB969"/>
                <path d="M22 16.5L31 22V37.5H25V25.5L22 23.5L19 25.5V37.5H13V22L22 16.5Z" fill="#DBB969"/>
            </svg>
        </button>
        <div>
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#exampleModal">Регистрация</button>
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#exampleModal">Вход</button>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close-cst" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg width="26" height="26" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9" cy="9" r="9" fill="#073146"/>
                        <path d="M5 5L13 13" stroke="#DBB969" stroke-width="2" stroke-linecap="round"/>
                        <path d="M5 13L13 5" stroke="#DBB969" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</nav>