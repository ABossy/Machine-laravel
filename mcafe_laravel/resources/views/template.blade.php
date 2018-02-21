<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Machine_Astrid</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 80vh;
                margin: 0;
                text-align:center;
                font-size: 15px;


            }
            
            .navbar {
                font-size: 25px;
                margin-bottom:320px;
               
            }

            .dropdown-toggle{
                color: white;

            }

            .dropdown{
                float: right;
            }
            
            .full-height {
                height: 50vh;
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
                font-size: 50px;
            }

            .links > a  {
                color: white;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
             margin-bottom: 5px;

            }

           .form {
            margin-bottom:80px;
           }

            

        </style>
    </head>
    <body>
            @include('navbar')
        <div class="flex-center position-ref full-height">
            <div class="content">
               <div class="title m-b-md">
                    @yield('titre')
                    @yield('orderbutton')

               </div> 
                 @yield('image')
                 @yield('contenu')
                 @yield('button')
                @yield('forme')

            </div>
    </body>
</html>
