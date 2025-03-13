<?php 
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarEndereco($conexao){
            try {

                $conn = $conexao->conectar();
                $sql = "select max(codigo) from endereco";
                $result = mysqli_query($conn, $sql);
                
                while ($dados = mysqli_fetch_Array($result)){
                        return $dados['max(codigo)'];
                    
                }//fi do while

            } catch (Exceotion $erro) {
                echo "<br><br>Algo deu errado!";
            }//fim do try
        }//fim do metodo

        function consultarCliente($conexao, string $cpf){
            try {
                $conn = $conexao->conectar();
                $sql = "select * from cliente inner join endereco on codigoEndereco = codigo and cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)) {
                    if ($dados['cpf']==$cpf) {
                        echo "<br>CPF : ".$dados['cpf'].
                             "<br>Nome : ".$dados['nome'].
                             "<br>Telefone : ".$dados['telefone'].
                             "<br>Preço Total : ".$dados['precoTotal'].
                             "<br>Logradouro : ".$dados['logradouro'].
                             "<br>Número : ".$dados['numero'].
                             "<br>Bairro : ".$dados['bairro'].
                             "<br>Cidade : ".$dados['cidade'].
                             "<br>Estado : ".$dados['estado'].
                             "<br>CEP : ".$dados['cep'].
                             "<br>País : ".$dados['pais'];


                             return;//Encerrar o processo
                    }//fim do if
                }//fim do while
            } catch (Exception $erro) {
                echo "Algo deu errado!".$erro;
            }//fim do try
        }//fim do metodo

        function consultarEnderecoPorCPF(Conexao $conectar, string $cpf){
            try {
                $conn = $conectar->conectar();
                $sql = "select codigoEndereco from cliente where cpf ='$cpf'";
                $result = mysqli_query($conn, $sql);
                while ($dados = mysqli_fetch_Array($result)){
                    return $dados['codigoEndereco'];//Encerrar  o programa
                }//fim do while
            } catch (Exception $erro) {
                echo "Algo deu errado!".$erro;
            }//fim do try
        }//fim do metodo

    }//fim da classe


?>