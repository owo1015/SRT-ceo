<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="join.css">
    <title>회원가입</title>
</head>

<body>
    <script>
        function id_check() {
            if(!document.join.ceoid.value) {
                window.alert('아이디를 입력하세요.');
                document.join.ceoid.focus();
                return false
            }
            var a = document.join.ceoid.value;
            window.open('id_check.php?ceoid='+a, 'idc', width='300', height='200');
        }
    </script>

    <div id="con">
    <div id="login">
    <div id="login_form">
    <h3 class="login" style="letter-spacing:-1px;">회원가입</h3>
    <hr>

        
    <form method='POST' action='joinGo.php' name='join'>

        <p style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">아이디</p>
        <input type="text" name="ceoid" placeholder="ID" class="size" required>
        <br><td><input type="button" value="중복확인" onclick="id_check()"  class="check"></td>
        <p></p>
        </label>

        <label>
        <p style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">비밀번호</p>
        <input type="password" name="pw3" placeholder="PASSWORD" class="size" required>
        </label>

        <label>
            <p style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;"> </p>
            <input type="password" name="pw4" placeholder="PASSWORD CHECK" class="size" required>
        </label>

        <label>
            <p style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">이름</p>
            <input type="text" name="cname" placeholder="NAME" class="size">
        </label>

        <label>
            <p style="text-align: left; font-size:15px; color: #rgb(68, 62, 62); font-weight: bold;">전화번호</p>
            <input type="text" name="ctel" placeholder="숫자만 입력" class="size">
        </label>

    <br>
        <p>
            <input type="submit" value="가입" class="btn" onclick="location.replace('joinGo.php')">
            <input type="button" value="취소" class="btn" onclick="location.replace('login.php')">
        </p>

    </div>
    <div>
    </div>
    </form>
</body>

</html>