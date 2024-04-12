<?php


use Sienekib\Mehael\Support\Session;

/*
|--------------------------------------------
| Auto carregamento das classes
|--------------------------------------------
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------
| Error management
|--------------------------------------------
*/
\Spatie\Ignition\Ignition::make()->register();


/*
|--------------------------------------------
| Responsável por todas as funcoes automáticas
|--------------------------------------------
*/
require __DIR__ . '/../src/Support/helpers.php';

/*
|--------------------------------------------
| Route management
|--------------------------------------------
*/
require __DIR__ . '/../routes/web.php';



// Carregando variáveis de ambiente

$env = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$env->load();

// Iniciar as sessions

Session::start();


// Startando a aplicação
app()->start();

