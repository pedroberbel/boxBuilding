   <html>
    <head>
        <title>Box Building - Entrar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- login/signin -->
        <link href="css/login-style.css" rel="stylesheet" id="bootstrap-css">
        <script src="js/login-fun.js"></script>
    <!--     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <!-- All the files that are required -->
    <!--     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
      -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- login -->

    </head>
        <body>

            <div class="container">
            <!-- Começa o menu superior-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">Box Building</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Início <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="aboutUs.html">Sobre Nós</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cliente Box Building
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="login.html">Entrar</a>
                      <a class="dropdown-item" href="#">Criar Conta</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="about.html">Saiba Mais</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                </div>
            </nav>

        <!-- Termina o menu superior-->

        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

        <!-- REGISTRATION FORM -->
        <div class="text-center" style="padding:50px 0">
        	<div class="logo">Confirmar Email</div>

        <p>Um email foi enviado para <?php echo $_GET["reg_email"]; ?>, insira o código de validação no campo abaixo: </p>

        <form action="signinPersonalInformation.html" >
          Código de Verificação:<br>
          <input type="text" name="validationCode" >
          <br>
          Reenviar
          <br><br>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>


        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11     -->


         <!-- Comaça o rodape ele se ajusta de acordo com o conteudo -->
        <div class="footer" data-spy="affix" data-offset-bottom="40">
            <div class="row-clearfix">
                <div class="col-md-12">
                    <p style="font-weight: bold; text-align: center; font-size: 14px;">&reg; 2018 Box Building</p>
                </div>
            </div>
        </div>
        <!-- Termina o rodape -->
        </body>
    </html>
