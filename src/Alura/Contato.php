<?php

namespace App\Alura;

class Contato
{

    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "Usuario Inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }
}
