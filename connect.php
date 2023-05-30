<?php


require 'user.php';
require 'UserController.php';

$dbHost = 'localhost';
$dbName = 'ecommerce';
$dbUser = 'root';
$dbPass = "";

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    die();
}


$userController = new UserController($db);


$app->post('/UserController.php', function ($request, $response, $args) use ($userController) {
    $name = $request->getParam('name');
    $email = $request->getParam('email');
    $result = $userController->create($name, $email);
    return $response->getBody()->write($result);
});

// $app->get('/users', function ($request, $response, $args) use ($userController) {
//     $result = $userController->read();
//     return $response->getBody()->write($result);
// });

// $app->put('/users/{id}', function ($request, $response, $args) use ($userController) {
//     $id = $args['id'];
//     $name = $request->getParam('name');
//     $email = $request->getParam('email');
//     $result = $userController->update($id, $name, $email);
//     return $response->getBody()->write($result);
// });

// $app->delete('/users/{id}', function ($request, $response, $args) use ($userController) {
//     $id = $args['id'];
//     $result = $userController->delete($id);
//     return $response->getBody()->write($result);
// });

$app->run();

?>