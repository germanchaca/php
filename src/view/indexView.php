<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Example PHP MySQLi POO MVC</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        <form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-5">
            <h3>Add user</h3>
            <hr/>
            Name: <input type="text" name="nombre" class="form-control"/>
            Surname: <input type="text" name="apellido" class="form-control"/>
            Email: <input type="text" name="email" class="form-control"/>
            Password: <input type="password" name="password" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Users</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) {?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->apellido; ?> -
                <?php echo $user->email; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Delete</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
		
		 <?php if(isset($allproducts) && count($allproducts)>=1) {?>
		<div class="col-lg-7">
            <h3>Products</h3>
            <hr/>
        </div>
		 <section class="col-lg-7 producto" style="height:400px;overflow-y:scroll;">
            <?php foreach($allproducts as $product) {?>
                <?php echo $product->id; ?> -
                <?php echo $product->nombre; ?> -
                <?php echo $product->precio; ?> -
                <?php echo $product->marca; ?>
                <hr/>
            <?php } ?>
        </section>
		 <?php } ?>
        <footer class="col-lg-12">
            <hr/>
           Example PHP MySQLi POO MVC - Germán Concilio  <?php echo  date("Y"); ?>
        </footer>
    </body>
</html>