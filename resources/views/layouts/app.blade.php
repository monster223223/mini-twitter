<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Mini_Twitter') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (session()->get('locale')=='ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
        <style>
            html {
                direction:rtl;
                font-family:"Droid Arabic Kufi", "Droid Sans", sans-serif;
                font-size:16px;
                /* background-color: azure; */
            }
            *{
                direction:rtl;
            }
        </style>
    @endif
</head>



<body class="{{session()->get('locale')=='ar' ? 'rtl' : 'ltr'}}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Mini_Twitter') }}
                </a>
                @auth
                    <a class="navbar-brand" href="{{ url('/follows') }}">
                        {{__('User List')}}
                    </a>
                    <a class="navbar-brand" href="{{ url('/tweets') }}">
                        {{__('My Tweets')}}
                    </a>
                    <a class="navbar-brand" href="{{ url('/tweets/create') }}">
                        {{__('New Tweet')}}
                    </a>
                    <a class="navbar-brand" href="{{ url('/timelines') }}">
                        {{__('Timeline')}}
                    </a>
                @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class=" font-weight-bolder nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img style="border-radius: 50%;" src="{{asset('images/' . Auth::user()->imgname)}}" height="60">
                                    <span style="font-size:x-large">{{Auth::user()->name}}</span> <span class="caret"></span>
                                 </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                @php $locale = session()->get('locale'); @endphp
                                <li class="nav-item dropdown" style="margin:10px">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @switch($locale)
                                            @case('ar')
                                            <img src="{{asset('ar.png')}}" width="30px" height="40px" > {{__('Arabic')}}
                                            @break
                                            @default
                                            <img src="{{asset('en.png')}}" width="30px" height="40px"> {{__('English')}}
                                        @endswitch
                                        <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="en"><img src="{{asset('en.png')}}" width="30px" height="30px"> {{__('English')}}</a>
                                        <a class="dropdown-item" href="ar"><img src="{{asset('ar.png')}}" width="30px" height="30px"> {{__('Arabic')}}</a>
                                    </div>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
    <div style="color:red">
	<br><hr>
		 هذا الموقع لأغراض تعليمية. لا تضع عليه بيانات شخصية حقيقية. المطور غير مسؤول عن اي استخدام سيئ او في غير محله لهذا الموقع. ايضا سيتم الغاء البيانات من قاعدة البيانات الخاصة بالموقع بشكل متكرر. لان قاعدة البيانات صغيرة جدا.
	<br><hr>
	This site is for educational purposes. Do not submit real personal data into it. The developer is not responsible for any misuseuse of this site. also the supported database for this site is too small and data will be deleted frequently from it.
<hr><br>
	</div>
    </footer>
</body>
</html>
