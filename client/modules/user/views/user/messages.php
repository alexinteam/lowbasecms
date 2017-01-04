<?php
    use app\models\Messages;
?>

<div class="form-inline" id="send-message">
    <select class="selectpicker form-control" name="message_to" id="message_to">
        <?php
        foreach ($users as $user) {
            echo '<option user_id="'.$user->id.'">'.$user->first_name.' '.$user->last_name.'</option>';
        }
        ?>
    </select>
    <div class="form-group" style="width: 500px;">
        <input type="message" name="message" class="form-control" placeholder="Сообщение"  id="message-text" style="width: 500px;">
    </div>
    <button id="submitSendMessage" class="btn btn-default">Отправить сообщение</button>
</div>
<br>
<form action="/client-user/user/read-all-messages" type="POST">
    <button type="submit" id="readAllMessages" class="btn btn-default">Отметить все как прочитаные</button>
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


<script>
    $('document').ready(function() {
        $(".dropdown-menu li a").click(function(){
            $(this).parents(".btn-default").find('.selection').text($(this).text());
            $(this).parents(".btn-default").find('.selection').val($(this).text());
        });

        $('#submitSendMessage').click(function() {
            var $csrfToken = $('meta[name="csrf-token"]').attr("content");
            $.post({
                url: '/client-user/user/send-message',
                data: {
                    _csrf: $csrfToken,
                    message: $('#message-text').val(),
                    to: $('#message_to :selected').attr('user_id')
                },
                success: function (data) {
                    console.log(data);
                    if(data.status) {
                        alert('send!');
                    } else {
                        alert('NOT send!');
                    }
                }
            });
        });

//        $('#readAllMessages').click(function() {
//            var $csrfToken = $('meta[name="csrf-token"]').attr("content");
//            $.post({
//                url: '/admin-user/user/read-all-messages',
//                data: {
//                    _csrf: $csrfToken
//                },
//                success: function () {
//                    $('.list-group-item').removeClass('list-group-item-danger');
//                }
//            });
//        });
    });
</script>