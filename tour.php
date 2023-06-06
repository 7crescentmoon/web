<?php
$conn = mysqli_connect("localhost", "root", "", "wisata");


$result = mysqli_query($conn, "select * from tour");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style\tour.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Kaushan+Script&family=Montserrat&family=Roboto:ital@1&display=swap&family=Montserrat:wght@100;300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Document</title>
</head>

<body>

  <!-- Navbar start -->
  <?php
  include 'layout\navbar.php';
  ?>
  <!-- Navbar end -->

  <div id="heigth"></div>
  <div class="container"
    style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('asset/img/bg.jpg');object-fit:cover;">

    <?php foreach ($result as $res): ?>
      <div class="card">

        <div class="wrapper-right">
          <div class="img-content">
            <img src="asset\img\<?php echo $res["gambar"] ?>" alt="">
          </div>
          <div class="tag-logo">
            <span>Pesonaindo</span>
          </div>
        </div>

        <div class="wrapper-left">
          <div class="title">
            <span>
              <?php echo $res["nama"] ?>
            </span>
          </div>
          <div class="desc">
            <span>
              <?php echo $res["deskripsi"] ?>
            </span>
          </div>
          <div class="location">
            <span class="logo"><i class="fa-solid fa-location-dot fa-xl" style="color: #ffffff;"></i></span>
            <span class="loc">
              <?php echo $res["lokasi"] ?>
          </div>
        </div>
      </div>

    <?php endforeach ?>
  </div>
  <!-- footer start -->
  <?php
  include 'layout\footer.php';
  ?>
  <!-- footer end -->

  <script src="script js\script.js"></script>
</body>

</html>