<nav class="navbar navbar-inverse navbar-fixed-top bg-menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand name-brand" href="/"><img src="<?= $this->getThemeUrl('images/logo.png'); ?>" class="logo-main" alt="Logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#block-opportunities" class="main-link">Возможности</a></li>
                <li><a href="#block-pricing">Тарифные планы</a></li>
                <li><a href="/signup">Регистрация</a></li>
                <!--<li><a href="javascript:" data-toggle="modal" data-target="#reg">Регистрация</a></li>-->
                <li><a href="/login">Войти в кабинет</a></li>
            </ul>
            <div class="block-right pull-right">
                <p class="phone-rest">+7 (495) 799-09-62</p>
                <a href="#block-contact" class="login" data-toggle="modal" data-target="#support">Обратная связь</a>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>