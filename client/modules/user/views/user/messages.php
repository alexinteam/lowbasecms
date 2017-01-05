<?php
    use app\models\Messages;
?>

<form class="form-inline" action="/client-user/user/send-message" method="POST">
    <select class="form-control" name="to" id="to">
        <option selected="selected">Выберите пользователя</option>
        <?php
        foreach ($users as $user) {
            echo '<option user_id="'.$user->id.'" value="'.$user->id.'">'.$user->first_name.' '.$user->last_name.'</option>';
        }
        ?>
    </select>
    <div class="form-group" style="width: 500px;">
        <input name="message" class="form-control" placeholder="Сообщение"  id="message-text" style="width: 500px;">
    </div>
    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
    <br>
    <br>
    <input type="submit" class="btn btn-default" value="Отправить сообщение">
</form>
<br>
<form action="/client-user/user/read-all-messages" type="POST">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
    <input type="submit" class="btn btn-default" value="Отметить все как прочитаные">
</form>

<br>
<br>


<div class="list-group">
    <?php
        foreach ($messages as $message) {
            if($message['status'] == Messages::MESSAGE_UN_READ) {
                echo '<a href="#" class="list-group-item list-group-item-action list-group-item-danger" message_id="'.$message['message_id'].'">';
            } else {
                echo '<a href="#" class="list-group-item list-group-item-action">';
            }
            echo '<h5 class="list-group-item-heading">Сообщение от '.$message['fromFirstname'].' '.$message['fromLastname'].'</h5>';
            echo '<p class="list-group-item-text">'.$message['message_text'].'</p></a>';
        }
    ?>
</div>