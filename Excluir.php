<?php 
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirCliente(Conexao $conexao, string $cpf){
            try {
                $conn = $conexao->conectar();
                $sql = "delete from cliente where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if ($result) {
                    echo "Excluído com sucesso";
                }else {
                    echo "Não excluido"
                }
            } catch (Exception $erro) {
                echo
            }//fim do catch
        }//fim da function
    }//fim da classe







?>