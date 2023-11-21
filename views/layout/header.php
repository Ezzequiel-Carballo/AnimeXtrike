<!DOCTYPE html>
<html lang="in">
    <head>
        <title>AnimeXtrike</title>
        <link rel="stylesheet" type="text/css" href="<?=base_URL?>asset/css/style.css">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">

        <!-- Uso de paginas alternas -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="header">
            <div class="hbox">
                <input type="checkbox" name="" id="chk1">
                <div class="logo">
                    <a href="<?=base_URL?>home/index">
                        <h1>AnimeXtrike</h1>
                        <h3>エゼキエル・カルバロ</h3>
                    </a>
                </div>
                <div class="search">
                    <input type="text" name="search" placeholder="Buscar...">
                    <a><i class='bx bx-search'></i></a>
                </div>
                <ul>
                    <li><a href="<?=base_URL?>home/index">INICIO</a></li>
                    <li><a href="<?=base_URL?>directorio/catalogo">DIRECTORIO</a></li>
                    <li><a href="<?=base_URL?>directorio/new">LOGIN</a></li>
                    <li>
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-twitter'></i></a>
                    </li>
                </ul>
                <div class="menu">
                    <label for="chk1">
                        <i class='bx bx-menu'></i>
                    </label>
                </div>            
            </div>
        </div>
            