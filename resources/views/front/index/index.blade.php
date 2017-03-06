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
            z-index: -1;
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
            z-index: 2;
            margin-top: -30px;
            text-align: center;
        }
        .banner-switch ul
        {
            list-style-type: none;
            display: inline;
            line-height: 30px;
            z-index: 2;
        }
        .banner-switch ul li
        {
            display: inline;
            margin-left: 5px;
            cursor: pointer;
        }
        .index-row-1
        {
            width: 100%;
            background-color: #2F2F2F;
            float: left;
        }
        .index-row-middle-1
        {
            width: 70%;
            height: 300px;
            margin-left: 15%;
        }
        .index-row-2
        {
            clear:both;
            width: 100%;
            background-color: #F6F8FC;
        }
        .index-row-middle-2
        {
            width: 70%;
            height: 500px;
            margin-left: 15%;
            text-align: center;
        }
        .index-card-item
        {
            width: 235px;
            height: 235px;
            margin:15px 0 0 15px;
            text-align: center;
            display: inline-block;
            border: 1px solid dodgerblue;
            box-shadow: 10px 10px 5px #888888;
            background-color: white;
        }
    </style>
    <div id="banner_list" class="banner-list">
        <img class="banner-img" src="/images/1.jpg">
        <img class="banner-img" src="/images/2.jpg">
        <img class="banner-img" src="/images/3.jpg">
    </div>
    <div id="banner_switch" class="banner-switch">
        <ul>
            <li><i class="fa fa-circle-thin"></i></li>
            <li><i class="fa fa-circle-thin"></i></li>
            <li><i class="fa fa-circle-thin"></i></li>
        </ul>
    </div>
    <div class="index-row-1">
        <div class="index-row-middle-1">
            <div style="margin: 30px 0 0 150px; color: #a4aaae">
                <h3 style="font-size: 30px">最新动态</h3>
                <ul style="text-decoration: none; list-style: none; font-size: 20px;">
                    <li>华创益网 : 一个有理想的公司</li>
                    <li>华创益网 : 一个有理想的公司</li>
                    <li>华创益网 : 一个有理想的公司</li>
                    <li>华创益网 : 一个有理想的公司</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="index-row-2">
        <div class="index-row-middle-2">
            <div style="text-align: left; padding: 20px 0 0 40px;"><h3>我们的服务</h3></div>
            <div class="index-card-item">
                <div style="width: 100%; display: block; margin-top: 40px;">
                    <i class="fa fa-laptop fa-5x" style="color: dodgerblue"></i>
                </div>
                <div style="width: 100%; display: block;">
                    <span style="color: dodgerblue; ">网站建设</span>
                </div>
            </div>
            <div class="index-card-item">
                <div style="width: 100%; display: block; margin-top: 40px;">
                    <i class="fa fa-android fa-5x" style="color: dodgerblue"></i>
                </div>
                <div style="width: 100%; display: block;">
                    <span style="color: dodgerblue; ">安卓开发</span>
                </div>
            </div>
            <div class="index-card-item">
                <div style="width: 100%; display: block; margin-top: 40px;">
                    <i class="fa fa-object-group fa-5x" style="color: dodgerblue"></i>
                </div>
                <div style="width: 100%; display: block;">
                    <span style="color: dodgerblue; ">软件设计</span>
                </div>
            </div>
            <div class="index-card-item">
                <div style="width: 100%; display: block; margin-top: 40px;">
                    <i class="fa fa-globe fa-5x" style="color: dodgerblue"></i>
                </div>
                <div style="width: 100%; display: block;">
                    <span style="color: dodgerblue; ">其他业务</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var current_img = 0;
        var img_amount = $('#banner_list').find('img').length;
        $(document).ready(function () {
            bannerImgInit();
            window.setInterval(function(){
                bannerImgAutoSwtich();
                console.log($(document).scrollTop())
                bannerBtnSwitch(current_img);
            }, 2500);
        })
        $('#banner_switch ul li').click(function bannerClickSwitch() {
            var switch_img_pos = $('#banner_switch ul li').index(this);
            bannerBtnSwitch(switch_img_pos);
            bannerImgSwitch(switch_img_pos);
        })
        function bannerImgInit() {
            $('.banner-img').each(function () {
                $(this).hide();
                $(this).css('z-index',-1);
            })
            $('.banner-img').eq(0).fadeIn(1000);
            $('#banner_switch ul li i').eq(0).attr('class','fa fa-circle')
        }
        function bannerBtnSwitch(switch_img_pos) {
            $('.banner-switch ul li').each(
                    function () {
                        $(this).find('i').attr('class','fa fa-circle-thin')
                    }
            )
            $('#banner_switch ul li i').eq(switch_img_pos).attr('class','fa fa-circle').fadeIn(1000);
        }
        function bannerImgSwitch(switch_img_pos) {
            $('.banner-img').eq(switch_img_pos).css('z-index',1).fadeIn(1000);
            $('.banner-img').eq(current_img).css('z-index',-1).fadeIn(1000);
            current_img = switch_img_pos;
        }
        function bannerImgAutoSwtich(){
            if(current_img<img_amount-1){
                $('.banner-img').eq(current_img+1).css('z-index',1).fadeIn(1000);
                $('.banner-img').eq(current_img).css('z-index',-1).fadeOut(1000);
                current_img++;
            }
            else {
                $('.banner-img').eq(0).css('z-index',1).fadeIn(1000);
                $('.banner-img').eq(current_img).css('z-index',-1).fadeOut(1000);
                current_img=0;
            }
        }
    </script>
@endsection
