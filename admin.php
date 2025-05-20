<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ADMIN BÓNG ĐÁ</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    *{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Montserrat', sans-serif;}
    body{display: flex;background-color: #f4f4f9;}
    .slide{position: sticky;top:0;width: 280px;height: 100vh;padding: 0 1rem;background-color:rgba(10, 99, 59, 0.78);color: #fff;}
    .slides{height: 80px;padding: 18px;}
    .menu{height: 88%;padding: 0;list-style: none;}
    .menu li{padding: 16px;margin: 10px 0;border-radius: 8px;transition: 0.3s;}
    .menu li:hover{background: rgba(173, 216, 230, 0.3);}
    .menu a{color: #fff;text-decoration: none;font-size: 15px;display: flex;align-items: center;gap: 1rem;}
    .menu i {font-size: 22px;}
    .content{flex: 1;padding: 1rem;}
    .header-logo{display: flex;justify-content: space-between;align-items: center;background: #fff;border-radius: 10px;padding: 10px 20px;margin-bottom: 1rem;}
    .header-title{color:rgb(6, 122, 13);}
    .search-box{background-color: #d8e2dc;border-radius: 15px;color: #006d77;display: flex;align-items: center;padding: 4px 10px;}
    .search-box input{background: transparent;padding: 10px;border: none;}
    .search-box i{font-size: 1.2rem;}
    iframe{width: 100%; height: calc(100vh - 130px); border: none;}
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="slide">
  <div class="slides"></div>
  <h3 style="font-size: 28px; margin-top:-2rem; margin-left: 1rem">⚽ BÓNG ĐÁ</h3>
  <ul class="menu">
    <li>
      <a href="#" onclick="loadIframeContent('dashboard.php'); return false;">
        <i class='bx bx-home-alt'></i><span>Trang chủ</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="loadIframeContent('qlygiaidau.php'); return false;">
        <i class='bx bxs-trophy'></i><span>Quản lý Giải đấu</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="loadIframeContent('qlydoibong.php'); return false;">
        <i class='bx bx-football'></i><span>Quản lý Đội bóng</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="loadIframeContent('qlycauthu.php'); return false;">
        <i class='bx bx-user'></i><span>Quản lý Cầu thủ</span>
      </a>
    </li>
    <li>
      <a href="#" onclick="loadIframeContent('thongke.php'); return false;">
        <i class='bx bx-bar-chart'></i><span>Thống kê</span>
      </a>
    </li>
    <li>
      <a href="dangxuat.php">
        <i class='bx bx-log-out'></i><span>Đăng xuất</span>
      </a>
    </li>
  </ul>
</div>

<!-- Main Content -->
<div class="content">
  <div class="header-logo">
    <div class="header-title">
      <span>Hệ thống quản trị</span>
      <h2>Chào mừng Admin</h2>
    </div>
    <div class="search-box">
      <i class='bx bx-search'></i>
      <input type="text" placeholder="Tìm kiếm nhanh..." />
    </div>
  </div>

  <!-- Iframe loading -->
  <iframe id="content-frame"></iframe>
</div>

<!-- JavaScript -->
<script>
  function loadIframeContent(page) {
    const iframe = document.getElementById("content-frame");
    iframe.src = page;
  }
</script>

</body>
</html>
