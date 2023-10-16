<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    $ceoid=$_POST['ceoid'];
    $pw3=$_POST['pw3'];
    $pw4=$_POST['pw4'];
    $cname=$_POST['cname'];
    $ctel=$_POST['ctel'];

    if($pw3 == $pw4) {
        $sql = "insert into ceo (ceoid, pw3, cname, ctel) values ('".$ceoid."', '".$pw3."', '".$cname."', '".$ctel."')";
        $ret = mysqli_query($con, $sql);
        if($ret) {
            echo '<script>';
            echo 'alert("회원가입 성공");';
            echo 'location.replace("login.php");';
            echo '</script>';
        }
        else {
            echo '<script>';
            echo 'alert("회원가입 실패");';
            echo 'location.replace("join.php");';
            echo '</script>';
        }
    }
    else {
        echo '<script>';
        echo 'alert("비밀번호가 다릅니다");';
        echo 'location.replace("join.php");';
        echo '</script>';
    }

    mysqli_close($con);
?>