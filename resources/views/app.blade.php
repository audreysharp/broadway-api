<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Broadway API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

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

            .description {
              max-width: 500px;
              font-weight: 300;
              padding: 10px 100px;
            }

            .credits {
                font-size: 12px;
                position: fixed;
                bottom: 0;
                right: 0;
                left: 0;
                /*max-width: 500px;*/
                font-weight: 300;
                padding: 10px 100px;
                max-width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Broadway API
                </div>

                <div class="description">
                  <p>With the Broadway musicals API, you can keep track of musicals, actors, and songs. You can use it to keep a database of shows you've seen or want to see, or just track all the musicals that are currently open on Broadway. The API is designed to be easy to use for everyone, even those who don't have much experience coding.</p>
                </div>

                <div class="links">
                    <a href="https://audreysharp.gitbooks.io/broadway-musicals-api/content">API Documentation</a>
                    <a href="https://github.com/audreysharp/broadway-api/">Source Code</a>
                    <a href="https://github.com/audreysharp/">Project Portfolio</a>
                </div>

                <div class="credits">
                    Built with <a href="https://php.net">PHP</a>, <a href="https://laravel.com/">Laravel</a>, and <a href="https://www.mysql.com/">MySQL<a>.
                </div>
            </div>
        </div>
    </body>
</html>
