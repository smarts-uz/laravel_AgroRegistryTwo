<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
    <title>Document</title>
</head>
<body>


<style>
body {
    font-family: Montserrat;
    background: #E5E5E5;
}

.contacts {
    width: 284px;
    background: #fff;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 500;
    font-size: 21px;
}
.contacts h3 {
    margin-top: 10px;
}

.call_centers {
    font-size: 18px;
    letter-spacing: 0.01em;
    color: #333333;
}

.call_number {
    font-size: 18px;
    display: flex;
    flex-direction: row;
    align-items: center;
}

.call_number img {
    width: 20px;
    height: 20px;
}
.call_number p {
    margin: 0;
}

.email {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 10px;
}
.email p {
    margin: 0;
}
.social_icons {
    margin: 15px 0;
    display: flex;
    justify-content: space-evenly;
    width: 80%;
}

.slider_content {
    width: 284px;
    background: #fff;
    margin-top: 25px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    flex-direction: column;
}
.slider_content h3 {
    font-size: 18px;
    margin-top: 10px;
}
.slider_content p {
    font-size: 18px;
    color: #40B019;
}
.slider_img {
    width: 244px;
    height: 190px;
    margin-bottom: 15px;
}
  
</style>


    <div class="container">
       <div class="col-4 text-center">
           <div class="contacts">
               <h3>Коллаб кувватлаш ва богланиш</h3>
               <div class="line"></div>
               <h4 class="call_centers">Телефон CALL центр:</h4>
               <div class="call_number">
                   <img src="{{ asset('storage/icons/phone.png') }}" alt="tag">
                   <p>+998(90) 955 55 55</p>
               </div>
               <div class="call_number">
                   <img src="{{ asset('storage/icons/phone.png') }}" alt="tag">
                   <p>+998(90) 955 55 55</p>
               </div>
               <div class="email">
                   <img src="{{ asset('storage/icons/email.svg') }}" alt="tag">
                   <p>uzmis1@mail.ru</p>
               </div>
               <div class="social_icons">
                   <img src="{{ asset('storage/icons/instagram.png') }}" alt="tag">
                   <img src="{{ asset('storage/icons/youtube.png') }}" alt="tag">
                   <img src="{{ asset('storage/icons/facebook.png') }}" alt="tag">
                   <img src="{{ asset('storage/icons/telegram.png') }}" alt="tag">
               </div>
           </div>

           <div class="slider_content">
               <h3>Синовдан утказилаётган агро техникалар руйхати</h3>
               <p>2021</p>
               <div class="slider_img">
                   <img src="{{ asset('storage/slider/slide1.jpg') }}" alt="tag">
               </div>
           </div>

       </div>
       <div class="col-4">
           <div class="services">
               <h3 class="text-center">Как получить услугу</h3>
               <div class="services_container">
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/1.png') }}" alt="tag">
                     <p>Кишлок хужалиги ва мелиорация техникасини синовдан утказиш учун
                        ариза беринг ва ариза статусини кузатиб боринг.</p>
                   </div>
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/2.png') }}" alt="tag">
                     <p>Бирламчи калькуляция билан танишиб чикинг</p>
                   </div>
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/3.png') }}" alt="tag">
                     <p>Бирламчи калькуляция суммаси сизни кониктирмаса ариза беришни бекор килинг</p>
                   </div>
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/4.png') }}" alt="tag">
                     <p>Электрон шартномани имзоланг</p>
                   </div>
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/5.png') }}" alt="tag">
                     <p>Шартнома асосида бирламчи туловни утказинг</p>
                   </div>
                   <div class="service_block">
                     <img src="{{ asset('storage/icons/services_layer/6.png') }}" alt="tag">
                     <p>Техникани Синовга топширинг</p>
                   </div>

               </div>

           </div>
       </div>
       <div class="col-4"></div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>