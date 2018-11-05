<?php

function cardapio($opcao)
{
    switch($opcao)
    {
        case(1):
            echo 'Arroz';
            break;
        case(2):
            echo 'Macarrão';
            break;
        case(3):
            echo 'Salada';
            break;
        case(4):
            echo 'Lanche';
            break;
        case(5):
            echo 'Feijoada';
            break;
        case(6):
            echo 'Lasanha';
            break;
    }

}

cardapio(2);