<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dennings</title>
    <meta HTTP-EQUIV="EXPIRES" CONTENT="0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/notosanstc.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/notosanssc.css">

    <!-- 網站基本位置 -->
    <base href="<?=site_url();?>"> 
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    

    <!-- CSS / JS -->
    <? foreach ($asset->css as $key => $file) { ?>
        <link class="<?=$key?>" rel="stylesheet" href="<?=$file?>">
    <? } ?>
    <? foreach ($asset->js as $key => $file) { ?>
        <script class="<?=$key?>" src="<?=$file?>"></script>
    <? } ?>

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
                <a class="logo" href="<?=site_url();?>"></a>
                <div class="gtn"><img src="images/global/menu-icon.png"></div>
                <ul class="menu_pad">
                    <? $this->load->view('frontend/menu'); ?>
                </ul>
            </header>