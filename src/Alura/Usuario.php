<?php

namespace App\Alura;

class Usuario
{

    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {
        $this->setNomeSobrenome($nome);
    }

    private function setNomeSobrenome(string $nome)
    {

        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome inválido";
        } else {
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Sobrenome Inválido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
}
