<?php
    namespace PHP\Modelo;
   
    class Produto{
        
        private int $codigo;
        private string $descricao;
        private string $tamanho;
        private string $peso;

        public function __construct(int $codigo, string $descricao, string $tamanho, string $peso){

            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->tamanho = $tamanho;
            $this->peso = $peso;

        
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
               "<br>Descrição: ". $this->descricao.
               "<br>Tamanho: " . $this->tamanho.
               "<br>Peso: ". $this->peso;

             
    }//Fim do método

    }//Fim da classe Pessoa
?>