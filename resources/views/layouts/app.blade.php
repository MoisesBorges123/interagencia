<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Interagência</title>
        <link rel="stylesheet" href="{{URL::asset('./css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/icon-font/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/typography-font/typo.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./fonts/fontawesome-5/css/all.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Plugin'stylesheets  -->
        <link rel="stylesheet" href="{{URL::asset('./plugins/aos/aos.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./plugins/slick/slick.min.css')}}">
        <!-- Vendor stylesheets  -->
        <link rel="stylesheet" href="{{URL::asset('./css/main.css')}}">
        <link rel="stylesheet" href="{{URL::asset('./css/app.css')}}">
        <!-- Custom stylesheet -->
        @livewireStyles

    </head>
    <body>
        {{ $slot }}
     
        @livewireScripts
    </body>

</html>
