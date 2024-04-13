<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('/backend/css/sb-admin-2.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('/backend/css/dataTable.min.css')}}" rel="stylesheet">  
    <link rel="stylesheet" href="{{ asset('form/css/style.css') }}">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="w-full h-screen overflow-hidden">

    @if (session('unauthenticated') || $errors->has('email'))
        @include('Components.Auth.login')
    @endif

    @include('sweetalert::alert')

    <div class="flex flex-col gap-14 xl:gap-0">
        <div class="sticky top-0 z-50">
            @include('Components.Tamu.navbar-tamu')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
    
    <div class="fixed bottom-0 w-screen">
        @include('Components.Admin.footer')
    </div>

</body>
</html>