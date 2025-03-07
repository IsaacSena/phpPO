<?php
    namespace PHP\Modelo;

    class Endereco{
        
        private int $codigo;
        private string $logradouro;
        private string $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $cep;
        private string $pais;

        public function __construct(int $codigo, string $logradouro, string $numero, string $bairro, string $cidade, string $estado, string $cep, string $pais){

            $this->codigo = $codigo;
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->cep = $cep;
            $this->pais = $pais;
        
        }//fim do método

        //Método de acesso e modificadores
        //get e set

    public function __get(string $dados):mixed{
        return $this->$dados;
    }//Fim do método

    public function __set(string $variavel, string $dados):void{
        $this->variavel = $dados;
    }//Fim do método

    public function imprimir():string{
        return "<br>Código: ". $this->codigo.
               "<br>Logradouro: ". $this->logradouro.
               "<br>Numero: " . $this->numero.
               "<br>Bairro: ". $this->bairro.
               "<br>Cidade: ". $this->cidade.
               "<br>Estado: ". $this->estado.
               "<br>CEP: ". $this->cep.
               "<br>País: ". $this->pais;
    }//Fim do método

    }//Fim da classe Pessoa
?>