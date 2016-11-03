<!DOCTPYE html>
<html>
<head>
<title>@yield('title')</title>
@yield('css')
</head>
<body>
        @section('sidebar')
            'Master sidebar'
        @show
    <div class="container">
        @yield('content')    
    </div>
</body>
<script>
</script>
</html>
