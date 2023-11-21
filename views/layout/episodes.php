<?php 

require_once 'views/layout/header.php';

?>

<div class="firstHeader">
    <h1 class="title"><?=$list->name?></h1>
    <h4>ANIME</h4>  
    <div class="TxAlt">
        <h3><?=$list->name?></h3> 
    </div>       
    <div class="valoracion">
        <ul>
            <li class="valor"><?=$list->puntaje?></li>
            <li class="votos">VALORACION</li>
            <li class="facebook">
                <a href="">FACEBOOK</a>
            </li>
            <li class="twitter">
                <a href="">TWITTER</a>
            </li>
        </ul>            
    </div>
</div>
<div class="conteiner">
    <div class="list_sidebar">
        <div class="img_lateral">
            <img src="<?=base_URL?>asset/img/portadas/<?=$list->image_path?>">
        </div>
        <div class="emision">
            <h3>EN EMISION</h3>
        </div>

    </div>
    <div class="center">
        <div class="sinopsis">
            <h2>Sinopsis</h2>
            <h3><?=$list->description?></h3>
        </div>
        <div class="listEpisode">
            <h2>Lista de episodios</h2>
            <a>
                <img src="<?=base_URL?>asset/img/portadas/<?=$list->image_path?>">
                <div>
                    <h3><?=$list->name?></h3>
                    <h4>Episode</h4>
                </div>                
            </a>
        </div>
    </div>
</div>


<?php

require_once 'views/layout/footer.php';