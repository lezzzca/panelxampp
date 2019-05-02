<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 16/3/2019
 * Time: 17:15
 */

require_once '../vendor/autoload.php';

use \Clases\ListaDeProyectos as ListaDeProyectosNamed;

$listaProyectos = ListaDeProyectosNamed::getInstance();
$listaProyectos->ordenar(ListaDeProyectosNamed::$MAS_NUEVO);

if($listaProyectos->size() == 0): ?>

<section>
    <div class="alert alert-warning" role="alert">
        <p class="text-center"><strong>Sin Proyectos actualemnte</strong> Intenta crear uno nuevo</p>
    </div>
</section>

<?php else: ?>

<section class="proyectos card m-4">
    <table class="table table-hover table-inverse  bg-white">
        <thead class="deep-blue-gradient text-white">
        <tr>
            <th>Proyecto</th>
            <th>Modificado</th>
            <th>Descripcion</th>
            <th class="text-center">Opciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($listaProyectos->getProyectos() as $proyecto):?>
            <tr>
                <td scope="row"><strong><?=$proyecto->getNombre()?></strong></td>
                <td><?=$proyecto->mostrarFecha()?></td>
                <td><?=$proyecto->getDescripcion()?></td>
                <td class="text-center">
                    <!--solo visible en pantallas grandes -->
                    <div class="d-none d-lg-block">

                        <a class="btn indigo lighten-1" href="http://localhost/proyectos/<?=$proyecto->getCarpeta()?>" target="_blank" role="button"><i
                                    class="far fa-folder-open text-white"></i></a>

                        <a name="proyecto_<?=$proyecto->getId?>" id="proyecto_<?=$proyecto->getId?>" class="btn default-color" href="#" role="button"><i class="far fa-edit text-white" ></i></a>

                        <a class="btn pink" data-toggle="modal" data-target="#borrarModal" data-whatever="<?=$proyecto->getNombre()?>" data-id="<?=$proyecto->getId()?>">
                            <i class="far fa-trash-alt text-white"></i>
                        </a>
                    </div>
                    <!-- solo se ve en pantallas chicas -->
                    <div class="d-lg-none">
                        <div class="dropdown dropleft">
                            <a class="fa-1x" id="triggerId"
                               data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="animated pulse dropdown-menu" aria-labelledby="triggerId">
                                <a class="dropdown-item abrir"  href="#">Abrir</a>
                                <a class="dropdown-item" href="#">Editar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#borrarModal" data-whatever="<?=$proyecto->getNombre()?>" data-id="<?=$proyecto->getId()?>" href="#">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</section>
<?php endif;?>


<!-- popup eliminar -->
<div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header pink text-white">
                <h3 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Eliminar Proyecto</h3>
                <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="text-center" id="modal-mensaje"></p>
            </div>
            <div class="modal-footer">
                <form method="post" action="php/eliminar.php">
                    <input type="hidden" class="form-control" id="recipient-name" name="carpeta">
                    <input type="hidden" class="form-control" id="id_carpeta_modal" name="id">
                    <button type="submit" class="btn btn-danger">Elmiminar</button>
                    <button type="button" class="btn info-color-dark" data-dismiss="modal">Cancelar</button>
                </form>
            </div>

        </div>
    </div>
</div>
