@extends('.front.master')

@section('title','首页')

@section('body')
    <style>
        .banner-list
        {
            position: relative;
            width: 100%;
            overflow: hidden;
            height: 500px;
        }
        .banner-img
        {
            width: 1920px;
            position: absolute;
            left: 50%;
            margin-left: -971px;
            height: 500px;
        }
        .banner-switch
        {
            height: 30px;
            text-align: center;

        }
        .banner-switch ul
        {
            list-style-type: none;
            height: 100%;
            display: inline-block;
            line-height: 30px;
            margin-top: -30px;
        }
        .banner-switch ul li
        {
            float: left;
            margin-left: 10px;
            cursor: pointer;
            z-index: 2;
        }
    </style>
    <div id="banner_list" class="banner-list">
        <img class="banner-img" src="/images/1.jpg">
        <img class="banner-img" src="/images/2.jpg">
    </div>
    <div id="banner_switch" class="banner-switch">
        <ul>
            <li><i class="fa fa-circle-thin"></i></li>
            <li><i class="fa fa-circle-thin"></i></li>
            <li><i class="fa fa-circle-thin"></i></li>
            <li><i class="fa fa-circle-thin"></i></li>
        </ul>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var current_img = 0;
            $('.banner-img').each(function () {
                $(this).hide();
                $(this).css('z-index',-1);
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
