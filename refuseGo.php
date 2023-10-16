<?php
    @session_start();

    if(isset($_SESSION['ceoid'])) {
        $con = mysqli_connect("localhost","SRT","1234","SRT");
        $value = $_GET["user_id"];

        $sql = "select * from restaurant where ceo_ceoid='".$_SESSION['ceoid']."'";
        $ret = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($ret);
        $rname = $row['rname'];
        
        $sql = "select * from basket where restaurant_rname='".$rname."'";
        $ret = mysqli_query($con, $sql);

        $sql = "delete from basket where user_id='".$value."' and restaurant_rname='".$rname."'";
        $ret = mysqli_query($con, $sql);
    }
?>

<script>
    alert('주문이 거절되었습니다.')
    history.back()
</script>