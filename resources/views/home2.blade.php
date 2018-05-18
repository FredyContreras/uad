<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UAD</title>
    <!-- style -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <!-- style  -->
</head>

<style media="screen">
    body{
        background-color: rgba(237, 244, 245, 1);
    }
    body > .layout-l{
        background-color: rgba(0,0,0,0.5);
        position: fixed;
        top: 0px;
        left:0px;
        height: 100% ;
        width: 80px;
        padding:10px;
        box-shadow: 0px 2px 20px  rgba(0,0,0,0.2);
    }
    .layout-l .menu{
        width: 100%;
        text-align: center;
        padding:6px;
        border-radius: 8px;
        cursor: pointer;
    }
    .layout-l .menu:hover > span{
        color:white;
    }
    .layout-l .menu.active{
        background-color:white;
        /* box-shadow: 0px 0px 10px 3px rgba(0,0,0,0.3); */
    }
    .layout-l .menu > span{
        font-size: 22px;
        color:#BDBDBD;
    }
    .layout-l .menu.active > span{
        color:#2196F3;
    }
    body > .layout-t{
        background-color: rgba(0,0,0,0.5);
        position: fixed;
        top: 0px;
        right:0px;
        width: calc(100% - 80px);
        height: 70px;
        /* border-radius: 5px; */
        /* box-shadow: 0px 2px 20px  rgba(0,0,0,0.2); */
    }
    body > .layout-content{
        position: fixed;
        top: 90px;
        right: 10px;
        width: calc(100% - 90px);
        /* background-color:white; */
        height: calc(100% - 110px);
        overflow: auto;
    }
    .layout-content .row{
        margin:0px;
        margin-bottom:5px;
        margin-top:5px;
        height: calc(100% - 10px);
    }
    .layout-content .content-layout{
        background-color: white;
        border-radius: 5px;
        box-shadow: 0px 2px 20px  rgba(0,0,0,0.2);
        height: 100%;
    }
</style>

<body class="wallpaper">

    <div class="layout-l">
        <img src="{{asset('img/logo/logo.png')}}" alt="" width="50px">
        <hr>
        <div class="menu active">
            <span class="icon-home"></span>
        </div>
        <div class="menu">
            <span class="icon-users"></span>
        </div>
        <div class="menu">
            <span class="icon-download"></span>
        </div>
        <div class="menu">
            <span class="icon-flag"></span>
        </div>
        <hr>
        <div class="menu">
            <span class="icon-cog"></span>
        </div>
    </div>
    <div class="layout-t">

    </div>

    <div class="layout-content">
        <div class="row">
            <div class="col-lg-10">
                <div class="content-layout">

                </div>
            </div>
            <div class="col-lg-2">
                <div class="content-layout">

                </div>
            </div>

        </div>


    </div>

</body>
<!-- script  -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
<!-- script  -->


</html>
