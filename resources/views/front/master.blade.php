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
    <div class="header-wrapper">
        <div class="header-logo header-item">
            <img src="http://image.nd.com.cn/www/nd15v1/ndlogo_160525a.png">
        </div>
        <div class="header-menu header-item">
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="#">介绍</a></li>
                <li><a href="#">动态</a></li>
                <li><a href="#">联系我们</a></li>
            </ul>
        </div>
        <div class="header-other header-item">
            <ul>
                <li>联系方式：</li>
                <li>邮箱：123123123@qq.com</li>
                <li>手机：12312312312312312</li>
            </ul>
        </div>
    </div>
</div>
{{--header end--}}

@yield('body')

{{--footer begin--}}
<div class="index-footer">
    <div class="footer-wrapper">
        <div></div>
    </div>
</div>
<div class="index-web-info">

</div>
{{--footer end--}}
</body>
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
@yield('script')
</html>