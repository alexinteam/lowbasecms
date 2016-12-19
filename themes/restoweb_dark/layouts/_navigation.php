<nav class="navbar navbar-inverse navbar-fixed-top bg-menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand name-brand" href="javascript:"><img src="<?= $this->getThemeUrl('images/logo.png'); ?>" class="logo-main" alt="Logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="" class="main-link">Возможности</a></li>
                <li><a href="cost.html">Тарифные планы</a></li>
                <li><a href="javascript:" data-toggle="modal" data-target="#reg">Регистрация</a></li>
                <li><a href="">Войти в кабинет</a></li>
            </ul>
            <div class="block-right pull-right">
                <p class="phone-rest">+7 (495) 799-09-62</p>
                <a href="javascript:" class="login" data-toggle="modal" data-target="#support">Обратная связь</a>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>