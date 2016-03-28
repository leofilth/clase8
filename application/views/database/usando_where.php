<div class="container">
    <h1>Ejemplo de DataBase</h1>
    <h2>Usando where</h2>
    <ul>
        <?php
            echo "<li>"."Nombre: ".$datos->nombre."</li>";
            echo "<li>"."Correo: ".$datos->correo."</li>";
            echo "<li>"."Telefono: ".$datos->tel."</li>";
            echo "<li>"."Fecha: ".$datos->fecha."</li>";
            echo "<br>";
        ?>
    </ul>
    <h1>My First JavaScript</h1>

    <button type="button"
            onclick="document.getElementById('demo').innerHTML = Date()">
        Click me to display Date and Time.</button>

    <p style="background-color: #003399" id="demo"></p>
    <p>Ñandú</p>
    <button type="button" class="btn btn-default" onclick="location.href='<?php echo base_url() ?>database/usando_result_array'">Volver</button>
</div>
<!--<div class="container">
    <iframe allowtransparency="true" width="485" height="402" src="//scratch.mit.edu/projects/embed/102952049/?autostart=false" frameborder="0" allowfullscreen>
        Scratch
    </iframe>
</div>
-->