<?php 

include_once('Nomes.php');


// Sobrescrendo um método que não faz nada;
class C extends A
{
    public function getNome()
    {
        // echo 'Meu nome é A';
    }
}

$objeto3 = new C;

print(imprimeNome($objeto3));






