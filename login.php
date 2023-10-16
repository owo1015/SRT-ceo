<html>
<head>
    <meta http-http-equiv="content-type" content="text/html; charest=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <title>로그인</title>
</head>
<body>
    <div class="wrap">
        <div class="login">
            <h2>SRT CEO</h2>

            <form method='POST' action='loginGo.php'>

                <div class="login_id">
                    <h4>&nbsp;&nbsp;&nbsp;아이디</h4>
                    <input type="text" name="ceoid" placeholder="ID" required>
                </div>
                <div class="login_pw">
                    <h4>&nbsp;&nbsp;&nbsp;비밀번호</h4>
                    <input type="password" name="pw3" placeholder="Password" required>
                </div>
                <div class="joinfind">
                    <a href="join.php">회원가입</a>
                    <a href="find.php">계정찾기</a>
                </div>
                <div class="submit">
                    <a href="loginGo.php"><input type="submit" value="로그인"></a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>