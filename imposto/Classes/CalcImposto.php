<?php

require_once('Pessoa.php');

Class CalcImposto extends Pessoa
{
    private $juros;

    public function __construct(string $nome, float $renda)
    {
        $this->setNome($nome);
        $this->setRenda($renda);
    }

    public function CalcImposto()
    {
        $renda = $this->getRenda();

        if($renda < 1000)
        {
            return "Você não contribuira com imposto ";
        }
        elseif($renda > 1000 && $renda <= 1500)
        {
            return "Você contribuira com 10% de imposto ";
        }
        elseif($renda > 1500 && $renda <= 2000)
        {
            return "Você contribuira com 15% de imposto ";
        }
        elseif($renda > 2000)
        {
            return "Você contribuira com 20% de imposto ";
        }
    }
}


/*
$teste = new CalcImposto('Rodrigo', '1050.20');
echo $teste->CalcImposto();
*/