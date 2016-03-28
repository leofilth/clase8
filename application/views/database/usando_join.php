<div class="container">
    <h1>Ejemplo de DataBase</h1>
    <h2>Usando Join</h2>
    <ul>
        <?php
        foreach ($datos as $dato) {
            echo "<li>"."Nombre: ".$dato->nombre."</li>";
            echo "<li>"."Correo: ".$dato->correo."</li>";
            echo "<li>"."Telefono: ".$dato->telefono."</li>";
            echo "<li>"."Fecha: ".$dato->fecha."</li>";
            echo "<li>"."Calle: ".$dato->calle."</li>";
            echo "<li>"."Direccion: ".$dato->direccion."</li>";
            echo "<li>"."Ciudad: ".$dato->ciudad."</li>";
            echo "<br>";
        }

        ?>
    </ul>
    <p>Ñandú</p>
    <!--<a href="usando_where/2">Link</a>-->
</div>