<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Bootstrap effect progress-bar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Font family Open Sans - Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <title>@yield('pageTitle')</title>

        {{-- Definition style --}}
        <style type="text/css">
            .grid-items {
                display: grid;
                grid-gap: 20px;
                margin: 20px;
                grid-template-columns: 1fr 1fr 1fr;
            }
            .item {
                min-height: 30rem;
                background-color: aliceblue;
                display: flex;
                border: 1px solid #e3e3e3;
                border-radius: 8px;
                background-position: center;
                background-size: contain;
                background-repeat: no-repeat;
            }
            .content-item {
                background-color: #ffffff90;
                width: 100%;
                border-radius: 8px;
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
            }
            .button-item {
                height: 20%;
                display: flex;
                background-color: white;
                align-items: center;
                width: 100%;
                justify-content: center;
            }
            .button-radius-bottom-left {
                border-bottom-left-radius: 8px;
            }
            .button-radius-bottom-right {
                border-bottom-right-radius: 8px;
            }
            .button-info:hover {

            }
            .button-edit:hover {
                
            }
            .button-delete:hover {
                background-color: red;
            }
        </style>
    </head>

    <body>

        <div class="container-fluid m-0 p-0">
            @yield('header')
        </div>
        
        <div class="container">
            @yield('content')
        </div>

        <div class="container-fluid m-0 p-0">
         @yield('footer')
        </div>
        

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <!-- CDN Jsdelivr -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <!-- CDN Bootstrap StackPath -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <!-- Ajax GoogleApis -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- CDN Bootstrap MaxCDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>