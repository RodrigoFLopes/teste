<?php 
 abstract Class operacoes{
     private $saldo;
     private static $conta;   

     public function __construct(int $conta)
     {
         $this->conta = $conta;
     }

     public function Deposita(string $valor): void
    {   
        if(is_numeric($valor)) {
               $this->saldo += $valor;
               echo "<br>Valor depositado :  R$$valor<br>";                       
        }else{
        echo "<br><b>Valor inválido<br>";       
        } 
    }

    public function Transferencia(string $valor, Operacoes $conta): void
    {   
        if(is_numeric($valor)) {
            if(($this->saldo - $valor) > 0){
               $this->saldo -= $valor;
               echo "<br>Valor transferido R$$valor <br>";                
               $conta->Deposita($valor);               
            }          
        }else{
        echo "<br>Valor inválido<br>";        
        }    
    }

    public function Sacar(string $valor): void
    {
        if(is_numeric($valor)) {
            if(($this->saldo -$valor - $this->Tarifa()) < 0){
                echo "<br>Saldo insuficiente<br>";     
            }
            elseif($valor > $this->Limite()){
                echo "<br>Valor inválido, Saque máximo é de R$".number_format($this->Limite(),2,',','.')."<br>";     
            }
            else{
                $this->saldo-=($valor+ $this->Tarifa());
                echo "<br>Valor sacado :  R$$valor  <br>";  
                
            }
        }else{
            echo "Valor inválido";  
        }   
        
    }
     public function recuperaSaldo(): void
    {
        echo "<br>Saldo : R$".$this->saldo."</b><br>";  
        
    }
    public function numeroConta(): string
    {   
       return $this->conta;
    }

    abstract protected function Tarifa(): float;
    abstract protected function Limite(): float;
 }
 
?>