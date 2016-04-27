<?php
$numero1=86;
$numero2=78;
$numero3=12;

//condicionales( comparación )
//tabla de la verdad, con la famosa taxonomía
    
    /*condición simple*/
    if( $numero1>$numero2 or  $numero3==12 )
    {
        echo "se cumple la condición";
    }else
    {
        echo "no se cumple";
    }
    /*
    el uso de exit es para detener la ejecución del script
    */
    //exit;
    die(" <hr /> acá hemos detenido el script ");
    /*
    condición múltile
    */
    if($numero1 > $numero2)
    {
        echo "se cumple la primera";
    }elseif($numero1<$numero2)
    {
        
    }elseif($numero1==$numero2)
    {
        
    }else
    {
        
    }
    //control de flujo
    /*
        en case sea
            $numero1
                
                case 34:
                    haz esto
                    
                case 56
                    haz este otro 
                defecto
                    haz esto en el caso de que no se cumpla ninguna       
    */
    /*
    recuerden hacer identación de su código
    */
    switch($numero1)
    {
       case '34':
            echo "la primera";
       break; 
       case '78':
            echo "la segundas";
       break;
       case '69':
            echo "la tercera";
       break;
       default:
            echo "no es ninguno";
       break;
       
       
    }


