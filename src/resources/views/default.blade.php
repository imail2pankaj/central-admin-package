<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US Page</title>
    {!! CentralAdmin::css() !!}

    <script src="{{ CentralAdmin::jQuery() }}"></script>
    {!! CentralAdmin::headerJs() !!}
</head>
<body class="hold-transition {{config('central-admin.skin')}} {{join(' ', config('central-admin.layout'))}}">
    <div class="wrapper">

        @include('central-admin::partials.header')
    
        @include('central-admin::partials.sidebar')
    
        <div class="content-wrapper" id="pjax-container">
            {!! CentralAdmin::style() !!}
            <div id="app">
            @yield('content')
            </div>
            {!! CentralAdmin::script() !!}
            {!! CentralAdmin::html() !!}
        </div>
    
        @include('central-admin::partials.footer')
    
    </div>

    
<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
    // LA.user = @json(@$_user_);
</script>
    {!! CentralAdmin::js() !!}
</body>
</html>