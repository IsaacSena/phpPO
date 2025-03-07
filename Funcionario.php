<?php 
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;

    class Funcionario extends Pessoa{
        protected float $salario;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $salario)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->salario = $salario;
        }//Fim do constructor

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }//fim do get

        public function __set(string $variavel, string $dados):void
        {
            $this->variavel = $dados;
        }//fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                   "<br>O salário do Funcionário: R$ ".$this->salario;
        }//Fim do método

    }//fim da classe
?>
 
