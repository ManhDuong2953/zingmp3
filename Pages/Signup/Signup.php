<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Signup.css">
    <link rel="stylesheet" href="../../GlobalStyle/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <div class="signup-container">
        <form method="post" action="./ProcessSignup.php">
			<img src="../../Component/assets/Logo.png" alt="">
			<a href="/ZingMP3/Pages/Home/HomeLayOut.php" class="icon-home"><i class="fa-solid fa-house" style="color: #ffffff;"></i></a>

            <label for="useraccount">Tên tài khoản</label>
            <input type="text" name="name_account" placeholder="Nhập tên tài khoản..." id="useraccount">

            <label for="username">Họ và tên</label>
            <input type="text" name="name_user" placeholder="Nhập tên người dùng" id="username">

            <label for="password">Mật khẩu</label>
            <input type="password" name="password_hash" placeholder="Password" id="password">

			<label for="confirm_password">Nhập lại mật khẩu</label>
            <input type="confirm_password" name="confirm_password" placeholder="Confirm_Password" id="confirm_password">

            <button type="submit">Đăng kí</button>
            <div class="direct-login">
                <p>Quay lại <a href="/ZingMP3/Pages/Login/Login.php">đăng nhập ngay</a></p>
            </div>
        </form>
    </div>
</body>

</html>



</body>

</html>