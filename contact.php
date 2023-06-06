<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style\main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Kaushan+Script&family=Roboto:ital@1&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
  </head>
  <body>
    
    <!-- Navbar start -->
    <div class="navbar">
        <nav>
            <div class="nav-logo">
                <a href="">
                    <h1>Pesonaindo</h1>
                </a>
            </div>
    
            <div class="nav-menu">
              <ul>
                <a class="menu home" href="">
                  <li>Home</li>
                </a>
                <a class="menu about" href="">
                  <li>About</li>
                </a>
                <a class="menu tour" href="">
                  <li>Tour</li>
                </a>
                <a class="menu contact" href="">
                  <li>Contact</li>
                </a>
              </ul>
            </div>
    
            <div class="profile">
              <!-- <span>Pain</span> -->
              <img src="asset\img\bromo.jpg" alt="" />
              <a href="index.html"><i class="fa-solid fa-door-open fa-xl" style="color: #ffffff;"></i></a>
            </div>
          </nav>  
    </div>

  <!-- Navbar end -->

  <!-- slider & page1 start-->

    <div class="main background-img" id="slider">
      <!-- <img src="asset\rinjani2.jpg" alt=""> -->
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
            <span class="info">- Sumatra Selatan, Medan</span>
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

          <div class="nav-slider-a">
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
     <!-- slider & page1 end--> 

     <!-- page2 blm tau namonya, sementara about ajo dlu :)  -- start -->
    <div class="brief-information">
        <div class="info">
            <div id="info-page"></div>
            <div class="card">
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/></svg>
                </div>
                <div class="desc-card">
                    <h2 class="title">Indonesia</h2>
                    <span class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam asperiores soluta magni cumque? Distinctio reiciendis commodi magnam accusantium</span>
                </div>
            </div>
            <div class="card">
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z"/></svg>
                </div>
                <div class="desc-card">
                    <h2 class="title">Tour</h2>
                    <span class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam asperiores soluta magni cumque? Distinctio reiciendis commodi magnam accusantium</span>
                </div>
            </div>

            <div class="card">
                <div class="circle">
                  <svg xmlns="http://www.w3.org/2000/svg" height="2.5em" viewBox="0 0 640 512"><style>svg{fill:#000000}</style><path d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/></svg>
                </div>
                <div class="desc-card">
                    <h2 class="title">Ticket</h2>
                    <span class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam asperiores soluta magni cumque? Distinctio reiciendis commodi magnam accusantium</span>
                </div>
            </div>
        </div>
    </div>
     <!-- page2 blm tau namonya, sementara about ajo dlu -- end:)  -->


     <!--page3 start  -->
    <div class="content-tour">
        <h1>Lokasi</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.232400894988!2d102.27019931475903!3d-3.759519897264873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c18941d9f3%3A0x1aecc8afb80fdf02!2sUniversity%20of%20Bengkulu!5e0!3m2!1sen!2sid!4v1685954206120!5m2!1sen!2sid" width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container1">
          <div class="kontak">
              <table width=1080px>
                  <tr> <td>
                      Email
                  </td>
               <td>unib@gmail.com</td></tr>
                  <tr><td>No Phone</td>
                  <td>082180334125</td></tr>
                  <tr><td>Instagram</td>
                  <td>unib info</td></tr>
                  
              </table>
          </div>
      </div>

    </div>
    <!--page3 start end -->

    <!-- footer start -->
    <div class="footer">
      <div class="footer-left">
        <div class="footer-menu">
          <h2 class="f-title ft-left">footer left</h2>
          <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellat necessitatibus</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quibusdam modi</li>
          </ul>
        </div>
      </div>

      <div class="footer-center">
        <div class="footer-about">
          <h2 class="f-title ft-about">About Us</h2>
          <span class="f-about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellat necessitatibus</span>
        </div>
        <hr>
        <div class="footer-socialmedia">
          <h2 class="f-title ft-socialmedia">Social Media</h2>
         <ul>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><style>svg{fill:#000000}</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><style>svg{fill:#000000}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 496 512"><style>svg{fill:#000000}</style><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></li></a>
         </ul>
        </div>
      </div>

      <div class="footer-right">
        <div class="footer-help">
          <h2 class="f-title ft-right">Help</h2>
          <ul>
            <a href=""><li>- FAQ</li></a>
            <a href="tos.html"><li>- Term Of Service</li></a>
          </ul>
        </div>
      </div>
    </div>
    
    <div id="footer-bottom">
      <a href="#slider"><div class="circle-up">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>
      </div>
    </a>
    </div>
    

    <!-- footer end -->

    <script src="script js\script.js"></script>
  </body>
</html>