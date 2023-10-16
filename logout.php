<?php
    session_start();

    $result = session_destroy();
    if($result) {
        echo '<script>';
        echo 'alert("로그아웃 되었습니다.");';
        echo 'location.replace("login.php");';
        echo '</script>';
    }
?>