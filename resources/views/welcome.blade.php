
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mini-Twitter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            site: <a href="http://mini-twitter-hashim.herokuapp.com/">http://mini-twitter-hashim.herokuapp.com/</a>
			github: <a href="https://github.com/cse-hashim/Mini-Twitter/">https://github.com/cse-hashim/Mini-Twitter/</a>
                <div class="title m-b-md">
                    Mini-Tw
                </div>
				<div class="links">
					<hr />
					By: <a href="mailto:hashimhossam@outlook.com">Hashim Hossam</a>
					<hr />
				</div>

				<div class="footer">
<div style="color:red">
	<br><hr>
		 هذا الموقع لأغراض تعليمية. لا تضع عليه بيانات شخصية حقيقية. المطور غير مسؤول عن اي استخدام سيئ او في غير محله لهذا الموقع. ايضا سيتم الغاء البيانات من قاعدة البيانات الخاصة بالموقع بشكل متكرر. لان قاعدة البيانات صغيرة جدا.
	<br><hr>
	This site is for educational purposes. Do not submit real personal data into it. The developer is not responsible for any misuseuse of this site. also the supported database for this site is too small and data will be deleted frequently from it.
<hr><br>
	</div>
					<div class="links">
						Powered By: <a href="https://laravel.com/">Laravel</a>
						<br /><hr />
						<a href="https://laravel.com/docs">Docs</a>
						<a href="https://laravel.com/docs">Docs</a>
						<a href="https://laracasts.com">Laracasts</a>
						<a href="https://laravel-news.com">News</a>
						<a href="https://blog.laravel.com">Blog</a>
						<a href="https://nova.laravel.com">Nova</a>
						<a href="https://forge.laravel.com">Forge</a>
						<a href="https://vapor.laravel.com">Vapor</a>
						<a href="https://github.com/laravel/laravel">GitHub</a>
						<br /><hr />
					</div>
                </div>
            </div>
        </div>
    </body>
</html>
