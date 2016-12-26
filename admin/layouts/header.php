<?php

use lowbase\user\models\User;
use yii\helpers\Html;
use app\models\Messages;

/* @var $this \yii\web\View */
/* @var $content string */

$me = Yii::$app->user->identity;
$messages = Messages::getLatestUnreadMessages($me->getId());
?>


<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a class="name-logo" href="/"><?php echo Yii::$app->name ?></a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>,
        </div>
        <form class="sidebar-search  sidebar-search-up" action="page_general_search_3.html" method="POST">
            <a href="javascript:;" class="remove">
                <i class="icon-close"></i>
            </a>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
            </div>
        </form>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge label-danger"> 7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>
                                <span class="bold">12 pending</span> notifications</h3>
                            <a href="page_user_profile_1.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-plus"></i>
                                                    </span> New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-info">
                                                        <i class="fa fa-bullhorn"></i>
                                                    </span> System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-danger">
                                                        <i class="fa fa-bolt"></i>
                                                    </span> Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <?php
                            if(count($messages) > 10) {
                                echo '<span class="badge label-default"> 10+ </span>';
                            } else {
                                echo '<span class="badge label-default"> '.count($messages).' </span>';
                            }
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have
                                <?php
                                    if(count($messages) > 10) {
                                        echo '<span class="bold">10 + New</span>';
                                    } else {
                                        echo '<span class="bold">'.count($messages).' New</span>';
                                    }
                                ?>
                                 Messages</h3>
                            <a href="/admin-user/user/list-messages">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <?php
                                    foreach($messages as $message) {
                                        echo '<li>
                                                <a href="/admin-user/user/list-messages">
                                                    <span class="photo">
                                                        <img src="/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> '.$message->getUserFLName($message->from).' </span>
                                                            </span>';
                                        echo '<span class="message">'.substr($message->message_text, 0, 100).' ... </span>
                                                    </a>
                                                </li>';
                                    }
                                ?>
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>-->
<!--                                                <span class="subject">-->
<!--                                                    <span class="from"> Lisa Wong </span>-->
<!--                                                    <span class="time">Just Now </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>-->
<!--                                                <span class="subject">-->
<!--                                                    <span class="from"> Richard Doe </span>-->
<!--                                                    <span class="time">16 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>-->
<!--                                                <span class="subject">-->
<!--                                                    <span class="from"> Bob Nilson </span>-->
<!--                                                    <span class="time">2 hrs </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>-->
<!--                                                <span class="subject">-->
<!--                                                    <span class="from"> Lisa Wong </span>-->
<!--                                                    <span class="time">40 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                                <span class="photo">-->
<!--                                                    <img src="layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>-->
<!--                                                <span class="subject">-->
<!--                                                    <span class="from"> Richard Doe </span>-->
<!--                                                    <span class="time">46 mins </span>-->
<!--                                                </span>-->
<!--                                        <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>-->
<!--                                    </a>-->
<!--                                </li>-->
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="/layouts/layout/img/avatar11.jpg" />
                        <span class="username username-hide-on-mobile"><?php echo $me->first_name ?></span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="/profile">
                                </i> My Profile </a>
                        </li>
                        <li>
                            <a href="/logout">
                                </i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->