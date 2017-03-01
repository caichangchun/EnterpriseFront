@extends('.front.master')

@section('title','首页')

@section('body')
    <style>
        .banner-list
        {
            width: 100%;
        }
        .banner-img
        {
            position: absolute;
            width: 100%;
        }
    </style>
    <div id="banner_list" class="banner-list">
        <img class="banner-img" src="/images/1.jpg">
        <img class="banner-img" src="/images/2.jpg">
        <img class="banner-img" src="/images/3.jpg">
        <img class="banner-img" src="/images/4.jpg">
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div id="banner_switch">
        <ul style="list-style-type: none; z-index: 2">
            <li style="float: left; margin-left: 10px cursor: pointer">1</li>;
            <li style="float: left; margin-left: 10px; cursor: pointer">2</li>
            <li style="float: left; margin-left: 10px; cursor: pointer">3</li>
            <li style="float: left; margin-left: 10px; cursor: pointer">4</li>
        </ul>
    </div>
@endsection

@section('script')
    <script>

        $(document).ready(function () {
            var current_img = 0;
            $('.banner-img').each(function () {
                $(this).hide();
            })
            $('.banner-img').eq(0).fadeIn(500);
            $('#banner_switch ul li').click(function () {
                var switch_img_pos = $('#banner_switch ul li').index(this);
                $('.banner-img').each(function () {
                    $(this).css('z-index',-1);
                })
                $('.banner-img').eq(switch_img_pos).css('z-index',1).fadeIn(1000);
                $('.banner-img').eq(current_img).fadeOut(1000);
                current_img = switch_img_pos;
            })
        })
    </script>
@endsection
