@extends('.front.master')

@section('title', '公司简介')
@section('link')
<link rel="stylesheet" href="{{ asset('css/summary.css') }}">
@endsection

@section('body')
    <div class="summary-title">
        <div class="summary-title-wrapper">
            <div class="summary-brand">
                <h1>关于我们</h1>
            </div>
            <div class="summary-menu">
                <ul>
                    <li target="a">发展历程</li>
                    <li target="b">业务范围</li>
                    <li target="c">产品展示</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="fillnav"></div>
    <div class="summary-container">
        <div class="summary-container-wrapper">
            <div id="a">
                <h1>发展历程</h1>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
            </div>
            <div id="b">
                <h1>业务范围</h1>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2><h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2><h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
            </div>
            <div id="c">
                <h1>产品展示</h1>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2><h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2><h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
                <h2>123</h2>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function(){
            var nav=$(".summary-title"); //得到导航对象
            var win=$(window); //得到窗口对象
            var sc=$(document);//得到document文档对象。
            win.scroll(function(){
                if(sc.scrollTop()>=90){
                    nav.addClass("fixednav");
                    $('.fillnav').addClass('fillednav');
                }else{
                    nav.removeClass("fixednav");
                    $('.fillnav').removeClass('fillednav');
                }
            });
            $('.summary-menu ul li').click(function () {
                $('html, body').animate({
                    scrollTop: $("#"+$(this).attr("target")).offset().top - 120
                }, 600);
            });
        })
    </script>
@endsection