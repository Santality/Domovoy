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
            <a href="/profile" class="btn-navbar-profile">
              <svg width="48" height="48" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="14" cy="14" r="13" stroke="#3DB072" stroke-width="2"/>
                <ellipse cx="14.1942" cy="21.9552" rx="9.70149" ry="5.04478" fill="#3DB072"/>
                <circle cx="14.1939" cy="11.8657" r="5.8209" fill="#3DB072"/>
              </svg>
            </a>
            @endauth
            @guest
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#registration">Регистрация</button>
            <button type="button" class="btn-auth" data-bs-toggle="modal" data-bs-target="#login">Вход</button>
            @endguest
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Меню</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalog">Каталог</a>
                    </li>
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="/post_create">Создать объявление</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/logout">Выход</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
            <div class="modal-dialog auth-modal-mt">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="loginLabel">Войти</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="form_auth" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="email_log" class="form-label cstm-label-modal">Почта</label>
                      <input type="email" class="modal-cstm-input" id="email_log" name="email_log">
                      @error('email_log')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password_log" class="form-label cstm-label-modal">Пароль</label>
                      <input type="password" class="modal-cstm-input" id="password_log" name="password_log">
                      @error('password_log')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="submit" form="form_auth" class="modal-cstm-btn">Войти</button>
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
                  <form id="form_reg" action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="lastname" class="form-label cstm-label-modal">Фамилия</label>
                      <input type="text" class="modal-cstm-input" id="lastname" name="lastname">
                        @error('lastname')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="firstname" class="form-label cstm-label-modal">Имя</label>
                      <input type="text" class="modal-cstm-input" id="firstname" name="firstname">
                        @error('firstname')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label cstm-label-modal">Телефон</label>
                      <input type="text" class="modal-cstm-input" id="phone" name="phone">
                      @error('phone')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email_reg" class="form-label cstm-label-modal">Почта</label>
                      <input type="email" class="modal-cstm-input" id="email_reg" name="email">
                      @error('email')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="password_reg" class="form-label cstm-label-modal">Пароль</label>
                      <input type="password" class="modal-cstm-input" id="password_reg" name="password">
                      @error('password')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="confirm_password" class="form-label cstm-label-modal">Подтверждение пароля</label>
                      <input type="password" class="modal-cstm-input" id="confirm_password" name="confirm_password">
                      @error('confirm_password')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input cstm-checkbox" id="ruleCheck" required>
                        <label class="form-check-label" for="ruleCheck">Согласие с правилами</label>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="submit" form="form_reg" class="modal-cstm-btn">Регистрация</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</nav>
