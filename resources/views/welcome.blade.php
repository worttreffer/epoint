<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EPoint</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
                        <a href="{{ url('/startseite') }}">Home</a>
						<li class="nav-item">
                                <a class="nav-link" href="{{ route('startseite') }}">{{ __('Interner Bereich') }}</a>
                            </li>
                    @else
                        <a href="{{ route('login') }}">Anmelden</a>
                        <a href="{{ route('register') }}">Registrieren</a>
                    @endauth
                </div>
            @endif

			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
            <div class="content">
                <div class="title m-b-md">
                    EPoint von Worttreffer
                </div>

                <div class="links">
					<a href="http://www.worttreffer.de">Web:Worttreffer</a>
					<a href="http://www.worttreffer.de/impressum">Web:Impressum</a>
					<a href="http://http://www.worttreffer.de/datenschutz">Web:Datenschutz</a>
					<a href="http://http://www.worttreffer.de/kontakt">Web:Kontakt</a>
				</div>
            </div>
        </div>
    </body>
</html>
