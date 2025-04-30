<?php
// View counter logic
$counterFile = 'counter.txt';
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}
$views = (int)file_get_contents($counterFile);
$views++;
file_put_contents($counterFile, $views);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rushikesh Chandanshiv</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      height: 100vh;
      background-color: #0d0d0d;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      position: relative;
      color: white;
    }
    video.background-video {
      position: absolute;
      top: 50%; left: 50%;
      width: 100%; height: 100%;
      object-fit: cover;
      transform: translate(-50%, -50%);
      z-index: -2;
      opacity: 0;
      visibility: hidden;
      transition: opacity 1.5s ease;
    }
    #enterScreen {
      height: 100vh; width: 100%;
      background-color: #0d0d0d;
      display: flex; align-items: center; justify-content: center;
      flex-direction: column;
      z-index: 10;
      position: absolute; top: 0; left: 0;
      text-align: center;
      padding: 20px;
    }
    #enterScreen button {
      padding: 15px 30px;
      font-size: 20px;
      background: #00ffea;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      color: #0d0d0d;
      font-weight: bold;
      transition: 0.3s;
    }
    #enterScreen button:hover {
      background: #00ccbb;
      transform: scale(1.1);
    }
    #mainContent {
      display: none;
      height: 100vh; width: 100%;
      flex-direction: column;
      align-items: center; justify-content: center;
      position: relative;
      text-align: center;
      padding: 20px;
      z-index: 1;
    }
    .profile-box {
      background: rgba(0, 0, 0, 0.5);
      padding: 30px;
      border-radius: 20px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(0, 255, 234, 0.4);
      max-width: 420px; width: 100%;
      animation: fadeIn 1.5s ease-in-out;
    }
    img {
      width: 120px; height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid rgba(0, 255, 234, 0.7);
      margin-bottom: 20px;
      box-shadow: 0 0 20px rgba(0, 255, 234, 0.7);
    }
    h1 { font-size: 24px; margin-bottom: 8px; }
    p { font-size: 16px; color: #ccc; margin-bottom: 20px; }
    .social-links {
      display: flex; flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }
    .social-links a {
      display: flex; align-items: center; justify-content: center;
      width: 50px; height: 50px;
      border-radius: 50%;
      background: #1a1a1a;
      color: white;
      font-size: 22px;
      text-decoration: none;
      border: 2px solid #333;
      transition: 0.3s;
    }
    .social-links a:hover {
      background: #00ffea;
      color: #0d0d0d;
      transform: scale(1.1);
      border-color: #00ffea;
    }
    .footer {
      position: fixed;
      bottom: 10px;
      width: 100%;
      text-align: center;
      color: #00ffea;
      font-size: 14px;
      z-index: 5;
    }
    @media (max-width: 480px) {
      h1 { font-size: 20px; }
      p { font-size: 14px; }
      .profile-box { padding: 20px; }
      img { width: 100px; height: 100px; }
      .social-links a {
        width: 45px; height: 45px;
        font-size: 18px;
      }
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<video class="background-video" id="bg-video" autoplay loop muted playsinline>
  <source src="background.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<audio id="bg-music" loop>
  <source src="gg.mp
