<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Númerus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="projetogenesis.css" rel="stylesheet">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="NomeSistema">Númerus
          <small>Sistema Eclesiástico [Versão 0.1]</small>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>Forneça seu usuário e senha para acessar o sistema. Caso não tenha,
           procure o Departamento de Comunicação.
          <br>
          <br>Recursos disponíveis:
          <br>
        </p>
        <ol>
          <li>Cadastro de membros</li>
          <li>Emissão de anuário</li>
          <li>Relação de aniversariantes por mês</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <form class="form-signin" role="form" method="post" action="autenticacao.php">
          <h2 class="form-signin-heading" align="center">Identifique-se</h2>
          <input type="text" class="form-control" placeholder="Usuário ou Email" required="" name="login">
          <input type="password" class="form-control" placeholder="Senha" required="" name="senha">
          <hr>
          <button class="btn btn-lg btn-primary" type="submit">Entrar</button>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>




























</body>

</html>