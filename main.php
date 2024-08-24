<?php
session_start();
if(!isset($_SESSION['userid'])){
    header('Location: ./login_stu.html');
}
echo "홈(로그인 성공)";
?>