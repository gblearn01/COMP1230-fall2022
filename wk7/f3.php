<?php
include "config.php";
include LIB_PATH . "functions.php";

$option = get('option','list');

switch ($option) {
    case 'list':
        include MODEL_PATH . "list.php";
        include VIEW_PATH . 'list.phtml';
        break;
    case 'edit':{
        include MODEL_PATH . 'list-edit.php';
        include VIEW_PATH . 'list-view-phtml';
        break;
    }
    case 'save':{
        include MODEL_PATH . 'list-save.php';
        include VIEW_PATH . 'list-save.phtml';
        break;
    }
    default:
        # code...
        break;
}

