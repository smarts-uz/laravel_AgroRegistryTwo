@extends('site.layouts.app')

@section('content')
    <!-- main start -->
    <img src= "{{asset('images/layout/banner.jpg')}}" style="width:100%";>
     <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="col-12">
                    <div class="card" style="width: 284px; height: 305px; margin:20px; text-align:center;float:left; display:inline-block;">
                        <h5 style="font-style:'Montserrat';font-weight:500;">Коллаб кувватлаш <br>ва богланиш </h5>
                        <hr style="width:200px; margin-left:40px;">
                        <div class="card-body">
                          <h5 class="card-title" style="font-weight:400;margin-top:0;">Телефон CALL центр:</h5>
                          <p class="card-text"><img src="{{asset('images/layout/phoneicon.png')}}">+998(90) 955 55 55 <br>
                          <img src="{{asset('images/layout/phoneicon.png')}}">+998(90) 955 55 55 <br> <br> <img src="{{asset('images/layout/mailicon.png')}}">uzmis1@mail.ru
                      <br> <br>
                          <img src="{{asset('images/layout/instagramicon.png')}}"> &nbsp;
                          <img src="{{asset('images/layout/youtubeicon.png')}}"> &nbsp;
                          <img src="{{asset('images/layout/facebookicon.png')}}"> &nbsp;
                          <img src="{{asset('images/layout/telegramicon.png')}}">
                        </p>
                            </div>
                      </div>
                </div>
                <div class="col-12">
                    <div class="card" style="width: 284px; height: 305px; margin:20px; text-align:center;display:inline-block;">
                        <h5 style="margin-top:10px;font-style:'Montserrat';font-weight:500;">Синовдан утказилаётган<br>агро техникалар руйхати</h5>
                        <div class="card-body">
                        <h5 style="color: #42BC18;">2021<h5>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/layout/slideimage.png')}}" alt="First slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only"></span>
                        </a>
                      </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <img src="img/Group 227.png" class="card-img-top" alt="">
        </div>
        <div class="col-4"  style="margin-top:20px;margin-left:0px;text-align:center;">
            <div class="col-12">
                <img src="img/Rectangle 210.png" alt="">
            </div>
            <div class="col-12" style="margin-top:100px">
                <h1>2021</h1>
                <h4>30 Avgust, Dushanba</h4>
                <h1 id="mainClock">11:31</h1>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid mt-3">
            <div class="row justify-content-center mb-3">
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 bock">
                    <div class="round">
                        <h4>485</h4>
                    </div>
                    <p>Принято</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 bock">
                    <div class="round">
                        <h4>75</h4>
                    </div>
                    <p>Испольнено</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 bock">
                    <div class="round">
                        <h4>12</h4>
                    </div>
                    <p>Отклонено</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 bock">
                    <div class="round">
                        <h4>12</h4>
                    </div>
                    <p>На исполнении</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 bock">
                    <div class="round">
                        <h4>12</h4>
                    </div>
                    <p>Просрочено</p>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center title">
                    <h2>SINOVLAR</h2>
                    <p></p>
                </div>
                <div class="col-12 text-center p1">
                    <p>Sinovdan o‘tkazilayotgan mahsulot o‘z vazifasiga ko‘ra sinovlarning quyidagi turlaridan birida
                        sinovdan o‘tkaziladi:</p>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">DAVLAT <br> SINOVLARI</button>
                        <p>import qilinadigan yoki budjet mablag‘lari hisobiga ishlab chiqariladigan qishloq xo‘jaligi
                            va melioratsiya texnikasi namunalarining davlat komissiyasi (mahsulotlarning eng muhim
                            turlarini alohida sinash uchun maxsus tashkil etiladigan) yoki Markaz tomonidan
                            o‘tkaziladigan sinovlar.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">DASTLABKI <br> SINOVLAR</button>
                        <p>Mahsulotlarning tajriba namunalarini va/yoki tajriba turkumlarini qabul qilish sinovlariga
                            taqdim etish imkoniyatini aniqlash maqsadida ularning nazorat sinovlari.</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">TUR <br> SINOVLARI</button>
                        <p>Seriyali namunalar konstruksiyasi yoki texnologik jarayonga kiritilgan o‘zgartirishlarni
                            samaradorligini va maqsadga muvofiqligini baholash maqsadida u bilan to‘g‘ridan to‘g‘ri
                            tuzilgan shartnomalar bo‘yicha bajariladigan sinovlar;
                            Oldingi tahrirga qarang.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">MALAKA <br> SINOVLARI</button>
                        <p>Korxonaning ushbu turdagi mahsulotni belgilangan hajmda ishlab chiqarishga tayyorligini
                            baholash maqsadida o‘tkaziladigan belgilanadigan seriyaning yoki birinchi sanoat turkumining
                            nazorat sinovlari;
                            Oldingi tahrirga qarang.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">QABUL QILISH SINOVLARI</button>
                        <p>Ishlab chiqarishga qo‘yish yoki import qilishning maqsadga muvofiqligi, yoxud vazifasiga
                            ko‘ra foydalanish to‘g‘risidagi masalani hal etish maqsadida o‘tkaziladigan respublikada
                            ishlab chiqariladigan yoki import qilinadigan tajriba namunasini sinash;
                            Oldingi tahrirga qarang.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">SERTIFIKATSIYA SINOVLARI</button>
                        <p>Mahsulotga xos bo‘lgan xossalarning texnik jihatdan tartibga solish sohasida normativ
                            hujjatlarga muvofiqligini aniqlash maqsadida o‘tkaziladigan mahsulotlarning nazorat
                            sinovlari.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="box">
                        <button type="button" class="btn btn-success ">TAKRORIY SINOVLAR (HAKAMLIK SINOVLARI)</button>
                        <p>Tez-tez takrorlanadigan — foydalanish yoki ishlab chiqarish bilan bog‘liq nosozliklarning
                            sabablari va xususiyatini aniqlash maqsadida maxsus dastur bo‘yicha amalga oshiriladigan
                            tayyorlovchi zavod tomonidan ishlab chiqarilgan mahsulotlarning oxirgi turkumidan tanlab
                            olingan texnika namunalarini sinash.</p>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </main>
    <!-- main end -->

    <!-- low start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 title text-center">
                <h2 class="mb-3">NORMATIV HUQUQLAR BAZASI</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                <div class="low p-3">
                    <p>Ўзбекистон Республикаси Президентининг 2013 йил 23 майдаги “Қишлоқ хўжалиги техника ва
                        технологиялари
                        синаш тизимини янада такомиллаштириш чора-тадбирлари тўғрисида” <a href="#">ПҚ-1972-сон
                            Қарори</a></p>

                    <div class="btn">
                        <button type="button" class="btn ">Batafsil &#62;</button>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="img">
                        <img src="img/justice-scale 1.png" alt="img error">
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-3">
                <div class="low p-3">
                    <p>Ўзбекистон Республикаси Президентининг 2019 йил 17 апрель “Қишлоқ хўжалиги соҳасида давлат
                        бошқаруви тизимини такомиллаштириш чора-тадбирлари тўғрисида”
                        <a href="#">ПФ-5708-сон Фармони</a>
                    </p>

                    <div class="btn">
                        <button type="button" class="btn ">Batafsil &#62;</button>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="img">
                        <img src="img/justice-scale 1.png" alt="img error">
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-3">
                <div class="low p-3">
                    <p>Ўзбекистон Республикаси Президентининг 2020 йил 27 июндаги “Қишлоқ хўжалиги ва мелиорация
                        техникаларини синаш ва сертификатлаш тизимини такомиллаштириш чора-тадбирлари тўғрисида”
                        <a href="#">ПҚ-4760-сон Қарори </a>
                    </p>

                    <div class="btn">
                        <button type="button" class="btn ">Batafsil &#62;</button>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="img">
                        <img src="img/justice-scale 1.png" alt="img error">
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-3">
                <div class="low p-3">
                    <p>Ўзбекистон Республикаси Вазирлар Маҳкамасининг 2020 йил 15 декабрдаги “Ўзбекистон Республикаси
                        Қишлоқ хўжалиги вазирлиги ҳузуридаги Қишлоқ хўжалиги техникаси ва технологияларини сертификатлаш
                        ва синаш маркази фаолиятини янада такомиллаштириш чора-тадбирлари тўғрисида”
                        <a href="#">785-сон Қарори </a>
                    </p>

                    <div class="btn">
                        <button type="button" class="btn ">Batafsil &#62;</button>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="img">
                        <img src="img/justice-scale 1.png" alt="img error">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- low end -->

    <!-- Markazning asosiy fazifalari start -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center title">
              <h2>MARKAZNING ASOSIY VAZIFALARI</h2>
              <p></p>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
              <div class="comp"><p>	Ўзбекистон Республикаси Қишлоқ хўжалиги вазирлиги ҳузуридаги Қишлоқ хўжалиги ва озиқ-овқат таъминоти илмий-ишлаб чиқариш марказининг соҳа илмий тадқиқот институтлари билан биргаликда қишлоқ хўжалиги ва мелиорация техникаси, қишлоқ хўжалиги экинларини етиштиришнинг ресурсларни тежайдиган замонавий технологиялари синовларини ўтказиш соҳасида янги стандартлар, услубий ҳужжатлар ва тартиботларни ишлаб чиқиш ва 
                  амалдагиларини қайта кўриб чиқиш;</p>
                  <button type="button" class="btn">1</button></div>
          </div>
  
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
              <div class="comp">
                  <p>	сериялаб ишлаб чиқариш тўғрисида қарор қабул қилиш мақсадида қишлоқ хўжалиги ва мелиорация техникасини, уларнинг агрегатлари ва узелларининг тажриба намуналари синовларини ўтказиш;</p>
                  <button type="button" class="btn">2</button>
              </div>
          </div>
  
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
             <div class="comp">
              <p>	маҳсулот сифатининг барқарорлигини назорат қилиш ва уни ишлаб чиқаришни давом эттириш имкониятини аниқлаш мақсадида серияли ишлаб чиқарилаётган қишлоқ хўжалиги ва мелиорация техникаси синовларини ўтказиш;</p>
              <button type="button" class="btn">3</button>
             </div>
          </div>
  
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
              <div class="comp"><p>	республикада қишлоқ хўжалиги ишлаб чиқаришининг ўзига хос хусусиятларини ҳисобга олган ҳолда уни қўллаш самарадорлигини аниқлаш мақсадида қишлоқ хўжалиги ва мелиорация техникасининг, шу жумладан хорижда ишлаб чиқарилганларининг бошқа турдаги синовларини ўтказиш;</p>
                  <button type="button" class="btn">4</button></div>
          </div>
  
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
              <div class="comp"><p>	қишлоқ хўжалиги ва мелиорация техникасининг бошқа янги турларини қўллаган ҳолда қишлоқ хўжалиги экинлари етиштиришнинг ресурсларни тежайдиган замонавий технологиялари синовларини ўтказиш;</p>
                  <button type="button" class="btn">5</button></div>
          </div>
  
          <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 p-3">
              <div class="comp"><p>	чет эл ва мамлакатимиз қишлоқ хўжалиги ва мелиорация техникаси тавсифларининг халқаро стандартларга ва техник жиҳатдан тартибга солиш соҳасидаги норматив ҳужжатларга мувофиқлигини аниқлаш мақсадида сертификатлаш ишлари ва синовларини қонун ҳужжатларида белгиланган тартибда ўтказиш</p>
                  <button type="button" class="btn">6</button></div>
          </div>
        </div>
    </div>
    <!-- Markazning asosiy fazifalari end -->

    <!-- starting footer -->
   

@endsection