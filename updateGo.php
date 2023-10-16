<?php
    @session_start();

    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
    
    $ceoid=$_SESSION['ceoid'];
    $pw3=$_POST['pw3'];
    $pw4=$_POST['pw4'];
    $cname=$_POST['cname'];
    $ctel=$_POST['ctel'];


    if($pw3 == $pw4) {
        $sql = "update ceo set pw3='".$pw3."', cname='".$cname."', ctel='".$ctel."'
        where ceoid='".$ceoid."'";

        $ret = mysqli_query($con, $sql);
        if($ret) {
            echo '<script>';
            echo 'alert("프로필이 수정되었습니다.");';
            echo 'location.replace("orderlist.php");';
            echo '</script>';
        }
        else {
            echo '<script>';
            echo 'alert("프로필 수정에 실패했습니다.");';
            echo 'location.replace("update.php");';
            echo '</script>';
        }
    }
    else {
        echo '<script>';
        echo 'alert("비밀번호가 다릅니다.");';
        echo 'location.replace("update.php");';
        echo '</script>';
    }

    mysqli_close($con);
?>