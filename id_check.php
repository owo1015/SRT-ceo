<?php
    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");
    $sql = "select * from ceo where ceoid='".$_GET['ceoid']."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);


    if(!$row['ceoid']) {
        echo $_GET['ceoid'];
        echo "는 사용 가능한 아이디입니다.";
        echo "<br>";
        echo "<input type=button value='아이디 사용하기' onclick='window.close()'>";
    }
    else {
        echo $_GET['ceoid'];
        echo "는 이미 사용중인 아이디입니다.";
    }
?>