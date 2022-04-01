@props(['withHeader' => true])
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Cert+ App</title>
    <!-- CSS files -->
    <link href="{{ global_asset('css/app.css') }}" rel="stylesheet"/>
</head>
<body>
<div class="wrapper">
    @if($withHeader)
        <x-layout.header/>
        <x-navigation/>
    @endif
    <div class="page-wrapper">
        @if($withHeader)
            <div class="container-xl">
                <!-- Page title -->
                {{ $pageHeader }}
            </div>
    @endif
    <!-- Page content -->
        <div class="page-body">
            <div class="container-xl">
                {{ $slot }}
            </div>
        </div>
    </div>

    <x-notification/>
</div>
<!-- JS files -->
<script src="{{ global_asset('js/app.js') }}"></script>
@stack('js')
</body>
</html>
