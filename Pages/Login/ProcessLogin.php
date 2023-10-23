<?php 
session_start();


require_once("../../Config/configConnectDB.php");
if(!empty($_POST['account_name']) && !empty($_POST['password'])) {
    $acc_name = $_POST['account_name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user where account_name = :account_name and password = :password";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':account_name',$acc_name, PDO::PARAM_STR);
    $statement->bindValue(':password',$password, PDO::PARAM_STR);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if($user) {
        $account_name_user = $user['account_name'];
        $id_user = $user['id_user'];
        $_SESSION['account_name_user'] = "$account_name_user";
        $_SESSION['id_user'] = $id_user;
        echo "Đăng nhập thành công";
        header('Location: ../Home/HomeLayOut.php');
        exit();
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không chính xác";
    } 
} else { 
    echo "Vui lòng nhập tên người dùng và mật khẩu";
}
?>