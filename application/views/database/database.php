<div class="container">
    <h1>Ejemplo de DataBase</h1>
    <h2>Usando result</h2>
    <ul>
        <?php
        foreach ($datos as $dato) {
            echo "<li>"."Nombre: ".$dato->nombre."</li>";
            echo "<li>"."Correo: ".$dato->correo."</li>";
            echo "<li>"."Telefono: ".$dato->tel."</li>";
            echo "<li>"."Fecha: ".$dato->fecha."</li>";
            echo "<br>";
        }

        ?>
    </ul>
    <p>Ñandú</p>
</div>