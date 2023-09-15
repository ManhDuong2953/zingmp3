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
        <form>
			<img src="../../Component/assets/Logo.png" alt="">
			<a href="/ZingMP3/Pages/Home/HomeLayOut.php" class="icon-home"><i class="fa-solid fa-house" style="color: #ffffff;"></i></a>

            <label for="username">Tên tài khoản</label>
            <input type="text" placeholder="Email or Phone" id="username">

            <label for="password">Mật khẩu</label>
            <input type="password" placeholder="Password" id="password">

			<label for="confirm_password">Nhập lại mật khẩu</label>
            <input type="confirm_password" placeholder="confirm_Password" id="confirm_password">

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