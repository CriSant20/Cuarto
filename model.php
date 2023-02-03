<?php
class EnlacesPaginas{
    public static function enlacesPaginamodel($enlacesModel){
        if($enlacesModel=="informacion" ||
         $enlacesModel=="contactanos" ||
          $enlacesModel=="servicios" ||
           $enlacesModel=="inicio")
            {
            $module="views/modules/".$enlacesModel.".php";
           }else{
            $module="views/modules/inicio.php";

           }
           return $module;
    }
}
?>