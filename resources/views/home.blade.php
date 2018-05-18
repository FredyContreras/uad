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
        background-color: white;
        position: fixed;
        top: 50px;
        left:0px;
        height: 100% ;
        width: 200px;
        /* padding:10px; */
        box-shadow: 0px 2px 20px  rgba(0,0,0,0.2);
    }
    .layout-l .menu{
        width: 100%;
        text-align: left;
        padding:10px;
        cursor: pointer;
        border-left: 7px solid white;
    }
    .layout-l .menu:not(.active):hover {
        border-left: 7px solid #BBDEFB;
    }
    .layout-l .menu.active{
        border-left: 7px solid #2196F3;
    }
    .layout-l .menu > span{
        font-size: 22px;
        color:#BDBDBD;
    }
    .layout-l .menu.active > span{
        color:#2196F3;
    }
    body > .layout-t{
        background-color: rgba(0,0,0,1);
        position: fixed;
        top: 0px;
        right:0px;
        width: 100%;
        height: 50px;
        color:white;
        /* border-radius: 5px; */
        /* box-shadow: 0px 2px 20px  rgba(0,0,0,0.2); */
    }
    .layout-t .ly-t-right{
        /* border-left:1px solid #ccc; */
        width:50px;
        text-align: center;
        height: 50px;
        display: inline-block;
        cursor: pointer;
    }
    .layout-t .ly-t-right:hover{
        background-color: #2196F3;
    }

    .layout-t .ly-t-right > span{
        color:white;
        font-size: 20px;
        top: 10px;
        position: relative;
    }
    body > .layout-content{
        position: absolute;
        top: 50px;
        left:200px;
        width: calc(100% - 200px);
        background-color:#EEEEEE;
        height: calc(100% - 50px);
        overflow: auto;
    }
    .layout-content .title{
        background: white;
        width: 100%;
        height: 80px;
        padding-left: 50px;
        border-bottom: 1px solid #2196F3;
    }
    .layout-content .title > .abrev{
        background: #2196F3;
        position: relative;
        width: 70px;
        height: 70px;
        top:30px;
        left:-20px;
        z-index: 99;
        text-align: center;
        color:white;
        font-size: 22px;
        line-height: 70px;
        display: inline-block;
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
        /* box-shadow: 0px 2px 20px  rgba(0,0,0,0.2); */
        height: 100%;
    }
</style>

<body>

    <div class="layout-l">
        <div class="md-form form-group" style="padding:3px">
            <input type="text" name="loginPassword" class="form-control" id="search" >
            <label for="search">Search..</label>
        </div>

        <div class="menu active">
            Home
        </div>
        <div class="menu">
            Users
        </div>
        <div class="menu">
            Reports
        </div>
        <div class="menu">
            Flags
        </div>
        <hr>
        <div class="menu">
            Config
        </div>
    </div>
    <div class="layout-t">
        <div style="background-color:#2196F3;display:inline-block;height:50px;width:50px;text-align:center;padding-top:10px">
            <span class="icon-th-1" style="font-size:19px"></span>
        </div>
        <div style="display:inline;padding-left:10px;font-size:24px">
            Allied Global
        </div>
        <div class="" style="float:right">
            <div class="ly-t-right">
                <span class="icon-bell-1"></span>
            </div>
            <div class="ly-t-right">
                <span class="icon-cog"></span>
            </div>
            <div class="ly-t-right">
                <span class="icon-question"></span>
            </div>
            <div class="ly-t-right">
                <span class="icon-user"></span>
            </div>
        </div>

    </div>

    <div class="layout-content">
        <div class="title">
            <div class="abrev">
                HM
            </div>
            <h2 style="display:inline-block">Home</h2>
        </div>
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
<!-- <script type="text/javascript" src="{{asset('js/menu.js')}}"></script> -->
<!-- script  -->


</html>
