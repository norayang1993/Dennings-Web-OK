<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans">


    <!-- 網站基本位置 -->
    <base href=""> 

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    
    <!-- css 跨頁共用 -->
    <link rel="stylesheet" href="css/stylesheets/model/snippet.css">
    <link rel="stylesheet" href="css/stylesheets/controller/frontend/global.css">

    <!-- CSS -->
    <? foreach ($asset->css as $key => $file) { ?>
        <link class="<?=$key?>" rel="stylesheet" href="<?=$file?>">
    <? } ?>
    

    <!-- css 部份網頁共用。例如側邊攔(sidebar)，可能只會被局部的網頁中使用 -->
    <!-- <link rel="stylesheet" href="slidebar"> -->

    <!-- js 工具 -->
    <script src="bower_components/requirejs/require.js"></script>
    <script src="appscript/dev/libraries/shimdeps.js"></script>

    <!-- requirejs 設定 -->
    <script src="appscript/dev/config/global.js"></script>
    <script src="appscript/dev/config/home.js"></script>
    
    <!-- requirejs 引用模組 -->
    <script src="appscript/dev/controller/global/main.js"></script>
    <script src="appscript/dev/controller/home/main.js"></script>

</head>
<body>

    <div class="container_wrap">
        
        <div class="navbar_mobile">
            <div class="container_nav">
                <ul class="menu_mobile ">
                    <? $this->load->view('frontend/menu'); ?>
                </ul>
            </div>
        </div>

        <div class="page_frame">
            <header class="header ">
                <a class="logo" href=""></a>
                <div class="gtn"><img src="images/global/menu-icon.png"></div>
                <ul class="menu_pad">
                    <? $this->load->view('frontend/menu'); ?>
                </ul>
            </header>