<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>teste-do-mercado</title>
    <?php
         include("connection.php");
    ?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel=”stylesheet” type=”text/css” href=/style.css” />

</head>

  <body class"well well-sm">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Início</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <a href="pesquisaMercadoria.php">Mercadorias</a>
                    </li>
                    <li>
                        <a href="cadastraMercadoria.php">Cadastrar</a>
                    </li>
                    <li>
                        <a href="login.php">Entrar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="container droppedHover">
                        <form class="form-signin" role="form" action="login.php">
                            <h2 class="form-signin-heading" contenteditable="false" style="text-align:center; ">Login</h2>

                            <input id="login" name="login" type="text" class="form-control" placeholder="Login" required="" autofocus="" contenteditable="false">
                            <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha" required="" contenteditable="false">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        </form>
                        <br>
                        <form class="form-signin" role="form" action="cadastraUsuario.php" name="signup" method="POST">
                            <h2 class="form-signin-heading" contenteditable="false" style="text-align:center; ">Quer se cadastrar?</h2>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Clique aqui</button>
                        </form>
                    </div>
                </div>
		    </div>
		</div>
	</body>
</html>
