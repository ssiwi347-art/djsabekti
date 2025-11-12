<?php
// --- Data ucapan dan media ---
$nama = "khasrisma falah, S.E.";
$kampus = "Universitas KH. ABDUL WAHAB HASBULLAH";
$foto = "img/2.jpg"; // path ke foto
$video = "vidio/mama.mp4"; // path ke video
$judul = "Selamat atas semhasnya $nama";
$ucapan = "Selamat atas gelar SE nya, $nama! 🎓<br>
Perjalanan panjangmu akhirnya berbuah manis. Semoga ilmu dan gelar barumu membawa berkah dan kesuksesan di masa depan.<br>
Kami bangga padamu 💐";

// --- URL untuk dibagikan ---
$base_url = "http:// " . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$share_text = urlencode("🎉 $judul - Yuk lihat ucapan lengkapnya di sini: $base_url");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $judul ?></title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
      text-align: center;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 30px auto;
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    img {
      width: 50%;
      border-radius: 15px;
    }
    h1 {
      color: #1976d2;
      margin-top: 20px;
    }
    p {
      font-size: 18px;
      line-height: 1.6;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px;
      border-radius: 10px;
      text-decoration: none;
      color: white;
      background: #1976d2;
      transition: 0.3s;
    }
    .btn:hover {
      background: #0d47a1;
    }
    footer {
      margin-top: 30px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="<?= $foto ?>" alt="Foto Wisuda <?= $nama ?>">
    <h1><?= $judul ?></h1>
    <p><?= $ucapan ?></p>
    <p><strong><?= $kampus ?></strong></p>

    <video width="100%" controls>
      <source src="<?= $video ?>" type="video/mp4">
      Browser Anda tidak mendukung video.
    </video>

    <div>
      <a class="btn" href="<?= $video ?>" download>🎥 Unduh Video</a>
      <a class="btn" href="https://wa.me/?text=<?= $share_text ?>" target="_blank">📱 Bagikan ke WhatsApp</a>
      <a class="btn" href="https://twitter.com/intent/tweet?text=<?= $share_text ?>" target="_blank">🐦 Bagikan ke Twitter</a>
    </div>

    <footer>© <?= date('Y') ?> Ucapan semhas | Dibuat dengan ❤️</footer>
  </div>
</body>
</html>
