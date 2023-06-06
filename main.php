<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style\main.css" />
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



  <div class="main background-img" id="welcome">
    <img src="asset/img/bg.jpg" alt="">

    <span class="wel">WELCOME</span>
    <span class="to">to</span>
    <span class="pes">Pesonaindo</span>
    

  </div>

  <div class="
  
  
  
  " >

  <div class="slider-wrapper">
    <div class="slider">
      <div class="slides">

        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">

        <div class="slide first">
          <img src="asset\img\rinjani.jpg" alt="">
          <span class="title">Gn.Rinjani</span>
          <span class="info">- Nusa Tenggara Barat</span>
        </div>
        <div class="slide ">
          <img src="asset\img\toba.jpg" alt="">
          <span class="title">Danau Toba</span>
          <span class="info">- Sumatra Utara, Medan</span>
        </div>
        <div class="slide ">
          <img src="asset\img\bromo.jpg" alt="">
          <span class="title">Gn.Bromo</span>
          <span class="info">- Jawa Timur, Surabaya</span>
        </div>
        <div class="slide ">
          <img src="asset\img\pantaiKelingking.jpg" alt="">
          <span class="title">Pantai Kelingking</span>
          <span class="info">- Nusa Penida, Bali</span>
        </div>
        <div class="slide ">
          <img src="asset\img\tangkubanPerahu .jpg" alt="">
          <span class="title">Tangkuban Perahu</span>
          <span class="info">- Jawa Barat, Bandung</span>
        </div>

        <div class="nav-slider-a" id="rec">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
          <div class="auto-btn5"></div>
        </div>

      </div>
      <div class="nav-slider-m">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
      </div>

    </div>

    </div>

    <div class="title-rec" >
      <span><i>Recommend</i></span>
    </div>

    <div class="card-wrapper">
      <div class="rec-card">
        <!-- <div class="card-img">

        </div> -->
        <div class="list-rec">
          <h2 class="title-island">P.Sumatera</h2>
          <ul class="list" >
            <li>Pantai Lhoknga (Aceh)</li>
            <li>Danau Toba (Sumatera Utara)</li>
            <li>Lembah Harau (Sumatera Barat)</li>
            <li>Danau Dendam Tak Sudah (Bengkulu)</li>
            <li>Gunung kerinci (Jambi)</li>
            <li>Gunung Bintan (Jambi)</li>
            <li>Pantai Gigi Hiu (Lampung)</li>
          </ul>
        </div>
      </div>

      <div class="rec-card">
        <!-- <div class="card-img">

        </div> -->
        <div class="list-rec">
          <h2 class="title-island">P.Jawa</h2>
          <ul class="list">
            <li>Pantai Anyer (Banten)</li>
            <li>Curug Cikaso (Jawa Barat)</li>
            <li>Candi Borobudur (Jawa Tengah)</li>
            <li>Gunung Merbabu (Yogyakarta)</li>
            <li>Gunung Kelud (Jawa Timur)</li>
            <li>Karimun Jawa (Jawa Tengah)</li>
            <li>Telaga Warna (Jawa Tengah)</li>
            <li>Curug Cikaso (Jawa Barat)</li>
          </ul>
        </div>
      </div>

      <div class="rec-card">
        <!-- <div class="card-img">

        </div> -->
        <div class="list-rec">
          <h2 class="title-island">P.Kalimantan</h2>
          <ul class="list">
            <li>Bukit Temenong (Kalimantan Barat)</li>
            <li>Pantai Batu Belat (Kalimantan Utara)</li>
            <li>Goa Romo (Kalimantan Barat)</li>
            <li>Taman Nasional Tanjung Puting (Kalimantan Tengah)</li>
            <li>Bukit Tangkiling (Kalimantan Tengah)</li>
          </ul>
        </div>
      </div>

      <div class="rec-card">
        <!-- <div class="card-img">

        </div> -->
        <div class="list-rec">
          <h2 class="title-island">P.Sulawesi</h2>
          <ul class="list">
            <li>Tana Toraja (Sulawesi Selatan)</li>
            <li>Dataran Tinggi Malino (Sulawesi Selatan)</li>
            <li>Pantai Lakban (Sulawesi Barat)</li>
            <li>Gunung Api Mahangetang (Sulawesi Utara)</li>
            <li>Wakatobi (Sulawesi Tenggara)</li>
          </ul>
        </div>
      </div>

      <div class="rec-card">
        <!-- <div class="card-img">

        </div> -->
        <div class="list-rec">
          <h2 class="title-island">P.Papua</h2>
          <ul class="list">
            <li>Taman Nasional Teluk Cendrawasih (Papua Barat)</li>
            <li>Danau Uter (Papua Barat)</li>
            <li>Lembah Belim (Papua Pegunungan)</li>
            <li>Gunung Botak (Manokwari Selatan)</li>
            <li>Pantai Gedo (Papua)</li>
            <li>Raja Ampat (Papua Barat)</li>
          </ul>
        </div>
      </div>

    </div>
  </div>

  <!-- page2 blm tau namonya, sementara about ajo dlu -- end:)  -->


  <!--page3 start  -->


  <div id="height">

  </div>

  <div class="about-container"
    style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('asset/img/Labuan Bajo.jpg');background-size: cover;">
    <div class="sub-container">

      <div class="content wrapper1">
        <div class="content-left">
          <img src="asset\img\Goa Jomblang.jpg" alt="">
        </div>
        <div class="content-right">
          <p><span>Selamat datang di Pesonaindo</span> portal informasi wisata terpercaya yang didedikasikan untuk
            memperkenalkan keindahan alam dan budaya yang kaya di Indonesia. Kami berkomitmen untuk menjadi sumber daya
            terbaik bagi wisatawan lokal maupun internasional yang ingin menjelajahi pesona negeri ini.</p>
        </div>
      </div>

      <div class="content wrapper2">
        <div class="content-right">
          <p>Misi kami adalah untuk menginspirasi dan membantu wisatawan menemukan tempat-tempat menakjubkan yang ada di
            Indonesia. Melalui website kami, kami menyajikan informasi terperinci tentang berbagai tujuan wisata yang
            menarik, mulai dari destinasi populer hingga tempat tersembunyi yang jarang diketahui. Kami berusaha
            memberikan panduan yang komprehensif dengan informasi terbaru tentang atraksi wisata, aktivitas yang dapat
            dilakukan, akomodasi, restoran, dan transportasi di setiap lokasi. Semua informasi disusun dengan hati-hati
            untuk memastikan pengalaman wisata Anda menjadi yang terbaik.</p>
        </div>
        <div class="content-left">
          <img src="asset\img\Nusa Penida.jpg" alt="">
        </div>
      </div>

      <div class="content wrapper3">
        <div class="content-left">
          <img src="asset\img\Danau Toba.jpg" alt="">
        </div>
        <div class="content-right">
          <p> Terakhir, kami ingin berterima kasih kepada Anda, pengunjung setia kami, yang telah membantu kami tumbuh
            menjadi salah satu sumber informasi wisata terkemuka di Indonesia. Kami senang dapat berbagi keindahan
            Indonesia dengan Anda, dan kami berharap dapat terus menginspirasi Anda dalam menjelajahi pesona-pesona baru
            di negeri ini.
            Selamat menjelajahi dan selamat liburan di Indonesia! <br><br>
            <i>Tim PesonaIndo</i>
          </p>
        </div>
      </div>

    </div>
  </div>
  <!--page3 start end -->

  <!-- footer start -->
  <?php
  include 'layout\footer.php';
  ?>
  <!-- footer end -->

  <script src="script js\script.js"></script>
</body>

</html>