<div class="conteiner">
    <div class="form">
        <h1>Registrate</h1>
        
        <form action="<?=base_URL?>home/save" method="POST" autocomplete="off">
            <label for="name">Nombre</label>
            <input type="name" name="name" placeholder="Escribi tu nombre...">
            
            <label for="surname">Apellido</label>
            <input type="surname" name="surname" placeholder="Escribi tu apellido...">
            
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Ingresa tu correo...">
            
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Ingresa una contraseña...">
            
            <input class="btn_form" type="submit" value="Registrarse" >
        </form>
    </div>
</div>
