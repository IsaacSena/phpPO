<?php 
    namespace  PHP\Modelo;
    require_once('Pessoa.php');//Chamar a classe
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    require_once('Compra.php');
    require_once('Veiculo.php');
    require_once('Produto.php');

    use PHP\Modelo\Pessoa;//Defina qual a classe
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Veiculo;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Produto;
    

    $endereco1 = new Endereco(1,'Avenida SenadorVergueiro',400,'Centro','São Bernado do campo','São Paulo','0129309','Brasil');

    $cliente1 = new Cliente('123456789','Issac','1196501213',$endereco1,1500);


    $veiculo1 = new Veiculo(1,'dwm100',$cliente1,'Vermelho','Civic',2024,'Honda');

    
    $produto1 = new Produto(1,'Automovel','3 metros','1 tonelada');
    

    $cliente2 = new Cliente('123123121','asdadsa','1231121313',$endereco1,780);
    

    $funcionario1 = new Funcionario('132131233','iassdas','123123',$endereco1,1320);

    

    echo "<br><br>".$cliente1->imprimir();
    echo "<br><br>".$cliente2->imprimir();
    echo "<br><br>".$funcionario1->imprimir();
    echo "<br><br>".$endereco1->imprimir();
    echo "<br><br>".$veiculo1->imprimir();

    
    


?>