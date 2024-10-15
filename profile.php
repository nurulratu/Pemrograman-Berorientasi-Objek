<?php
  // Definisikan variabel untuk informasi profil 
  $nama = "Nurul Ratu Oktaviani"; // Ganti dengan nama 
  $umur = 17; // Ganti dengan umur 
  $sekolah = "SMKN 2 Bandung"; // Ganti dengan sekolah 
  $cita_cita = "Programmer"; // Ganti dengan cita-cita

  // Definisikan path ke foto profil 
  $foto = "WhatsApp Image 2024-10-15 at 07.44.28.jpeg"; // Ganti dengan nama file foto
?>

<!-- Struktur HTML untuk halaman profil -->
<html>
  <head>
    <title>Profil Saya</title>
  </head>
  <style>
    body {
        background-color: skyblue;
        font-family: Arial, sans-serif;
    }
    p{
        color: black;
    }
  </style>
  <body>
    <h1>Profil Saya</h1>
    <img src="<?php echo $foto; ?>" alt="WhatsApp Image 2024-10-15 at 07.44.28.jpeg">
    <p>Nama: <?php echo $nama; ?></p>
    <p>Umur: <?php echo $umur; ?></p>
    <p>Sekolah: <?php echo $sekolah; ?></p>
    <p>Cita-cita: <?php echo $cita_cita; ?></p>
  </body>
</html>