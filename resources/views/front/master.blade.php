<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta content="width=device-width, initial-scale='${window.devicePixelRatio}', maximum-scale='${window.devicePixelRatio}', user-scalable=0" name="viewport">

    <meta content="yes" name="apple-mobile-web-app-capable">

    <meta content="black" name="apple-mobile-web-app-status-bar-style">    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('link')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>
{{--header begin--}}
<div class="index-header">
    <div class="header-wrapper">
        <div class="header-logo header-item">
            <h2>华创益网信息技术有限公司</h2>
        </div>
        <div class="header-menu header-item">
            <ul>
                <li><a href="/">首页</a></li>
                <li><a href="{{ url('/summary') }}">介绍</a></li>
                <li><a href="#">动态</a></li>
                <li><a href="#">联系</a></li>
            </ul>
        </div>
        <div class="header-other header-item">
            <ul>
                <li>联系邮箱：111111@qq.com</li>
            </ul>
        </div>
    </div>
</div>
{{--header end--}}

@yield('body')

{{--footer begin--}}
<div class="index-footer">
    <div class="footer-wrapper">
        <div class="footer-item"><i class="fa fa-check-square-o fa-4x"></i><h1>高效</h1></div>
        <div class="footer-item"><i class="fa fa-check-square-o fa-4x"></i><h1>便捷</h1></div>
        <div class="footer-item"><i class="fa fa-check-square-o fa-4x"></i><h1>安全</h1></div>
        <div class="footer-item"><i class="fa fa-check-square-o fa-4x"></i><h1>美观</h1></div>
    </div>
</div>
<div class="index-web-info">
    <div class="web-info-wrapper">
        <div class="web-info-left web-info-item">
            <span>Copyright © 1999-2017 青岛华创益网信息技术有限公司 All Rights Reserved</span>
        </div>
        <div class="web-info-right web-info-item">
            <a href="http://www.miitbeian.gov.cn/">鲁ICP备16009379号-1</a>
        </div>
    </div>
</div>
{{--footer end--}}
</body>
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
@yield('script')
</html>