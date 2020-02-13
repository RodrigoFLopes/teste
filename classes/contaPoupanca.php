<?php
class contaPoupanca extends operacoes
{
    protected function Tarifa(): float
    {
        return 0.80;
    }
    protected function Limite(): float
    {
        return 1000;
    }
}
