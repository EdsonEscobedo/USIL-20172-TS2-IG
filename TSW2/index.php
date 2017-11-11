<?php
include 'config.php';
$query_productos = "SELECT * FROM productos ORDER BY codigo DESC";
$resultado_productos = $bd->query($query_productos);
?>
<!doctype html>
<html>
    <head>
        <title>Principal / <?php echo $configuracion["nombre"] ?></title>
        <link href="css/estilo.css" rel="stylesheet" />
    </head>
    <body>
        <?php include 'plantillas/header.php' ?>
        <?php include 'plantillas/nav.php' ?>
        <section>       
            <h1 class="centrado">Últimos juegos</h1>
            
            <?php while($producto = $resultado_productos->fetch()) { ?>
            
            <div class="item">
                <h3><?php echo $producto["nombreProducto"] ?></h3>
                
                <img src="<?php echo $producto["imagen"] ?>" width="250" />
                <br />
                <span>S/ <?php echo $producto["precio"] ?></span>
                <p><?php echo $producto["descripcion"] ?></p>
                <p><?php $producto["valoracion"] ?></p>
            </div>
            <?php } ?>
            
            <div class="clear"></div>
            
        </section>
        <?php include 'plantillas/footer.php' ?>
    </body>
</html>