<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'procesa.php';?>
</head>
<body>
    

    <form action="formulario.php" method="get">

        <label for="numero1">Introduce el primer numero</label>
        <input type="text" name="numero1" id="numero1"><br>

        <label for="numero2">Introduce el segundo numero</label>
        <input type="text" name="numero2" id="numero2"><br>

        <input type="submit" name="sumar" value="Sumar">
        <input type="submit" name="restar" value="Restar">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">

        <br><br>

        <?php pintar(proceso());?>

    </form>

    
    
</body>
</html>