<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ - Giải đấu Bóng Đá</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('images/trangchu.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
    }

    .logo {
      font-size: 18px;
      font-weight: bold;
      color: rgba(5, 53, 43, 0.84);
    }

    nav a {
      color: white;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color:rgba(11, 180, 50, 0.52);
    }

    .hero {
      text-align: center;
      padding: 120px 20px 80px;
      max-width: 800px;
      margin: auto;
      animation: fadeInUp 1.2s ease-out;
    }

    .hero h1 {
      font-size: 56px;
      font-weight: 800;
      background: linear-gradient(to right, #00d1ff,rgb(5, 234, 154));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 20px;
      animation: zoomIn 1s ease-in-out;
    }

    .hero p {
      font-size: 20px;
      color: #e2e8f0;
      line-height: 1.7;
      animation: fadeIn 1.6s ease-in;
    }

    .cta-button {
  margin-top: 40px;
  padding: 14px 32px;
  font-size: 18px;
  font-weight: bold;
  background-color: #00d1ff;
  color: #000;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 6px 12px rgba(0,0,0,0.25);
}
.cta-button:hover {
  background: linear-gradient(90deg, #00d1ff, #00ffa6, #00d1ff);
  background-size: 200% auto;
  color: white;
  transform: scale(1.08);
  box-shadow: 0 0 20px #00ffa6;
  animation: glow 1.2s ease-in-out infinite alternate;
}
@keyframes glow {
  from {
    box-shadow: 0 0 10px #00ffa6, 0 0 20px #00d1ff;
  }
  to {
    box-shadow: 0 0 20px #00d1ff, 0 0 30px #00ffa6;
  }
}

    footer {
      text-align: center;
      padding: 16px;
      background: rgba(0, 0, 0, 0.6);
      color: #bbb;
      font-size: 14px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes zoomIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>
  <section class="hero">
    <h1>CHÀO MỪNG ĐẾN VỚI GIẢI ĐẤU BÓNG ĐÁ</h1>
    <p>
      Giải Bóng Đá Mở Rộng 2025 là sân chơi hấp dẫn cho các đội bóng phong trào và bán chuyên trên toàn quốc. Với hình thức thi đấu chuyên nghiệp, giải mang lại cơ hội giao lưu, rèn luyện và lan tỏa đam mê thể thao.
    </p>
    <a href="add_team.html"><button class="cta-button">Bắt đầu ngay</button></a>
  </section>

  <footer>
    &copy; 2025 Quản lý bóng đá | Thiết kế bởi bạn
  </footer>
</body>
</html>
