<?php
require_once '../admin/conecta.php';
$PDO = conecta_bd();
?>
<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JFK Turismos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--css-->
        <link rel="stylesheet" href="css3/estilos.css">
    </head>
    <body>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <!--Cabeçalho-->
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">JFK Turismo</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="tela1.php">Home <span class="sr-only">(Página atual)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                      </a>
                      <?php    
                      /**Consulta para guardar o total de registro e outra para todos os registros */
                      $stmt_count = $PDO->prepare("SELECT COUNT(*) AS total FROM categoria");
                      $stmt_count->execute();
                      $stmt = $PDO->prepare("SELECT * FROM categoria;");
                      $stmt->execute();
                      $total = $stmt_count->fetchColumn();
                      /**caso total de registro seja maior que zero criamos a tabela */
                      if ($total >0): ?>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <?php while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)):?>               
                            <a class="dropdown-item" href="#<?php echo $resultado['cod']?>"><?php echo $resultado['nome']?></a>
                      <?php endwhile; ?>
                      </div>
                      <?php else: ?>
                      <p>Não há Pacote cadastrado</p>
                      <?php endif; ?>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../admin/login.php">Minha Conta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>   
                </ul>
              </div>
            </nav>
      </header>
        <section>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/cb3.jpg" alt="Primeiro Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/cb4.jpg" alt="Segundo Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/cb5.jpg" alt="Terceiro Slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
        </section>
        <!--Pacotes de viagem-->
        <section>
            <div class="container">
                <h2 id="titulo">PACOTES DE VIAJEM</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6 pacote"><a href="tela2.php" class="pacote" >
                    <img src="img/caribe.jpg" class="img-responsive">
                     Pacote Caribe</a>
                    </div>
                    <div class="col-md-4 col-sm-6 pacote"><a href="a" class="pacote" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    <img src="img/disney.jpg" class="img-responsive">
                        Pacote Disney</a>
                    </div>
                    <div class="col-md-4 col-sm-6 pacote"><a href="a" class="pacote" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        <img src="img/franca.jpg" class="img-responsive">
                        Pacote França</a>
                    </div>
                    <div class="col-md-4 col-sm-6 pacote"><a href="a" class="pacote" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        <img src="img/italia.jpg" class="img-responsive">
                        Pacote Itália</a>
                    </div>
                    <div class="col-md-4 col-sm-6 pacote"><a href="a" class="pacote" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        <img src="img/noruega.jpg" class="img-responsive">
                        Pacote Noruega</a>
                    </div>
                    <div class="col-md-4 col-sm-6 pacote"><a href="a" class="pacote" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        <img src="img/panama.jpg" class="img-responsive">
                        Pacote Panama</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <footer>
            JFK
        </footer>
        <!--MODAL dos pacotes-->
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-primary">Salvar mudanças</button>
                </div>
              </div>
            </div>
          </div>
        <script src="" async defer></script>
    </body>
</html>
