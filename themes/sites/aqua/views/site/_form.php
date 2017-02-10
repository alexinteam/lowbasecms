<form id="customize-controls" class="full-overlay-sidebar">
    <div class="row row-controls-btns">
        <div class="col-md-12 col-xs-12">
            <input type="submit" class="btn-line btn-save" value="Сохранить">
            <a href="index-for-user.html" class="customize-controls-close">&times;</a>
        </div>
    </div>



    <div class="wp-full-overlay-sidebar-content">

        <!-- Header-->
        <div class="row row-editor row-name-rest">
            <div class="col-md-12 col-xs-12">
                <p>Вы настраиваете <span>Parmezan 1905</span></p>
            </div>
        </div>


        <div class="full-overlay-sidebar-content">

            <!-- active theme -->
            <div class="row row-editor row-name-theme">
                <div class="col-md-12 col-xs-12">
                    <p>Активная тема <span>Individual</span></p>
                    <button type="button" class="button change-theme" tabindex="0">Сменить</button>
                </div>
            </div>


            <div class="panel-group panel-editor" id="accordion">

                <!-- common settings -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                            Общие настройки</a>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-site-name">Название сайта</label>
                                    <input id="editor-site-name" type="text" value="Parmezan 1905">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-site-description">Краткое описание</label>
                                    <input id="editor-site-description" type="text" value="">
                                </li>
                                <li>
                                    <label class="panel-editor-title">Иконка сайта</label>
                                    <p class="panel-editor-description">Иконка сайта используется в браузере и на экранах мобильных устройств. Иконка должна быть квадратной, не менее 512 пикселей по ширине и высоте.</p>
                                    <button class="load-btn">Загрузить иконку</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- header -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                            Шапка сайта</a>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title">Логотип</label>
                                    <button class="load-btn">Загрузить логотип</button>
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-head-address">Адрес</label>
                                    <input id="editor-head-address" type="text" value="">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-head-phone">Телефон</label>
                                    <input id="editor-head-phone" type="text" value="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- banner -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                            Баннер</a>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-banner-greeting">Приветствие</label>
                                    <input id="editor-banner-greeting" type="text" value="Добро пожаловать в Ресторан!">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-banner-description">Описание</label>
                                    <textarea id="editor-banner-description" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                             </ul>
                        </div>
                    </div>
                </div>

                <!-- about -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                            О ресторане</a>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-about-header1">Заголовок</label>
                                    <input id="editor-about-header1" type="text" value="ЗАГОЛОВОК 1">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-description1">Описание</label>
                                    <textarea id="editor-about-description1" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить фото</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-header2">Заголовок</label>
                                    <input id="editor-about-header2" type="text" value="ЗАГОЛОВОК 2">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-description2">Описание</label>
                                    <textarea id="editor-about-description2" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить фото</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-header3">Заголовок</label>
                                    <input id="editor-about-header3" type="text" value="ЗАГОЛОВОК 3">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-description3">Описание</label>
                                    <textarea id="editor-about-description3" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить фото</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-header4">Заголовок</label>
                                    <input id="editor-about-header4" type="text" value="ЗАГОЛОВОК 4">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-about-description4">Описание</label>
                                    <textarea id="editor-about-description4" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить фото</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <button type="button" class="button editor-btn add-btn" tabindex="0">Добавить новую строку</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- announce -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                            Афиша</a>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-announce-header">Заголовок афиши</label>
                                    <input id="editor-announce-header" type="text" value="Живая музыка по пятницам!">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-announce-description">Описание</label>
                                    <textarea id="editor-announce-description" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- advantages -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">
                            Преимущества</a>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-header1">Заголовок</label>
                                    <input id="editor-advantages-header1" type="text" value="Более 200 коктейлей">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-description1">Описание</label>
                                    <textarea id="editor-advantages-description1" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить иконку</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-header2">Заголовок</label>
                                    <input id="editor-advantages-header1" type="text" value="Более 200 коктейлей">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-description2">Описание</label>
                                    <textarea id="editor-advantages-description2" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить иконку</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-header3">Заголовок</label>
                                    <input id="editor-advantages-header3" type="text" value="Более 100 бургеров">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-description3">Описание</label>
                                    <textarea id="editor-advantages-description3" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить иконку</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-header4">Заголовок</label>
                                    <input id="editor-advantages-header4" type="text" value="Более 100 бургеров">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-advantages-description4">Описание</label>
                                    <textarea id="editor-advantages-description4" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                                <li>
                                    <button class="load-btn">Загрузить иконку</button>
                                </li>
                                <li>
                                    <button type="button" class="button editor-btn" tabindex="0">Удалить всю строку</button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <button type="button" class="button editor-btn add-btn" tabindex="0">Добавить новую строку</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- feature 2-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed">
                            Блок призыва</a>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-feature2-header">Заголовок призыв</label>
                                    <input id="editor-feature2-header" type="text" value="Живая музыка по пятницам!">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-feature2-description">Описание</label>
                                    <textarea id="editor-feature2-description" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- menu -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="collapsed">
                            Меню ресторана</a>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title">Меню ресторана</label>
                                    <p class="panel-editor-description">На сайте представлена возможность скачивания меню для всех пользователей. Загрузите свое меню в формате .pdf или .doc</p>
                                    <button class="load-btn">Загрузить меню</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="collapsed">
                            Подвал сайта</a>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="panel-editor-list">
                                <li>
                                    <label class="panel-editor-title" for="editor-footer-address">Адрес</label>
                                    <input id="editor-footer-address" type="text" value="">
                                </li>
                                <li>
                                    <label class="panel-editor-title" for="editor-footer-phone">Телефон</label>
                                    <input id="editor-footer-phone" type="text" value="">
                                    <button type="button" class="button editor-btn" tabindex="0">Добавить номер</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>