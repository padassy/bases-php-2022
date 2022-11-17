<?php


include "menu.php"; 


if(isset($_GET['pg'])){
  
      switch($_GET['pg']){
         case '':
        include_once 'acceuil.php';
          break; 
        case 'geo':
            include_once 'geographie.php';
            break;
        case 'hist':
            include_once 'histoire.php';
            break;
        case 'cult':
            include_once 'culture.php';
            break;
        case 'gal':
            include_once 'galerie.php';
            break;
         case 'spor':
                include_once 'sport.php';
                break;
        case 'form':
            include_once 'contact.php';
            break;
          
        default:
            include_once 'acceuil.php';
    }

}else {
    include_once 'acceuil.php';
}

?>