<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="orderlist.css">
    <title>주문확인</title>

<script>
    var vHas = location.hash;
        if(vHas=="")
            location.hash = "#tab1";
</script>

<?php
    @session_start();

    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    if(isset($_SESSION['ceoid'])) {
        echo "<div id='hi'>";
        echo $_SESSION['ceoid'];?>님 안녕하세요
        <input type="submit" value="로그아웃" onclick='location.replace("logout.php")' class="size">
        <input type="submit" value="프로필 수정" onclick='location.replace("update.php")' class="size">
        </div>
<?php
        $sql = "select * from restaurant where ceo_ceoid='".$_SESSION['ceoid']."'";
        $ret = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($ret);
        $rname = $row['rname'];
    }
    else {
        echo "<script>alert('접근 권한이 없습니다.');location.replace('login.php);</script>";
    }
?>

</head>    
<body>
    <div id="con">
    <div id="login">
    <div id="login_form">
    <h1 class="login" style="letter-spacing:-1px;">주문 확인</h1>
    <hr>
    
    <div class="tabs">
        <section id="tab1">
            <h2><a href="#tab1" style="font-size: 18px;">들어온 주문</a></h2>
            <?php
                $sql = "select * from basket where restaurant_rname='".$rname."' and accept='X'";
                $ret = mysqli_query($con, $sql);

                $user_id = array();
                $user_id = [];
                if(!empty($ret) || $ret == true) {
                    while($row = mysqli_fetch_array($ret)) {
                        $user_id[] = $row['user_id'];
                    }
                }
                $user_id = array_unique($user_id);

                foreach($user_id as $value) {
                    $sql = "select * from basket where user_id='".$value."' and restaurant_rname='".$rname."' and accept='X'";
                    $ret = mysqli_query($con, $sql);

                    echo "<div>";
                    echo "<br>";
                        $sum = 0;

                        echo "<table>";
                        echo "<tr>";
                        echo $value;
                        while($row = mysqli_fetch_array($ret)) {
                            $takeout = $row['takeout'];
                            $time = $row['time'];
                            $date = $row['date'];
                            $num = $row['num'];
                            $payment = $row['payment'];

                            echo "<tr>";
                            echo "<td>", $row['menu_mname'], "</td>";
                            echo "<td>", $row['bprice'], "</td>";
                            echo "<td>", $row['amount'], "</td>";
                            $sum = $sum + $row['bprice'] * $row['amount'];
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "총 합계: ", $sum, "<br><br>";

                        echo $takeout, "<br>";
                        echo $date, "<br>";
                        echo $time, "<br>";
                        echo $num, "명<br>";
                        echo $payment, "<br>"; 
                        echo "<a class='bt' href='acceptGo.php?user_id=", $value, "'>수락</a>";
                        echo "<a class='bt' href='refuseGo.php?user_id=", $value, "'>거절</a>";
                    echo "</div><br>";

                    echo "<br><hr style='border-top: 8px double #bbb;'><br>";
                }
            ?>
        </section>
        <section id="tab2">
            <h2><a href="#tab2">수락한 주문</a></h2>
            <?php
                $sql = "select * from basket where restaurant_rname='".$rname."' and accept='O'";
                $ret = mysqli_query($con, $sql);

                $user_id2 = array();
                $user_id2 = [];
                if(!empty($ret) || $ret == true) {
                    while($row = mysqli_fetch_array($ret)) {
                        $user_id2[] = $row['user_id'];
                    }
                }
                $user_id2 = array_unique($user_id2);

                foreach($user_id2 as $value) {
                    $sql = "select * from basket where user_id='".$value."' and restaurant_rname='".$rname."' and accept='O'";
                    $ret = mysqli_query($con, $sql);

                    echo "<div>";
                        $sum = 0;

                        echo "<table>";
                        echo "<tr>";
                        echo $value;
                        while($row = mysqli_fetch_array($ret)) {
                            $takeout = $row['takeout'];
                            $time = $row['time'];
                            $date = $row['date'];
                            $num = $row['num'];
                            $payment = $row['payment'];

                            echo "<tr>";
                            echo "<td>", $row['menu_mname'], "</td>";
                            echo "<td>", $row['bprice'], "</td>";
                            echo "<td>", $row['amount'], "</td>";
                            $sum = $sum + $row['bprice'] * $row['amount'];
                            echo "</tr>";
                        }
                        echo "</table><br>";
                        echo $takeout, "<br>";
                        echo $date, "<br>";
                        echo $time, "<br>";
                        echo $num, "명<br>";
                        echo $payment, "<br>";
                        echo "총 합계: ", $sum, "<br>";

                        echo "<a class='bt' href='completeGo.php?user_id=", $value, "'>완료</a>";
                    echo "</div><br>";

                    echo "<br><hr style='border-top: 8px double #bbb;'><br>";
                }
            ?>
        </section> 
    </div>

    <footer>
        <div class="edit">
        정보수정필요시 카카오톡 오픈채팅을 이용해주십시오.
        <a href = "https://open.kakao.com/o/syoQkwMd"> 오픈채팅방으로 이동하기 </a>
        </div> 
    </footer>
</body>
</html>