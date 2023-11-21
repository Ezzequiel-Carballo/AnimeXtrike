<div class="conteiner">
    <div class="new_anime">
        <div class="title">
            <h2><i class='bx bxs-videos'></i>Ultimos animes agregados<i class='bx bxs-videos'></i></h2>
        </div>
        <ul>
            <?php while($anm = $anime->fetch_object()):?>
            <li>
                <div class="portada">
                    <a href="">                                                      
                        <p class="type"><?=$anm->type?></p> 
                        <div class="capa">                                 
                            <i class='bx bx-play-circle'></i>   
                        </div>
                        <img src="<?=base_URL?>asset/img/portadas/<?=$anm->image_path?>">                       
                        <h3><?=$anm->name?></h3>
                    </a>
                </div>                    
                <div class="portada_back">
                    <h2><?=$anm->name?></h2>
                    <h4 class="type"><?=$anm->type?></h4>
                    <span><i class='bx bxs-star' ></i><?=$anm->puntaje?></span>
                    <p><?=$anm->description?></p>
                    <a href="" class="type">VER ANIME</a>
                </div>
            </li>
            <?php endwhile;?>              
        </ul>
    </div>            
</div>
