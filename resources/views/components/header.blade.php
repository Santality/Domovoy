<nav class="navbar">
    <div class="container">
        <button class="btn-navbar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <svg width="44" height="38" viewBox="0 0 44 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 0.5L44 14V37H38.5V17L22 7L5.5 17V37H0V14L22 0.5Z" fill="#3db072"/>
                <path d="M22 16.5L31 22V37.5H25V25.5L22 23.5L19 25.5V37.5H13V22L22 16.5Z" fill="#3db072"/>
            </svg>
        </button>
        <form action="">
            <div class="find-input-header">
                <input class="header-input" type="text">
                <button class="header-btn"><img src="/images/search.svg" alt=""></button>
            </div>
        </form>
        <div>
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#registration">Регистрация</button>
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#login">Вход</button>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close-cst" data-bs-dismiss="offcanvas" aria-label="Close">
                    <svg width="26" height="26" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9" cy="9" r="9" fill="#ffffff"/>
                        <path d="M5 5L13 13" stroke="#3db072" stroke-width="2" stroke-linecap="round"/>
                        <path d="M5 13L13 5" stroke="#3db072" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="loginLabel">Войти</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="email" class="form-label cstm-label-modal">Почта</label>
                      <input type="email" class="modal-cstm-input" id="email" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label cstm-label-modal">Пароль</label>
                      <input type="password" class="modal-cstm-input" id="password" name="password">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="modal-cstm-btn">Войти</button>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registrationLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="registrationLabel">Регистрация</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="lastname" class="form-label cstm-label-modal">Фамилия</label>
                      <input type="text" class="modal-cstm-input" id="lastname" name="lastname">
                    </div>
                    <div class="mb-3">
                      <label for="firstname" class="form-label cstm-label-modal">Имя</label>
                      <input type="text" class="modal-cstm-input" id="firstname" name="firstname">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label cstm-label-modal">Телефон</label>
                      <input type="text" class="modal-cstm-input" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label cstm-label-modal">Почта</label>
                      <input type="email" class="modal-cstm-input" id="email" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label cstm-label-modal">Пароль</label>
                      <input type="password" class="modal-cstm-input" id="password" name="password">
                    </div>
                    <div class="mb-3">
                      <label for="confirmpassword" class="form-label cstm-label-modal">Подтверждение пароля</label>
                      <input type="password" class="modal-cstm-input" id="confirmpassword">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Согласие с правилами</label>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="modal-cstm-btn">Регистрация</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</nav>