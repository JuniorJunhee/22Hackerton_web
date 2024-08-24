<?php
include 'lib.php';
// db 정보값
// $db_passwd = sha1('1234');
$id = $_POST['id'];
$passwd = $_POST['passwd'];

$sql = "SELECT * FROM students where id = '$id' && passwd='$passwd'";
$result = mysqli_query($conn,$sql); 
// if($_GET['logout'] == 'out') {
//     // if(array_key_exists("logout",$_GET)) {
//         session_unset(); 
//         $url = './main';
//         $tools->javaGo($url);
//     }

$row = mysqli_fetch_array($result);
if($row > 0) {
    $_SESSION['USERID'] = $row['id'];
    $_SESSION['NAME'] = $row['name'];
    ?>
    <script>
        location.href="start.html";
    </script>
    <?php
} else {
    echo("관리자에게 문의하세요");
}

?>