<!-- Modal -->
<div class="modal fade" id="reg" role="dialog">
    <div class="modal-center">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Регистрация</h4>
                </div>
                <form action="/signup" method="post">
                    <div class="modal-body">
                        <div class="content-input">
                            <p><input class="form-input" type="text" placeholder="Введите ИНН Вашей организации"></p>
                            <p><input class="form-input" type="text" placeholder="Введите название Вашей организации"></p>
                            <p><input class="form-input" type="text" placeholder="Введите ФИО генерального директора"></p>
                            <p><input class="form-input" type="tel" placeholder="Введите контактный телефон организации"></p>
                            <p><input class="form-input" type="tel" placeholder="Введите дополнительные контакты"></p>
                            <p><input class="form-input" type="mail" placeholder="Введите почту компании"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p><input class="input-submit" type="submit" value="Отправить"></p>
                        <a href="javascript:" class="confidence"><span>Политика конфедициальности сайта</span></a>
                    </div>
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="support" role="dialog">
    <div class="modal-center">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Связаться с нами</h4>
                </div>
                <div class="modal-body">
                    <div class="content-input">
                        <p><input class="form-input" type="tel" placeholder="Введите Ваш телефон"></p>
                        <p><input class="form-input" type="mail" placeholder="Введите Вашу почту"></p>
                        <div class="select-style">
                            <select class="form-control select-block">
                                <option disabled="" selected="">Категория вопроса</option>
                                <option value="1">Установка сайта</option>
                                <option value="2">Наполнение контентом</option>
                                <option value="3">Создание учетной записи</option>
                                <option value="4">Удаление учетной записи</option>
                            </select>
                        </div>
                        <p><textarea class="form-input" placeholder="Опишите суть вопроса" rows="4"></textarea></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p><input class="input-submit" type="submit" value="Отправить"></p>
                    <a href="javascript:" class="confidence"><span>Политика конфедициальности сайта</span></a>
                </div>
            </div>

        </div>
    </div>
</div>