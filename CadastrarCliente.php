<?php 
    namespace PHP\Modelo\Telas;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Inserir.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;

    $conexao = new Conexao();//acessa a classe conexao
    $inserir = new Inserir();//Inserir 
  ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cadastrar Cliente</title>
</head>
<body>



<h1>Cadastro de Clientes</h1><br>


<form class = "form-control form-control-sm" method="POST"  style = "width;50%;margin">
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">CPF</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "cpf">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome do Cliente</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "nome">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "telefone">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Preço Total</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "precoTotal">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Logradouro</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "logradouro">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Número da Casa</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "numero">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "bairro">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "cidade">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Estado</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "estado">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">CEP</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "cep">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">País</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name = "pais">
        </div> 
        <button type="submit" class="btn btn-primary">Cadastrar
      <?php 

          try {
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $precoTotal = $_POST['precoTotal'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $cep = $_POST['cep'];
            $pais = $_POST['pais'];

            $inserir->cadastrarEndereco($conexao, $logradouro, $numero, $bairro, $cidade, $estado, $cep, $pais);

            $inserir->cadastrarCliente($conexao, $cpf, $nome, $telefone,$consultar->consultarEndereco($conexao), $precoTotal);

          } catch (\Except $erro) {
            echo "Algo deu errado!<br><br>$erro";
          } 
      ?> 



  </button>
  </form>



</body>
</html>