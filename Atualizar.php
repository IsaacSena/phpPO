<?php 
    namespace PHP\Modelo\DAO;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Consultar.php');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        function atualizarCliente(Conexao $conexao, string $campo, string $novoDado, string $cpf){
            try {
                $codigo = "";//instanciar a variavel
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                if ($campo == "nome" or $campo == "telefone") {
                    $sql = "update cliente set $campo = '$novoDado' where cpf = '$cpf'";
                }else {
                    $codigo = $consultar->consultarEnderecoPorCPF($conexao, $cpf);
                    $sql = "update endereco set $campo = '$novoDado' where codigo = '$codigo'";
                }//fim do if
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Atualizado com sucesso!";
                }else {
                    echo "Não atualizado!";
                }//fim do if
            } catch (Exception $erro) {
                echo "Algo deu errado!<br><br>$erro";
            }//fim do try
        }//fim da funçao
    }//fim da classe
















?>