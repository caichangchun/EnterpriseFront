<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('link')
</head>
<body>
{{--header begin--}}
<div class="index-header">
    <div class="header-content">
        <div class="header-log">
            <img src="#">
        </div>
        <div class="header-menu">
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="#">介绍</a></li>
                <li><a href="#">动态</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>
{{--header end--}}

@yield('body')

{{--footer begin--}}
<div class="index-footer">
    <div class="footer-content">
        <div></div>
    </div>
</div>
{{--footer end--}}
</body>
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
@yield('script')
</html>