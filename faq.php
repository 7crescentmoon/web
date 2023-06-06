<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style\faq.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Kaushan+Script&family=Roboto:ital@1&display=swap" 
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

     <!--page3 start  -->
     <div class="height" id="faq"></div>
    <div class="content-faq"  style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('asset/img/bg.jpg');background-size: cover;">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion">
              <div class="accordion-item">
                <input type="checkbox" id="faq1" class="accordion-toggle">
                <label for="faq1" class="accordion-header">Bagaimana cara pengguna memberikan ulasan atau feedback tentang destinasi wisata di web Pesonaindo tersebut?</label>
                <div class="accordion-content">
                    Dengan membuat akun atau melakukan login terlebih dahulu. Kemudia pengguna akan diberi akses berkomentar dan memberi ulasan pada destinasi tersebut.
                </div>
              </div>
              <div class="accordion-item">
                <input type="checkbox" id="faq2" class="accordion-toggle">
                <label for="faq2" class="accordion-header">Apakah ada fitur khusus dalam web Pesonaindo yang membantu saya menemukan destinasi wisata berdasarkan minat atau preferensi saya?</label>
                <div class="accordion-content">
                    Ya/Tidak (yg buek fitur maren ado dak?)
                </div>
              </div>
              <div class="accordion-item">
                <input type="checkbox" id="faq3" class="accordion-toggle">
                <label for="faq3" class="accordion-header">Bagaimana cara kerja web Pesonaindo dalam memberikan rekomendasi destinasi wisata?</label>
                <div class="accordion-content">
                    Dengan merekomendasi kan wisata sesuai kota yang dicari.
                </div>
              </div>
              <div class="accordion-item">
                <input type="checkbox" id="faq3" class="accordion-toggle">
                <label for="faq3" class="accordion-header">Apa tempat wisata alam yang menarik yang dapat Pesonaindo rekomendasikan?</label>
                <div class="accordion-content">
                    Semua tempat wisata yang direcommendasikan sangat menarik. 
                </div>
              </div>
              <div class="accordion-item">
                <input type="checkbox" id="faq3" class="accordion-toggle">
                <label for="faq3" class="accordion-header">Bagaimana dengan destinasi wisata budaya atau sejarah yang menarik untuk dikunjungi?</label>
                <div class="accordion-content">
                    Pesonaindo juga merecommendasikan wisata budaya seperti borobudur dan lainnya
                </div>
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

    <script>// Menangkap semua elemen akordion
        const accordionItems = document.querySelectorAll('.accordion-item');
        
        // Menambahkan event listener untuk setiap elemen akordion
        accordionItems.forEach(item => {
          const header = item.querySelector('.accordion-header');
          const content = item.querySelector('.accordion-content');
          
          // Menangani klik pada header
          header.addEventListener('click', () => {
            // Toggle class active pada header
            header.classList.toggle('active');
            
            // Toggle tampilan konten
            if (content.style.display === 'block') {
              content.style.display = 'none';
            } else {
              content.style.display = 'block';
            }
          });
        });
        </script>

    <script src="script js\script.js"></script>
  </body>
</html>