<?php
    use app\models\Messages;
?>

<div class="form-inline" id="send-message">
    <select class="selectpicker form-control" name="message_to">
        <?php
        foreach ($users as $user) {
            echo '<option>'.$user->first_name.' '.$user->last_name.'</option>';
        }
        ?>
    </select>
    <div class="form-group" style="width: 500px;">
        <input type="message" name="message" class="form-control" placeholder="Сообщение" style="width: 500px;">
    </div>
    <button id="submitSendMessage" class="btn btn-default">Отправить сообщение</button>
</div>
<br>
<br>


<div class="list-group">
    <?php
        foreach ($messages as $message) {
            if($message['status'] == Messages::MESSAGE_UN_READ) {
                echo '<a href="#" class="list-group-item list-group-item-action list-group-item-danger">';
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
                url: '/admin-user/user/send-message',
                data: {_csrf: $csrfToken},
                success: function () {
                    alert('send!( imlementation in progress)');
                }
            });
        })
    });
</script>