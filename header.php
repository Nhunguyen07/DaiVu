<header>
  <div class="logo">🏆 DaiVu</div>
  <nav>
    <div class="menu-left">
      <a href="index.php">Trang chủ</a>
      <a href="add_team.html">Giải đấu</a>
      <a href="list_team.html">Cầu thủ</a>
      <a href="list_team.html">Đội bóng</a>
    </div>
    <div class="menu-right">
      <a href="dangnhap.php"><button class="btn-header">Đăng nhập</button></a>
      <a href="register.html"><button class="btn-header">Đăng ký</button></a>
    </div>
  </nav>
</header>

<style>
  header {
   background-color: #ffffff;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;

  }

  .logo {
    font-size: 18 px;
    font-weight: bold;
    color: rgb(10, 91, 54);
  }

  nav {
    display: flex;
    justify-content: space-between;
    flex: 1;
    align-items: center;
    margin-right: -2rem;
  }

  .menu-left,
  .menu-right {
    display: flex;
    align-items: center;
  }

  .menu-left {
    margin-left: 250px;
  }

  .menu-left a,
  .menu-right a {
    margin: 0 20px;
      color: #333;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
  }

  .menu-left a {
    margin: 0 50px;
    text-decoration: none;
            color: #333;
            transition: color 0.3s;
  }

  .menu-left a:hover {
    color: #22d634;
  }

  .btn-header {
    padding: 8px 18px;
    background: rgba(24, 135, 77, 0.61);
    border: none;
    border-radius: 6px;
    color: black;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Poppins', sans-serif;
  }

  .btn-header:hover {
    background: linear-gradient(to right, #22d634, #0da37f);
    color: white;
    transform: scale(1.05);
  }
</style>
