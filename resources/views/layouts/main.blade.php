<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="Модемы, маршрутизаторы, коммутаторы, сетевые шлюзы, teltomica" />
    <meta name="description" content="ATP Router - Модемы, маршрутизаторы, коммутаторы, сетевые шлюзы от компании Teltonica Networks" />
    <meta name="author" content="" />

    <title>ATP Router - @yield('title')</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/magnific-popup.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/ion.rangeSlider.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/Pe-icon-7-stroke.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-203209121-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-203209121-1');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(83319634, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/83319634" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <div class="top_nav">
        <div class="container">
            <div class="contact_link-container">
                <a href="" class="contact_link1">
                    <img src="{{ asset('/images/location.png') }}" alt="" />
                    <span>
              г. Алматы, пр. Назарбаева д.103 офис 809
            </span>
                </a>
                <a href="tel:+77770134379" class="contact_link2">
                    <img src="{{ asset('/images/call.png') }}" alt="" />
                    <span>
              Телефон : +7 777 013 4379
            </span>
                </a>
                <a href="" class="contact_link3">
                    <img src="{{ asset('/images/mail.png') }}" alt="" />
                    <span>
              manager@atprouter.kz
            </span>
                </a>
            </div>
        </div>
    </div>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('/images/logo.png') }}" alt="" />
                    <span>
              ATP Router
            </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item @if(Request::getPathInfo() == '/') active @endif ">
                            <a class="nav-link" href="/">Главная</a>
                        </li>
                        <li class="nav-item @if(Request::getPathInfo() == '/about') active @endif">
                            <a class="nav-link" href="/about"> О нас</a>
                        </li>
                        <li class="nav-item @if(Request::getPathInfo() == '/categories') active @endif">
                            <a class="nav-link" href="/categories"> Продукция </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
   @yield('content')

<!-- footer section -->
<footer class="container-fluid footer_section">
    <p>
        &copy; 2021 All Rights Reserved by ATPCOM</a>
    </p>
</footer>
<!-- footer section -->

<script type="text/javascript" src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+77770134379", // WhatsApp number
                call_to_action: "Чем мы можем Вам помочь?", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</body>

</html>