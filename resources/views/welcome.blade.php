<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Cek Mata</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Cek Mata, <i id="typed"></i>
                </div>

                <script>
                  var typed = new Typed('#typed', {
                    strings: ["Sekarang ^2000", "Gratis ^2000"],
                    smartBackspace: true,
                    loop: true,
                    typeSpeed: 100
                  });
                </script>

                <div class="links">
                    <a href="http://localhost:8100/">Mulai</a>
                    <a href="/home">Admin</a>
                    <a href="/docs/index.html">API doc</a>
                    <a href="https://github.com/noobstyle2pro/kuesioner_kesehatan.git">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
