<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Scrips -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery/.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

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

             .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }
        </style>
    </head>
    
    <body>
        
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    SIGEO
                </div>

                <div >
                    <h1>O lar da crianca Feliz...</h1>
                    <br/><br/>
                </div>
                <div class="form-group">
                    <input type="button" name="login" class=" btn btn-primary btn-lg" value="Iniciar Sessao" onclick="window.location='{{  url('login') }}'"/>
                </div>
                <div >
                    Coded by:
                </div>

                 <div class="links">
                    <a href=>Amiel</a>
                    <a href=>Chiposse</a>
                    <a href=>Houana</a>
                    <a href=>Magule</a>
                    <a href=>Nhassengo</a>
                    <a href=>Victor</a>
                    <a href=>Saide</a>
                </div>
            </div>
           
        </div>
    </body>
</html>
