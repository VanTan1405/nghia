<?php
// if (isset($_POST["user"])) {
require_once "config.php";
$u = $_POST['username'];
$p = $_POST['password'];

$sql = "select username from users where username='$u'";
$result = mysqli_query($conn, $sql);
$sqls = "select password from users where password='$p'";
$results = mysqli_query($conn, $sqls);
$remember_me = isset($_POST['remember_me']) ? 1 : 0;

if (mysqli_num_rows($result) > 0 && mysqli_num_rows($results) > 0) {
    echo '<script>alert("Bạn đã đăng nhập thành công")</script>';
} elseif (mysqli_num_rows($result) > 0) {
    echo '<script>alert("Lỗi đăng nhập: Mật khẩu không đúng! Vui lòng nhập lại")</script>';
} elseif (mysqli_num_rows($results) > 0) {
    echo '<script>alert("Lỗi đăng nhập: Tên đăng nhập không đúng! Vui lòng nhập lại")</script>';
} elseif (mysqli_num_rows($result) <= 0 && mysqli_num_rows($results) <= 0) {
    echo '<script>alert("Lỗi đăng nhập: Tên đăng nhập và mật khẩu không đúng! Vui lòng nhập lại")</script>';
} else {
    $row = mysqli_fetch_assoc($result, $results);
    $_SESSION['users'] = $row["username"];
    if ($_POST["remember"] == "1") {
        setcookie("users_login", $row["username"], time() + 5 * 60);
    }
}

// }















// if (isset($_POST['login'])) {

//     $username = addslashes($_POST['username']);
//     $password = addslashes($_POST['password']);

// if (!$username || !$password) {
// echo "Nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
// exit;
// }
// if ($password != $_POST['password']) {
//     echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
//     exit;
// }
