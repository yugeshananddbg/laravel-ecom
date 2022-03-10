<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eureka E-commorce</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous"
        />

        <!-- Optional theme -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
        ></script>
        <!-- Latest compiled and minified JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
        <script>
            $(document).ready(function () {
                console.log("All set ");
            });
        </script>
        <style>
             .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
            .custom-login {
                height: 500px;
                padding: 100px;
            }
            .foot {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: wheat;
            }
            .custom-product {
                height: 800px;
            }
            
            img.slider_img {
                height: 400px !important;
            }
            .slider_text {
                margin-top: 0px;
                background-color: rgba(29, 216, 113, 0.116) !important;
                border-radius: 20px;
            }
            .trending_img {
                height: 100px;
            }
            .trending_item {
                float: left;
                width: 20%;
            }
            .trending_wrapper{
                margin: 20px;
            }
            .detail_img{
                height: 200px;
            }
        </style>
    </body>
</html>
