<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\controllers;

/**
 * Пользователи
 *
 * Наследуется от контроллера документов модуля lowbase/yii2-user
 * Можете добавлять или изменять уже готовые action пользовательской части:
 * ------------------------------------------------
 * actionLogin - Страница авторизации
 * actionSignup - Страница регистрации
 * actionProfile - Страница профиля (личный кабинет)
 * actionShow($id) - Информация о пользователе
 * -------------------------------------------------
 * Если Вы хотите изменить лишь представления страниц без изменения логики,
 * можете воспользоваться возможностями модуля lowbase/yii2-user - пользовательское
 * отображение страниц (см. документацию модуля)
 *
 * Class UserController
 * @package app\controllers
 */

use Yii;
use lowbase\user\models\forms\SignupForm;

class UserController extends \lowbase\user\controllers\UserController
{
    public function actionSignup()
    {
        // Уже авторизированных отправляем на домашнюю страницу
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('signup-success', Yii::t('user', 'Ссылка с подтверждением регистрации отправлена на Email.'));
            return $this->goBack(['signup']);
        }

        if (method_exists($this->module, 'getCustomView')) {
            return $this->render($this->module->getCustomView('signup', '@vendor/lowbase/yii2-user/views/user/signup'), [
                'model' => $model,
            ]);
        } else {
            return $this->redirect(['/']);
        }
    }
}
