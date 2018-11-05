<?php

Class Pessoa
{
    private $nome;
    private $renda;

    public function setNome($nome)
    {
       return $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setRenda($renda)
    {
        $this->renda = $renda;
    }

    public function getRenda()
    {
        return $this->renda;

    }
}
