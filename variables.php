<html>
    <head>


    </head>
    <body>
        <?php
        $num1=5;
        $num2=5;
        $suma=$num1+$num2;
        echo("La suma es:".$suma);
        var_dump($suma);
        echo("<br>");
        $cadena="Hola mundo";
        $boll=false;
        echo($boll);
        var_dump($boll);
        echo("<br>");
        $colores=array("rojo","azul","Amarrillo");
        echo($colores[1]);

        echo("<br>");
        $verduras=array("verdura1"=>"cebolla","verdura2"=>"col","verdura3"=>"tomate");
        echo($verduras['verdura2']);
var_dump($verduras);
echo("<br>");
//array objetos
$frutasm1=(object)["nombre"=>'manzana',"tipo"=>'chilena',"color"=>'rojo'];
$frutasm2=(object)["nombre"=>'manzana',"tipo"=>'ecuatoriana',"color"=>'verde'];
echo("<br>");

function mostrarfrutas($fruta){
    echo("hola soy la fruta: $fruta->tipo");

}
mostrarfrutas($frutasm1);

        ?>
        </body>
</html>
