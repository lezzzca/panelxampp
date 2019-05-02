<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 14/3/2019
 * Time: 19:00
 */

 function ordenarMasNuevo($a,$b){
    if($a->getModificado() == $b->getModificado()):
        return 0;
    endif;
    if($a->getModificado() > $b->getModificado()):
        return -1;
    else:
        return 1;
    endif;
}

 function ordenarMasViejo($a,$b){
    if($a->getModificado() == $b->getModificado()):
        return 0;
    endif;
    if($a->getModificado() < $b->getModificado()):
        return -1;
    else:
        return 1;
    endif;
}

