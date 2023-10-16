<?php
    session_start();

    $con = mysqli_connect("localhost", "SRT", "1234", "SRT") or die("fail");

    if(isset($_SESSION['ceoid'])) {
        echo '<script>';
        echo 'alert("잘못된 접근입니다.");';
        echo 'location.back();';
        echo '</script>';
    }
    else {
?>

<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" href="find.css">
    <title>회원계정 찾기</title>
</head>
<body>
    <div id="con">
    <div id="login_form">
    <div id="login">

    <center>
    <h1>계정 찾기</h1>
    </center>
    <hr>

    <div class="find">
    <form method="post" action="findID.php">
        <fieldset>
            <legend>아이디 찾기</legend>
            <table>
                <label>
                <p style="text-align: left; font-size:13px; color: #rgb(68, 62, 62); font-weight: bold;">이름</p>
                <input type="text" size="35" name="cname" placeholder="NAME" class="size">
            </label>
            <label>
                <p style="text-align: left; font-size:13px; color: #rgb(68, 62, 62); font-weight: bold;">전화번호</p>
                <input type="text" size="35" name="ctel" placeholder="숫자만 입력" class="size">
            </label>
            </table>
            <input type="submit" value="Find ID" class="findbtn"/>
        </fieldset>
    </form>
    </div>


    <div class="find">
    <form method="post" action="findPW.php">
        <fieldset>
            <legend>비밀번호 찾기</legend>
            <table>
            <label>
                <p style="text-align: left; font-size:13px; color: #rgb(68, 62, 62); font-weight: bold;">아이디</p>
                <input type="text" size="35" name="ceoid" placeholder="ID" class="size">
            </label>
            <label>
                <p style="text-align: left; font-size:13px; color: #rgb(68, 62, 62); font-weight: bold;">이름</p>
            <input type="text" size="35" name="cname" placeholder="NAME" class="size">
            </label>
            <label>
                <p style="text-align: left; font-size:13px; color: #rgb(68, 62, 62); font-weight: bold;">전화번호</p>
                <input type="text" size="35" name="ctel" placeholder="숫자만 입력" class="size">
            </label>
            </table>
            <input type="submit" value="Find PW" class="findbtn" />
        </fieldset>
    </form>
    </div>
    <hr>
    <button type="button" onclick="location.href='login.php'" class="home">Home</button>
    <br><br>

</body>
</html>

<?php
    }
?>