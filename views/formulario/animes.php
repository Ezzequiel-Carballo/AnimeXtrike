
<div class="conteiner">
    <div class="list_left">
        <div class="form">
            <h2>Nuevo Anime</h2>
            <form action="<?=base_URL?>directorio/save_new" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Nombre"/>

                <label for="type">Tipo</label>
                <select name="type">
                    <option value=''></option>
                    <option value='Anime'>ANIME</option>
                    <option value='Pelicula'>PELICULA</option>
                    <option value='Ova'>OVA</option>
                </select>

                <label for="name">puntaje</label>
                <input type="number" name="puntaje" min="1" max="10" placeholder="Puntaje del anime">

                <label for="description">Descripcion</label>
                <textarea name="description" placeholder="Descripcion...."></textarea>
                        
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="img_direc"/>
                
                <input class="btn_form" type="submit" value="TERMINADO" >
            </form>
        </div>
        
    </div>

    <div class="list_right">
        <div class="form">
            <h2>Nuevos Capitulos</h2>
            <form action="<?=base_URL?>ver/save" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Nombre...."/>
                
                <label for="episode">Episodio</label>
                <input type="text" name="episode" placeholder="Episodio...."/>
                        
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" class="img_direc"/>

                <label for="video">Video</label>
                <input type="file" name="video" class="img_direc" accept=".mp4"/>
                
                <input class="btn_form" type="submit" value="TERMINADO" >
            </form>
        </div>
        </div>
        
</div>
