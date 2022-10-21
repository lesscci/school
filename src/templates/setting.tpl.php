<?php
    include 'partials/header.tpl.php';
    ?>

<?php
    include 'partials/nav.tpl.php';
?>

<h5><?=$title;?></h5>
<main>
    
    <form action="?url=settingaction" method="POST"> 
    <h3>Personalización</h3>

    <div class="pers">
    <label>Color fondo</label>
    <select name="colorfondo" class="buttonPer">
        <option value="blanco">Blanco</option>
        <option value="negro">Negro</option>
    </select>
    </div>
    <button class="buttons">Guardar</button>
    </form>
</main>
</body>
</html>