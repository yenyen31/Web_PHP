<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
?>
<div id="top">
    <h3>
        <a href="index.php">{서비스 이름}</a> <!-- 서비스 이름 -->
    </h3>
    <ul id="top_menu">
        <?php
        if (!$userid) {
        ?>
            <li><a href="member_form.php">sign up</a> </li> <!-- 회원가입 -->
            <li> | </li>
            <li><a href="login_form.php">sign in</a></li> <!-- 로그인 -->
        <?php
        } else {
            $logged = $username . "(" . $userid . ")님[Level:" . $userlevel . ", Point:" . $userpoint . "]";
        ?>
            <li><?= $logged ?> </li>
            <li> | </li>
            <li><a href="logout.php">log out</a> </li> <!-- 로그아웃 -->
            <li> | </li>
            <li><a href="member_modify_form.php">my page</a></li> <!-- 정보 수정 -->
        <?php
        }
        ?>
        <?php
        if ($userlevel == 1) {
        ?>
            <li> | </li>
            <li><a href="admin.php">관리자 모드(15장)</a></li> <!-- 관리자 모드 -->
        <?php
        }
        ?>
    </ul>
</div>
<div id="menu_bar">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="message_form.php">쪽지 만들기(13장)</a></li>
        <li><a href="board_form.php">게시판 만들기(14장)</a></li>
        <li><a href="index.php">사이트 완성하기(15장)</a></li>
    </ul>
</div>