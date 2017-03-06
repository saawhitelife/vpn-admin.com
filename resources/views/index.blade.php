<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>VPN Admin</title>
    <!-- Load Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<button class="btn btn-xs btn-detail load-companies">Load companies</button>
<button class="btn btn-xs btn-detail load-users">Load users</button>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/ajax-controller.js') }}"></script>
</body>
</html>