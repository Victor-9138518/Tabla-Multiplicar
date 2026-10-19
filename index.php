<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase 2</title>
</head>
<style>
    .contenedor{
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        justify-content: center;
    }
    .caja{
        border:4px solid white;
        margin:5px 3px;
        padding: 18px;
        color: white;
        background-color: black;
    }
    body{
        background-color: blue;
    }
    h2{
        color: white;
        text-align: center;
    }
</style>
<body>
    
    <h2>Tablas de multiplicar</h2>
    <div class="contenedor">
        <?php
        $count=1;
        while ($count<=10){
        ?>
        <div class="caja">
            <?php
            #for ($j=1;$j<=10;$j++){
                for ($i=1;$i<=10;$i++){
                $resultado=$count*$i;
                echo "{$count} x {$i} = {$resultado} <br>";
                }?>
    </div>
    <?php
    $count++;}
    ?>
</div>
    

</body>
</html>