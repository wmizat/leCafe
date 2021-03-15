<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//require '../vendor/autoload.php';
require __DIR__.'/./vendor/autoload.php';
require __DIR__.'/./src/config/db.php';


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

// require __DIR__.'/create.php';
// require __DIR__.'/./src/routes/users.php';


$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];  
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/ali', function (Request $request, Response $response, array $args) {
    
    $response->getBody()->write("Hello, Welcome to Homepage. You can Proceed");
    return $response;
});

//home site
$app->get('/', function (Request $request, Response $reponse) {
    require 'indexhome.php';
    require 'footer.php';
});
$app->get('/aboutus', function (Request $request, Response $reponse) {
    require 'aboutus.php';
    require 'footer.php';
});


$app->get('/contactus', function (Request $request, Response $reponse) {
    require 'contactus.php';
    require 'footer.php';
});

$app->get('/managersignup', function (Request $request, Response $reponse) {
    require 'managersignup.php';
    require 'footer.php';
});


$app->get('/customerlogin', function (Request $request, Response $reponse) {
    require 'customerlogin.php';
    require 'footer.php';
});

$app->get('/customersignup', function (Request $request, Response $reponse) {
    require 'customersignup.php';
    require 'footer.php';
});

$app->get('/customer_registered_success', function (Request $request, Response $reponse) {
    require 'customer_registered_success.php';
    require 'footer.php';
});



$app->get('/managerlogin', function (Request $request, Response $reponse) {
    require 'managerlogin.php';
    require 'footer.php';
});

$app->get('/manager_registered_success', function (Request $request, Response $reponse) {
    require 'manager_registered_success.php';
    require 'footer.php';
});

$app->get('/myrestaurant', function (Request $request, Response $reponse) {
    require 'myrestaurant.php'; 
    require 'footer.php';
});
$app->get('/myrestaurant1', function (Request $request, Response $reponse) {
    require 'myrestaurant1.php'; 
    require 'footer.php';
});

$app->get('/login_m', function (Request $request, Response $reponse) {
    require 'login_m.php';
    //require 'footer.php';
});

$app->get('/login_u', function (Request $request, Response $reponse) {
    require 'login_u.php';
    //require 'footer.php';
});

$app->get('/logout_m', function (Request $request, Response $reponse) {
    require 'logout_m.php';
    //require 'footer.php';
});


$app->get('/logout_u', function (Request $request, Response $reponse) {
    require 'logout_u.php';
    //require 'footer.php';
});

$app->get('/foodlist', function (Request $request, Response $reponse) {
    require 'foodlist.php';
    require 'footer.php';
});

$app->get('/cart', function (Request $request, Response $reponse) {
    require 'cart.php';
    require 'footer.php';
});

$app->get('/view_food_items', function (Request $request, Response $reponse) {
    require 'view_food_items.php';
    require 'footer.php';
});

$app->get('/add_food_items', function (Request $request, Response $reponse) {
    require 'add_food_items.php';
    require 'footer.php';
});
$app->get('/add_food_items1', function (Request $request, Response $reponse) {
    require 'add_food_items1.php';
    require 'footer.php';
});

$app->get('/edit_food_items', function (Request $request, Response $reponse) {
    require 'edit_food_items.php';
    require 'footer.php';
});

$app->get('/delete_food_items', function (Request $request, Response $reponse) {
    require 'delete_food_items.php';
    require 'footer.php';
});
$app->get('/delete_food_items1', function (Request $request, Response $reponse) {
    require 'delete_food_items1.php';
    require 'footer.php';
});

$app->get('/payment', function (Request $request, Response $reponse) {
    require 'payment.php';
    require 'footer.php';
});

$app->get('/onlinepay', function (Request $request, Response $reponse) {
    require 'onlinepay.php';
    require 'footer.php';
});

$app->get('/COD', function (Request $request, Response $reponse) {
    require 'COD.php';
    require 'footer.php';
});

// $app->get('/COD', function (Request $request, Response $reponse) {
//     require 'COD.php';
// });

$app->get('/view_order_details', function (Request $request, Response $reponse) {
    require 'view_order_details.php';
});
// $app->get('/bill', function (Request $request, Response $reponse) {
//     require 'bill.php';
// });


//--------------------------------------------------------------------------
$app->post('/delete_food_items1', function (Request $request, Response $reponse) {
    require 'delete_food_items1.php';
});

$app->post('/add_food_items1', function (Request $request, Response $reponse) {
    require 'add_food_items1.php';
});

$app->post('/myrestaurant1', function (Request $request, Response $reponse) {
    require 'myrestaurant1.php'; 
});

$app->post('/contactus', function (Request $request, Response $reponse) {
    require 'contactus.php';
});

$app->post('/managerlogin', function (Request $request, Response $reponse) {
    require 'managerlogin.php';
});

$app->post('/manager_registered_success', function (Request $request, Response $reponse) {
    require 'manager_registered_success.php';
});

$app->post('/customerlogin', function (Request $request, Response $reponse) {
    require 'customerlogin.php';
});

$app->post('/customer_registered_success', function (Request $request, Response $reponse) {
    require 'customer_registered_success.php';
});

$app->post('/cart', function (Request $request, Response $reponse) {
    require 'cart.php';
});


// $app->post('/managersignup/success', function (Request $request, Response $reponse) {
//     require 'customer_registered_success.php';
// });



// $app->post('/myrestaurant', function (Request $request, Response $reponse) {
//     require 'myrestaurant.php';
// });


// $app->post('/login_m', function (Request $request, Response $reponse) {
//     require 'login_m.php';
// });


// $app->post('/login_u', function (Request $request, Response $reponse) {
//     require 'login_u.php';
// });


// $app->post('/logout_m', function (Request $request, Response $reponse) {
//     require 'logout_m.php';
// });


// $app->post('/logout_u', function (Request $request, Response $reponse) {
//     require 'logout_u.php';
// });



// $app->post('/foodlist', function (Request $request, Response $reponse) {
//     require 'foodlist.php';
// });


$app->run();