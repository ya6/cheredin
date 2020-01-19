<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="144x144" href="/images/fav/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fav/favicon-16x16.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/css/app.css">
    
    @yield('style')
  
    <title>@yield('title', 'Vladimir Cheredin')</title>
</head>
<body>
   
    @include ('site.header')
   
    
    @yield ('content')
   
    
    @include ('site.footer')

    
<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="js/bootstrap.js"></script>   

<script  type="text/javascript" src="/js/app.js"></script>
@yield('script')
</body>
</html>