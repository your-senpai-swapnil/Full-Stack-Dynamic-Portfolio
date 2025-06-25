<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enhanced Card UI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: white;
      width: 320px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 20px rgba(22, 214, 93, 0.5);
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #16d65d;
      margin-bottom: 10px;
    }

    h2 {
      margin: 10px 0 5px;
      color: #333;
    }

    .timestamp {
      font-size: 12px;
      color: gray;
      margin-bottom: 15px;
    }

    .details {
      display: none;
      margin-top: 10px;
      font-size: 14px;
      color: rgba(230, 15, 15, 0.89);
    }

    .toggle-btn {
      margin-top: 10px;
      padding: 8px 16px;
      background-color: #16d65d;
      border: none;
      border-radius: 5px;
      color: white;
      cursor: pointer;
    }

    .toggle-btn:hover {
      background-color: #0da747;
    }

    .social-icons {
      margin-top: 15px;
    }

    .social-icons a {
      text-decoration: none;
      color: #555;
      margin: 0 5px;
      font-size: 18px;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #16d65d;
    }
  </style>
</head>
<body>

  <div class="card">
    <h2>Swapnil Dey</h2>
    <p>Hello Everyone</p>

    <button class="toggle-btn" onclick="toggleDetails()">Toggle Message</button>

    <div class="details" id="details">
      <p>Tata! Take care and stay safe.</p>
    </div>

  <script>
    function toggleDetails() {
      const details = document.getElementById("details");
      details.style.display = details.style.display === "block" ? "none" : "block";
    }
  </script>

</body>
</html>

