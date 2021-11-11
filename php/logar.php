<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/usuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/prestador.css">
    <title>Página Usuário</title>
</head>
<body >
    <div class="texto">
      <h1>LOGAR</h1>
    </div>
    <form action="prestador.php" name="menu" class="menu"  method="post">
        <div class="row mb-lg-3">
            <label  class="form-label" ></label>
            <input type="text" class="form-control mb-lg-1  " name="nome_do_comercio" placeholder="EMAIL" style="width: 300px; margin: 0% 25%">
        </div> 
        <div class="row mb-lg-3">
            <label  class="form-label" ></label>
            <input type="password" class="form-control mb-lg-1  " name="nome_do_comercio" placeholder="SENHA" style="width: 300px; margin: 0% 25%">
            <di class="texto-link">
                <a href="../php/formulario_T.php">Fazer um novo Cadastro</a>
                <a href="">esqueceu a senha ?</a>
            </di>
        </div> 
            <button type="submit" class="btn" style="width: 300px; margin: 0% 24%">ENTRAR</button>
        </div> 
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>