<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VPN Provider</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <!--Sidebar content-->
                    <button id="get-companies">Companies</button>
                    <button id="get-users">Users</button>
                    <button id="get-abusers">Abusers</button>
                </div>
                <div class="span10" id="main-screen">
                    <!--Body content-->
                </div>
            </div>
        </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.0.0.js"></script>
        <script src="js/get-views.js"></script>
    </body>
</html>
