<!DOCTYPE html>
<!--behruz layout -->
<html>
<head>
    <meta charset="utf-8">
    <title>Agro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href = "{{asset('mainsection.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
   <body>
     <style>
     #gerb {
       float:left;
       margin-left: 50px;
     }
     #logotext {
       float:left;
       margin-left: 20px;
       font-family: 'Montserrat';
       font-weight: 500;
       font-size: 18px;
       padding-top:10px;
     }
     .container-fluid {
       margin:0;
     }
     #navbarSupportedContent {
       font-family:'Monserrat';
       font-weight: 400;
     }
     #headerSelectLang {
      background-color: white;
  color: green;
  border: 0px  #4CAF50;
     }
     #headerButton {
       background-color: #42BC18;
     }
     #headNavbar {
       margin-left:50px;
       margin-right:50px;
       font-family: 'Montserrat';
       font-weight: 500;
       
     }
     </style>



   <nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding-bottom:0;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="{{asset('images/layout/gerb.png')}}" id="gerb">
   <p id="logotext"> Узбекистон Республикаси <br>Кишлок Хожалиги вазирлиги </
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
     <a> <img src="{{asset('images/layout/locationicon.png')}}">Наш адрес </a> &nbsp; |&nbsp;
     <a> <img src="{{asset('images/layout/mailicon.png')}}">uzmis1@mail.ru</a>&nbsp; |&nbsp;
     <a> <img src="{{asset('images/layout/phoneicon.png')}}"> (90) 955 55 55</a> &nbsp;|&nbsp;
     <select id= "headerSelectLang">
                                        <option value="">UZ</option>
                                        <option value="">KZ</option>
                                        <option value="">RU</option>
                                    </select> &nbsp; &nbsp; &nbsp;
           <form class="d-flex">
        <input type="text" placeholder="Введите название услуги"> &nbsp; &nbsp;
        <button class="btn btn-success" type="submit" id="headerButton">Заказать услугу</button>
      </form>
    </div>
  </div>
</nav>
<hr>
<nav class="nav d-flex justify-content-between" id="headNavbar"> 
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none"; >ГЛАВНАЯ</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>ИСПЫТАНИЯ</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>СЕРТИФИКАЦИЯ</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>РЕЕСТР</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>НОРМАТИВНАЯ БАЗА</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</a>
      <a class="p-2 link-secondary" href="#"style= "text-decoration:none";>КОНТАКТЫ</a>
     </nav>
     
<!-- behruz layout -->
@yield('mainsection') 
@yield('history')    
<div class="footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="dsf mb-4 d-flex">
                        <img src="img/image 16.png" alt="error">
                        <p>O’zbekiston Respublikasi
                            Qishloq xo’jaligi vazirligi</p>
                    </div>
                    <p>2021 O’zbekiston Respublikasi Qishloq xo’jaligi vazirligi huzuridagi Qishloq xo’jaligi texnikasi
                        va texno-logiyalarini sertifikatlash va sinash markazi
                    </p>
                    <div class="dsf">

                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="dtf mb-4 ">
                        <p>Manzil</p>
                    </div>
                    <p>
                        110800, Toshkent viloyati, Yangiyo’l tumani, Gulbahor shaharchasi, Yoshlik ko’chasi 5-uy.
                    </p>
                    <ul>
                        <li>Telefon: </li>
                        <li>+998(70)601-11-48 </li>
                        <li>Emile: </li>
                        <li>uzmis1@mail.ru </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="dtf mb-4 ">
                        <p>Davlat sinovlari</p>
                    </div>
                    <ul>
                        <li><a href="#">&#62; Sinov turlari </a></li>
                        <li><a href="#">&#62; Sinov maqsadi </a></li>
                        <li><a href="#">&#62; Sinov natijalari </a></li>
                        <li><a href="#">&#62; Zarur xujjatlar </a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="dtf mb-4 ">
                        <p>Asosiy menu</p>
                    </div>
                    <ul>
                        <li><a href="#">&#62; Asosiy vazifalar </a></li>
                        <li><a href="#">&#62; Meyyoriy xujjatlar </a></li>
                        <li><a href="#">&#62; Reestr </a></li>
                        <li><a href="#">&#62; Tuzilma </a></li>
                        <li><a href="#">&#62; Bog’lanish </a></li>
                    </ul>
                </div>

               
            </div>
            
        </div>
    </div>
    <!-- end footer -->
    <div class="container-fluid foter_end">
        <div class="row">
            <div class="col-12">
                <p class="text-center">Copyright 2021 - Qishloq xo’jaligi texnikasi va texnologiyalarini sertifikatlash va sinash markazi. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </div>  
   </body>
</html>