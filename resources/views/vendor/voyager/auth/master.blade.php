<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>@yield('title', 'Admin - '.Voyager::setting("admin.title"))</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        body.login .login-sidebar {
            border-top:5px solid {{ config('voyager.primary_color','#22A7F0') }};
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid {{ config('voyager.primary_color','#22A7F0') }};
            }
        }
        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .remember-me-text{
            padding:0 5px;
        }
    </style>

    @yield('pre_css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
    <div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                        <div class="copy animated fadeIn">
                            <h1>{{ Voyager::setting('admin.title', 'Voyager') }}</h1>
                            <p>{{ Voyager::setting('admin.description', __('voyager::login.welcome')) }}</p>
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">
            <ul class="nav nav-tabs lang-nav-tabs" style="position: relative; z-index: 99999;">
                <li class="nav-item">
                    <a class="nav-link" href="#login" data-toggle="list" role="tab" aria-selected="false">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-active" href="#oneid" data-toggle="list" role="tab" aria-selected="true">OneId</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#eri" data-toggle="list" role="tab" aria-selected="false">
                        ERI  </a>
                </li>
            </ul>
            <div class="tab-content" >
                <div class="tab-pane active" id="login" role="tabpanel">
                    @yield('content')
                </div>
                <div class="tab-pane" id="oneid" role="tabpanel">
                    <div class="container tab-pane active" id="oneid" style="position: relative; z-index: 999999;">
                        <div class="form-group mg-b-20 mg-t-30">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="agree" v-model="oneAuthConfirmation">
                                <label class="custom-control-label tx-sm" for="agree">Шахсий маълумотларимни узатилишига ва тизимдан <a href="#agreement" data-toggle="modal" class="tx-primary">фойдаланиш шартларига</a> розиман.</label>
                            </div>
                        </div>
                        <div class="form-group mg-b-30">
                            <button class="btn btn-primary btn-uppercase flex-fill full-width" :disabled="!oneAuthConfirmation" data="{{ json_encode(config('oneauth.one_id')) }}" onClick="oneAuth('{{ json_encode(config('oneauth.one_id')) }}')">Тизимга кириш</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="eri" role="tabpanel">
                    <div class="mb-2 mg-t-15" style="position: relative; z-index: 999999;">
                        <form name="eri_form" action="{{ route('eri.login') }}" id="eri_form" method="post">
                            @include('common.eimzo-fields', ['data' => "authorization"])
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
{{-- @section('modal') --}}
    <!-- ФОЙДАЛАНИШ ШАРТЛАРИ -->
    <div class="modal fade" id="agreement" tabindex="-1" role="dialog" aria-labelledby="agreementModal" style="position: relative; z-index: 99999999;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="agreementModal">Фойдаланиш шартлари</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body ht-250 scrollbar-sm pos-relative" style="overflow-y: auto;">
                    <h6 class="text-center tx-color-01">Фойдаланиш шартларининг қўлланиш кўлами</h6>
                    <p class="text-justify mg-b-20">Фойдаланиш келишуви “E-IJARA TANLOV” электрон савдо майдончасига (кейинги ўринларда - Тизим) нисбатан қўлланилади. Ушбу орқали тизим фойдаланувчиларга Келишувни ўқиб чиқиш ва тўлиқ тушинишни махсус тарзда эслатади. Тизимдан фойдаланишингиз сизнинг Фойдаланиш келушувига розилигингизни англатади; Агар рози бўлмасангиз, тизимдан фойдаланманг. Келишув мазмунини қонун кўлами доирасида ўз ихтиёри бўйича вақт-вақти билан ўзгартириб туриш ҳуқуқини сақлаб қолади ва Фойдаланиш келишувидаги ўзгаришларни мунтазам равишда кўриб бориш учун ёлғиз ўзингиз жавобгардирсиз. Агар сиз ўзгартирилган маълумотлар чоп қилинганидан кейин тизимдан фойдаланишни давом эттирсангиз, бу сизнинг ўзгаришларга розилигингиз ва уларни қабул қилишингизни англатади.</p>
                    <h6 class="text-center tx-color-01">Интеллектуал мулкчилик ҳуқуқлари бўйича баёнот</h6>
                    <p class="text-justify mg-b-20">Тизимда мавжуд бўлган барча контентлар, жумладан, бироқ фақат шу билан чекланмаган ҳолда, матнлар, расмлар, намуналар, диаграммалар, визуал интерфейслар ва компютер кодларига (“контентлар”) нисбатан тегишли интеллеcтуал мулкчилик ҳуқуқлари Агросаноатни рақамлаштириш марказига тегишли бўлади ёки ҳуқуқий ваколатлар билан Марказ томонидан фойдаланилади. Сиз тизим томонидан кўрсатилувчи хизматлар ҳақидаги маълумотларни тизимда юклаб олишингиз мумкин, бироқ улардан тижорий мақсадларда фойдаланилмаслиги керак ва юқоридаги маълумотлар ўзгартирилмаслиги ҳамда юқоридаги маълумотлар ва ушбу маълумотлар мавжуд бўлган ҳужжатлар кафолатланиши ва айтиб ўтилиши ва тизимнинг қонуний ҳуқуқлари ва манфаатлари сақлаб қолиниши керак.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ёпиш</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ФОЙДАЛАНИШ ШАРТЛАРИ -->
{{-- @endsection --}}
@yield('post_js')
<script src="{{ asset('js/auth.js') }}"></script>
<script src="{{ asset('templates/ijara/assets/js/eimzo/e-imzo.js') }}"></script>
<script src="{{ asset('templates/ijara/assets/js/eimzo/e-imzo-client.js') }}"></script>
<script src="{{ asset('templates/ijara/assets/js/eimzo/imzo.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
