@extends('.front.master')

@section('title','首页')

@section('body')
    <div id="banner">
        <div id="banner_info">

        </div>
        <div id="banner_switch">
            <ul>
                <li style="float: left; ">1</li>
                <li style="float: left; ">2</li>
                <li style="float: left; ">3</li>
                <li style="float: left; ">4</li>
            </ul>
        </div>
        <div id="banner_list">
            <img src="/images/1.jpg">
            <img src="/images/2.jpg">
            <img src="/images/3.jpg">
            <img src="/images/4.jpg">
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#banner_list').hide()
        })
    </script>
@endsection
