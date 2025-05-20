<!DOCTYPE html>
<html lang="vi">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Thêm Cầu Thủ</title>
  <style>
  body {
    font-family: Arial;
    background-image: url('images/addcauthu.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    padding: 20px;
    min-height: 100vh;
    animation: fadeInBody 1.5s ease;
  }

  @keyframes fadeInBody {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  

  .form-container {
    max-width: 600px;
    margin: auto;
    background: rgba(255, 255, 255, 0.75);
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    animation: scaleIn 0.8s ease;
  }

  @keyframes popUpForm {
    from { transform: scale(0.95); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }

  h2 {
    text-align: center;
    font-size: 30px;
    margin-bottom: 20px;
    color: #2c3e50;
    animation: slideDown 1s ease;
  }

  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  label {
    margin-top: 10px;
    display: block;
    font-weight: bold;
  }

  input[type="text"], input[type="number"], input[type="date"], input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-top: 4px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: 0.3s ease;
    border-color:rgb(120, 185, 172);
     background-color: rgba(230, 239, 236, 0.26);
     border-radius: 14px;
  }

  input[type="text"]:focus, input[type="number"]:focus,
  input[type="date"]:focus, input[type="file"]:focus {
    border-color: #00b894;
    box-shadow: 0 0 5px rgba(0, 184, 148, 0.5);
  }

  input[type="radio"] {
    margin-right: 5px;
  }

  .radio-group {
    display: flex;
    gap: 20px;
    margin-top: 6px;
    align-items: center;
  }

  button {
    margin-top: 20px;
    width: 100%;
    padding: 16px;
    background-color: rgba(16, 79, 60, 0.85);
    color: whitesmoke;
    font-weight: bold;
    border: none;
    border-radius: 16px;
    transition: background-color 0.3s ease;
    font-size: 18px
  }

  button:hover {
    background-color: #079c84;
    transform: scale(1.02);
  }

  #suggestions {
    position: absolute;
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    max-height: 200px;
    overflow-y: auto;
    margin-top: 5px;
    z-index: 999;
    width: 100%;
    box-shadow: 0 2px 8px rgba(156, 154, 154, 0.15);
  }

  #suggestions li {
    padding: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: background 0.1s;
  }

  #suggestions li:hover {
    background-color: #f0f0f0;
  }

  #suggestions img {
    width: 30px;
    height: 30px;
    border-radius: 80%;
  }

  @media (max-width: 600px) {
    .form-container {
      padding: 15px;
      width: 95%;
    }

    input, button {
      font-size: 16px;
      padding: 10px;
    }

    .radio-group {
      flex-direction: column;
      gap: 8px;
    }
  }
</style>

</head>
<body>

<div class="form-container">
  <h2>Thêm Cầu Thủ</h2>
  <form id="playerForm" enctype="multipart/form-data" autocomplete="off">
    <label for="name">Tên cầu thủ:</label>
    <input type="text" id="name" name="name" required>

    <label for="number">Số áo:</label>
    <input type="number" id="number" name="number" required>

    <label for="birthdate">Ngày sinh:</label>
    <input type="date" id="birthdate" name="birthdate" required>

    <label for="nickname">Biệt danh:</label>
    <input type="text" id="nickname" name="nickname">

    <label for="image">Hình ảnh:</label>
    <input type="file" id="image" name="image" accept="image/*" required>

    <label>Loại cầu thủ:</label>
    <div class="radio-group">
      <label><input type="radio" name="player_type" value="free" checked> Cầu thủ tự do</label>
      <label><input type="radio" name="player_type" value="joined"> Tham gia đội bóng</label>
    </div>

    <div id="team_select_container" style="display: none; position: relative; margin-top: 10px;">
      <label for="team_input">Tên đội bóng:</label>
      <input type="text" id="team_input" placeholder="Nhập tên đội...">
      <input type="hidden" id="team_id" name="team_id">
      <ul id="suggestions"></ul>
    </div>

    <button type="submit">Thêm cầu thủ</button>
    <div id="message" style="margin-top: 15px; font-weight:bold;"></div>
  </form>
</div>

<script>
const imgbbApiKey = '4492cd17ce112885a8956a72bf05b2a3';

const teamInput = document.getElementById("team_input");
const teamIdField = document.getElementById("team_id");
const suggestionBox = document.getElementById("suggestions");

teamInput.addEventListener("input", async function () {
  const query = this.value.trim();
  suggestionBox.innerHTML = "";
  teamIdField.value = "";
  if (query.length < 1) return;

  try {
    const res = await fetch(`../source/search_teams.php?q=${encodeURIComponent(query)}`);
    const data = await res.json();

    data.forEach(team => {
      const item = document.createElement("li");
      item.innerHTML = `
        <img src="${team.logo}" style="width:30px;height:30px;border-radius:50%;margin-right:10px">
        <div>
          <strong>${team.name}</strong><br>
          <small>${team.short_name}</small>
        </div>
      `;
      item.addEventListener("click", () => {
        teamInput.value = team.name;
        teamIdField.value = team.id;
        suggestionBox.innerHTML = "";
      });
      suggestionBox.appendChild(item);
    });
  } catch (err) {
    console.error("Lỗi gợi ý đội bóng:", err);
  }
});

const radios = document.querySelectorAll('input[name="player_type"]');
const teamContainer = document.getElementById("team_select_container");

radios.forEach(radio => {
  radio.addEventListener("change", () => {
    if (radio.value === "joined") {
      teamContainer.style.display = "block";
    } else {
      teamContainer.style.display = "none";
      document.getElementById("team_input").value = "";
      document.getElementById("team_id").value = "";
      suggestionBox.innerHTML = "";
    }
  });
});

// Submit form

document.getElementById("playerForm").addEventListener("submit", async function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const number = document.getElementById("number").value;
  const birthdate = document.getElementById("birthdate").value;
  const nickname = document.getElementById("nickname").value.trim();
  const playerType = document.querySelector('input[name="player_type"]:checked').value;
  const teamId = (playerType === "joined") ? document.getElementById("team_id").value : null;
  const imageFile = document.getElementById("image").files[0];
  const message = document.getElementById("message");

  if (!name || !number || !birthdate || !imageFile || (playerType === "joined" && !teamId)) {
    message.innerText = "Vui lòng nhập đủ thông tin.";
    return;
  }

  try {
    const formData = new FormData();
    formData.append('image', imageFile);
    const res = await fetch(`https://api.imgbb.com/1/upload?key=${imgbbApiKey}`, {
      method: 'POST',
      body: formData
    });
    const imgData = await res.json();
    if (!imgData.success) throw new Error("Tải ảnh thất bại");

    const imageUrl = imgData.data.url;
    const payload = new URLSearchParams();
    payload.append('name', name);
    payload.append('number', number);
    payload.append('birthdate', birthdate);
    payload.append('nickname', nickname);
    payload.append('image', imageUrl);
    payload.append('team_id', teamId);

    const response = await fetch('../source/add_player(admin).php', {
      method: 'POST',
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: payload.toString()
    });

    const result = await response.text();
    message.innerHTML = `<span style="color:green">${result}</span>`;
    document.getElementById("playerForm").reset();
    suggestionBox.innerHTML = "";
    teamContainer.style.display = "none";
  } catch (err) {
    message.innerHTML = `<span style="color:red">Lỗi: ${err.message}</span>`;
  }
});
</script>

</body>
</html>
