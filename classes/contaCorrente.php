<?php

class contaCorrente extends operacoes
{
    protected function Tarifa(): float
    {
        return 2.50;
    }
    protected function Limite(): float
    {
        return 600;
    }


}