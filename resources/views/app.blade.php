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
        <x-header/>
        <x-navigation/>
    @endif
    <div class="page-wrapper">
        @if($withHeader)
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                {{ $title }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="page-body">
            <div class="container-xl">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
<!-- JS files -->
<script src="{{ global_asset('js/app.js') }}"></script>

@stack('js')
</body>
</html>
