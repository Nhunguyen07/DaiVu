<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập - Giải đấu Bóng Đá</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0,0,0,0.6)),
                  url('images/trangchu.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 40px 30px;
      border-radius: 16px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
      animation: fadeIn 1s ease;
    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
      color: #00ffc3;
    }

    .form-group {
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #f1f1f1;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 14px;
      font-size: 16px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      outline: none;
      transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #00ffc3;
      background-color: rgba(255, 255, 255, 0.2);
    }

    .btn-login {
      width: 100%;
      padding: 14px;
      font-size: 18px;
      font-weight: bold;
      background: linear-gradient(90deg, #00ffc3, #00c896);
      border: none;
      border-radius: 10px;
      color: black;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: linear-gradient(90deg, #00c896, #009e7a);
      color: white;
      transform: scale(1.03);
    }

    .extra-links {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #ddd;
    }

    .extra-links a {
      color: #00ffc3;
      text-decoration: none;
      font-weight: 500;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 480px) {
      .login-container {
        margin: 0 20px;
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Đăng Nhập</h2>
    <form action="xulydangnhap.php" method="POST">
      <div class="form-group">
        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập" required>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
      </div>
      <button type="submit" class="btn-login">Đăng nhập</button>
    </form>
    <div class="extra-links">
      <p>Chưa có tài khoản? <a href="dangky.html">Đăng ký ngay</a></p>
    </div>
  </div>
</body>
</html>
