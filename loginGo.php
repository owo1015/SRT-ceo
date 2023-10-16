<?php
    session_start();

    $con = mysqli_connect("localhost","SRT","1234","SRT") or die("fail");

    $ceoid=$_POST['ceoid'];
    $pw3=$_POST['pw3'];

    $query = "select * from ceo where ceoid='".$ceoid."'";
    $result = $con->query($query);

    if(mysqli_num_rows($result) == 1) {
        $row=mysqli_fetch_assoc($result);

        if($row['pw3']==$pw3){
            $_SESSION['ceoid']=$ceoid;
            if(isset($_SESSION['ceoid'])) { ?>
                <script>
                    alert("로그인 되었습니다.");
                    location.replace("orderlist.php");
                </script>
<?php
            }
            else{
                echo "session fail";
            }
        }
        else { ?>
            <script>
                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                history.back();
            </script>
<?php
        }
    }
    else{ ?>
        <script>
            alert("아이디 혹은 비밀번호가 잘못되었습니다.");
            history.back();
        </script>
<?php
    } ?>
