<?php

spl_autoload_register(function ($classe) {
    $prefixo = "App\\";

    $diretorio = __DIR__ . "/src/";

    if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
        return;
    }

    $classe_relativa = substr($classe, strlen($prefixo));

    $arquivo = $diretorio . str_replace('\\', DIRECTORY_SEPARATOR, $classe_relativa) . '.php';

    if (file_exists($arquivo)) {
        require $arquivo;
    }
});
