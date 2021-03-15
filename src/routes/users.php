<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


$app = new \Slim\App;
// get the app's di-container
$c = $app->getContainer();
$c['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $methods) use ($c) {
        return $response->withStatus(405)
            ->withHeader('Allow', implode(', ', $methods))
            ->withHeader('Content-type', 'text/html')
            ->write('Method must be one of: ' . implode(', ', $methods));
    };
};

//include function.php file
//include __DIR__ . '/function.php.php';
//include __DIR__.'/./src/routes/function.php';


$app->get('/home', function (Request $request, Response $reponse) {
    echo 'home user working';
});

//get all users
$app->get('/api/users', function (Request $request, Response $reponse) {
    
    //echo 'api user working';  // Check server working

    $sql = "SELECT * FROM  users"; // DATABASES

    try {

        $db = new db();
        $pdo = $db->connect();
        //echo 'Database is working'; //check database connection

        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);

        $pdo = null;
        echo json_encode($users);

    } catch (\PDOException $e) {
        echo '{"msg": {"resp": ' . $e->getMessage() . '}}';
    } //catch the error

});

//get a single user
$app->get('/api/users/{id}', function (Request $request, Response $reponse, array $args) {

    $id = $request->getAttribute('id');
    
    //echo 'api user working';  // Check server working

    $sql = "SELECT * FROM users where id = $id";

    try {

        $db = new db();
        $pdo = $db->connect();
        //echo 'Database is working'; //check database connection

        $stmt = $pdo->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);

        $pdo = null; 
        echo json_encode($user);

    } catch (\PDOException $e) {
        echo '{"msg": {"resp": ' . $e->getMessage() . '}}';
    } //catch the error

});

// ----------------------------------------------------------------------------------

//add user site
$app->get('/add', function ($request, $response, $args) {
    
    require 'create.php';

});
$app->post('/add', function ($request, $response, $args) {
    
    require 'create.php';

});

//delete user site

//Method 1
$app->get('/del', function (Request $request, Response $reponse, array $args) {

    require 'delete.php';
}
);

//Method 2
// $app->get('/del?id', function (Request $request, Response $reponse, array $args) {

//     require 'delete.php';
// }
// );
// $app->delete('/del?id', function (Request $request, Response $reponse, array $args) {

//     require 'delete.php';
// }
// );

//edit user site
//Method 1
$app->get('/update', function (Request $request, Response $reponse, array $args) {

    require 'edit.php';
}
);
$app->post('/update', function ($request, $response, $args) {
    
    require 'edit.php';

});


  



  
  

//$app->run();