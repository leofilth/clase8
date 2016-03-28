<div class="container">
    <h1>Ejemplo de DataBase</h1>
    <h2>Usando result_array</h2>
    <ul>
        <?php
        foreach ($datos as $dato) {
            echo "<li>"."Nombre: ".$dato["nombre"]."</li>";
            echo "<li>"."Correo: ".$dato["correo"]."</li>";
            echo "<li>"."Telefono: ".$dato["tel"]."</li>";
            echo "<li>"."Fecha: ".$dato["fecha"]."</li>";
            echo "<br>";
        }

        ?>
    </ul>
    <p>Ñandú</p>
    <!--<a href="usando_where/2">Link</a>-->
    <div class="row">
        <label>Ingrese ID: </label><input class="form-control" type="text" id="texto" name="ide">
        <?php
        //$valor=set_value('ide');
        ?>
    </div>
    <button type="button" class="btn btn-default" onclick="location.href='<?php echo base_url() ?>database/usando_where/<?php echo $valor?>'">Link</button>
</div>