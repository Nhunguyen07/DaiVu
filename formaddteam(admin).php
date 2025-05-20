<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thêm Đội Bóng</title>
  <style>
    :root {
      --primary: #0284c7;
      --primary-dark: #0369a1;
      --bg: #f9fafb;
      --border: #e5e7eb;
      --text: #1f2937;
      --gray: #6b7280;
    }

    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-image: url('images/addcauthu.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      background-color: var(--bg);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .wrapper {
      display: flex;
      width: 100%;
      max-width: 1200px;
      height: 90vh;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .image-side {
      flex: 1;
      background-image: url('images/doibong.jpg');
      background-size: cover;
      background-position: center;
    }

    .form-container {
      flex: 1;
      padding: 30px;
      background: rgba(255, 255, 255, 0.43);
      overflow-y: auto;
    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: var(--text);
    }

    label {
      font-weight: 500;
      margin-top: 14px;
      display: block;
      color: var(--gray);
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid var(--border);
      border-radius: 12px;
      background-color: rgba(239, 243, 242, 0.61);
      transition: border-color 0.3s, box-shadow 0.3s;
      font-size: 16px;
       border-color:rgb(120, 185, 172);
    }

    input:focus, textarea:focus {
      border-color: #00b894;
      box-shadow: 0 0 6px rgba(0, 184, 148, 0.5);
      outline: none;
    }

    textarea {
      resize: vertical;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 14px;
      background-color: rgba(16, 79, 60, 0.85);
      color: whitesmoke;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      font-size: 18px;
      cursor: pointer;
      transition: transform 0.25s ease, background-color 0.3s ease;
    }

    button:hover {
      background: rgba(56, 209, 112, 0.7);
      transform: scale(1.02);
    }

    #message {
      margin-top: 18px;
      font-weight: 500;
      text-align: center;
    }

    @media (max-width: 768px) {
      .wrapper {
        flex-direction: column;
        height: auto;
        max-width: 100%;
        box-shadow: none;
        border-radius: 0;
      }

      .image-side {
        width: 100%;
        height: 200px;
        background-position: center;
      }

      .form-container {
        width: 100%;
        padding: 20px;
        border-radius: 0;
        background: rgba(255, 255, 255, 0.9);
      }

      h2 {
        font-size: 22px;
      }

      input, textarea, button {
        font-size: 16px;
      }

      label {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

<div class="wrapper">
  <div class="image-side"></div>

  <div class="form-container">
    <h2>Thêm Đội Bóng</h2>
    <form id="teamForm" enctype="multipart/form-data">
      <label for="team_name">Tên đội bóng</label>
      <input type="text" id="team_name" name="team_name" required />

      <label for="short_name">Tên viết tắt</label>
      <input type="text" id="short_name" name="short_name" required />

      <label for="description">Mô tả</label>
      <textarea id="description" name="description" rows="3"></textarea>

      <label for="founded_date">Ngày thành lập</label>
      <input type="date" id="founded_date" name="founded_date" required />

      <label for="logo">Logo đội bóng</label>
      <input type="file" id="logo" name="logo" accept="image/*" required />

      <input type="hidden" id="logo_url" name="logo_url" />
      <button type="submit">Thêm đội bóng</button>
    </form>
    <div id="message"></div>
  </div>
</div>

</body>
</html>
