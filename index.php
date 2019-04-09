<?php
include 'contato_crud_class.php';

$contato = new Contato();

$escluir =$contato->excluir('danilo_morgado@hotmail.com');
if($escluir == true){
    echo "contato excluido com sucesso!! ";
}
else{
    echo "nao excluio p contato ";
}
?>