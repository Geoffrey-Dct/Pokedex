
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/utils/Database.php';
require __DIR__ . '/../app/Models/CoreModel.php';
require __DIR__ . '/../app/Models/Pokemon.php';
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/PokemonController.php';

$router =  new AltoRouter();


$router->setBasePath($_SERVER['BASE_URI']);
// Notre route pour la home
$router->map(
    // Méthode HTTP
    'GET',
    // La motif de l'URL (la route)
    '/',
    // Destination de la route = page que l'on souhaite afficher
    [
        'controller' => 'MainController',
        'method' => 'home',
    ],
    // Nom interne de la route pour générer l'url via $router->generate()
    'home'
);

$router->map(
    'GET',
    '/pokemon/[i:id]',
    [
        'controller' => 'PokemonController',
        'method' => 'read',
    ],
    'pokemon'
);


$match=$router->match();

// Si une route correspond
if ($match !== false) {
//dd($match['params']);

// Destination de la route
$destination = $match['target'];

// On détermine le contrôleur à appeler
$controllerName = $destination['controller'];
// On détermine la méthode à appeler
$methodName = $destination['method'];

// Dispatcher

// 1. On instancie notre contrôleur
$controller = new $controllerName(); // Par ex. new MainController()

// 2. On appelle la méthode souhaitée du contrôleur
$controller->$methodName($match['params']); // Par ex. ->home();
}
else {
    // On envoie une 404
    http_response_code(404);
    echo 'Page non trouvée.';
}