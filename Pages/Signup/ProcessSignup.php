<?php
session_start();
require_once("../../Config/configConnectDB.php");

$inputs = array(
    'name_account' => $_POST['name_account'],
    'name_user' => $_POST['name_user'],
    'password_hash' => $_POST['password_hash'],
    'confirm_password' => $_POST['confirm_password'],
);
if(count(array_filter($inputs)) !== count($inputs)) {
    echo 'vui lòng nhập đầy đủ thông tin';
    exit();
} else {
    if($inputs["password_hash"] != $inputs['confirm_password']) {
        echo "Mật khẩu không trùng khớp";
        exit();
    } else {
        $checkUserAccount = $pdo->prepare("SELECT * FROM user where account_name = :name_account");
        $checkUserAccount->bindParam(':name_account',$inputs['name_account'], PDO::PARAM_STR);
        $checkUserAccount->execute();
        $checkResult = $checkUserAccount->fetchAll(PDO::FETCH_ASSOC);
        if(count($checkResult) === 0) {
            $sql = $pdo->prepare("INSERT INTO user (user_name, account_name, password) VALUES (:name_user, :name_account, :password_hash);");
            $sql->bindParam(':name_user',$inputs['name_user'], PDO::PARAM_STR);
            $sql->bindParam(':name_account',$inputs['name_account'], PDO::PARAM_STR);
            $sql->bindParam(':password_hash',$inputs['password_hash'], PDO::PARAM_STR);
            $sql->execute();
            echo "Đăng ký thành công";
            header('Location: ../Login/Login.php');
            exit();

        } else {
            echo "Tài khoản này đã được tạo trước đó";
            exit();
        }
    }
}
?>