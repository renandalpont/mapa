<!doctype html>
<html lang="en">

<head>
 
  
  <?php include_once 'sendmail.php'; ?>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>MAPA | Mãos Que Ajudam, Patinhas que Agradecem</title>
  <style>
    section, .mensagem-alerta{
    text-align: center; 
    }
   form{
   max-width: 800px;
   padding-top: 30px;
   display: block;
   margin: 0 auto;
   }
   .mensagem-alerta{
   max-width: 500px;
   margin: 20px auto;
   }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="Logo MAPA" width="30" height="24"
            class="d-inline-block align-text-top m-1 rounded-circle">
        </a>
        <h1 class="h5 text-red">MAPA | Mãos Que Ajudam, Patinhas que Agradecem</h1>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Ajude</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1400x500/?dog" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?cat" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?pet" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-dark text-center m-4">
          <h2>Sobre a ONG</h2>
        </div>
      </div>
      <div class="row">
        <div class="col sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://source.unsplash.com/500x700/?pet" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://source.unsplash.com/500x700/?pet" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://source.unsplash.com/500x700/?pet" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://source.unsplash.com/500x700/?pet" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <h1 class="mt-5">Formulário de Contato</h1>
        <br>
        <form class="form-horizontal center" action="index.php#formulario" method="post" role="form" data-toggle="validator">
          <div class="form-group">
            <label class="control-label col-sm-3">Nome*:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="seu nome" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Email*:</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="email" id="email" value=""
                placeholder="exemplo@dominio.com" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Telefone*:</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000"
                required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Assunto*:</label>
            <div class="col-sm-9">
              <select class="form-control" name="assunto" required>
                <option value="" selected="selected" disabled="disabled"> -- Escolha um assunto --</option>
                <option value="adocao">Adoção</option>
                <option value="voluntário">Voluntário</option>
                <option value="doacao">Doação</option>
                <option value="informacoes">Informações</option>
              </select>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Mensagem*:</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="exampleTextarea" rows="6" id="mensagem" name="mensagem"
                placeholder="sua mensagem" required></textarea>
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 text-right">
              <input class="btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
              <a name="formulario"></a>
              <div class="mensagem-alerta">
                <?php echo $msg ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>