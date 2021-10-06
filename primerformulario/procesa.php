<?php

    function valida()
    {
        $respuesta = false;

        if (isset ($_GET ['numero1'])==true && isset ($_GET ['numero2']))
        {
            if (is_numeric($_GET ['numero1']) == true && (is_numeric($_GET ['numero2'])) == true)
            {
                $respuesta = true;
            }
        }

        return $respuesta;
    }    

    function suma($n1, $n2)
    {
       return $n1+$n2;
    }

    function resta($n1, $n2)
    {
       return $n1-$n2;
    }

    function multiplica($n1, $n2)
    {
       return $n1*$n2;
    }

    function divide($n1, $n2)
    {
       return $n1/$n2;
    }

    function pintar($texto)
    {
        echo $texto;
    }


    function proceso()
    {
        if (valida()==true)
        {
    
            $num1 = $_GET ['numero1'];
            $num2 = $_GET ['numero2'];

            if (isset($_GET['sumar']))
            {
                $resultado = suma($num1,$num2);
            }
            else
            {
                if (isset($_GET['restar']))
                {
                    $resultado = resta($num1,$num2);
                }
                else
                {
                    if (isset($_GET['multiplicar']))
                    {
                        $resultado = multiplica($num1,$num2);
                    }
                    else
                    {
                        if (isset($_GET['dividir']))
                        {
                            $resultado = divide($num1,$num2);
                        }
                    }    
                }    
            }
    
            return $resultado;

        }
        else
        {
            header("formulario.php");
        }
    }
  
    proceso();
