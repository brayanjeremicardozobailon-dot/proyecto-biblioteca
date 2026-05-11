<?php

include_once "controladores/UsuarioControlador.php";

$controlador = new UsuarioControlador();

if(isset($_GET['action'])){

    if($_GET['action'] == "crear"){

        $controlador->crear();

    }

    elseif($_GET['action'] == "editar"){

        $controlador->editar();

    }

    elseif($_GET['action'] == "eliminar"){

        $controlador->eliminar();

    }

}
else{

    $controlador->inicio();

}

?>