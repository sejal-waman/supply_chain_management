<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
use App\Controllers\home;

$routes->get('/', 'Home::index');

$routes->get('registration', 'MyController::registration');
$routes->get('registrationcompany', 'MyController::registrationcompany');
$routes->get('login', 'MyController::login');
$routes->get('login1', 'MyController::login1');
$routes->get('logincompany', 'MyController::logincompany');

$routes->get('supplier', 'MyController::supplier');

$routes->get('fruitsform', 'MyController::fruitsform');
$routes->get('vegetablesform', 'MyController::vegetablesform');
$routes->get('foodgrainsform', 'MyController::foodgrainsform');
$routes->get('spentgrainsform', 'MyController::spentgrainsform');
$routes->get('flowersform', 'MyController::flowersform');
//for fruit
$routes->get('fruitsform','FruitController::fruitsform');
$routes->get('/addfruitinsert','FruitController::addfruitinsert');
$routes->get('viewfruit','FruitController::viewfruit');
$routes->get('viewcompanyfruit','FruitController::viewcompanyfruit');
$routes->get('/delete-fruit/(:num)', 'FruitController::deletefruit/$1');
$routes->get('/editfruit/(:num)', 'FruitController::editfruit/$1');
$routes->post('/updatefruit', 'FruitController::updatefruit');
$routes->get('companyfruitform', 'FruitController::companyfruitform');
$routes->get('viewcompanybuyfruit', 'FruitController::viewcompanybuyfruit');  
$routes->get('buyfruitinsert', 'FruitController::buyfruitinsert');
$routes->get('displaybuyfruit','FruitController::displaybuyfruit');
// for grain
$routes->get('foodgrainsform','FruitController::foodgrain');
$routes->get('/addgraininsert','FruitController::addgraininsert');
$routes->get('viewgrain','FruitController::viewgrain');
$routes->get('viewcompanygrain','FruitController::viewcompanygrain');
$routes->get('/delete-grain/(:num)', 'FruitController::deletegrain/$1');
$routes->get('/editgrain/(:num)', 'FruitController::editgrain/$1');
$routes->post('/updategrain', 'FruitController::updategrain');
$routes->get('viewcompanybuygrain', 'FruitController::viewcompanybuygrain');
$routes->get('buygraininsert','FruitController::buygraininsert');
$routes->get('displaybuygrain','FruitController::displaybuygrain');
//for spent
$routes->get('spentgrain','FruitController::spentgrain');
$routes->get('/addspentgraininsert','FruitController::addspentgraininsert');
$routes->get('viewspent','FruitController::viewspent');
$routes->get('viewcompanyspentgrain','FruitController::viewcompanyspentgrain');
$routes->get('/delete-spent/(:num)', 'FruitController::deletespentgrain/$1');
$routes->get('/editspent/(:num)', 'FruitController::editspent/$1');
$routes->post('/updatespent', 'FruitController::updatespent');
$routes->get('viewcompanybuyspent','FruitController::viewcompanybuyspent');
$routes->get('buyspentinsert','FruitController::buyspentinsert');
$routes->get('displaybuyspent','FruitController::displaybuyspent');
//for vegetables
$routes->get('vegetable','FruitController::vegetable');
$routes->get('/vegetableinsert','FruitController::vegetableinsert');
$routes->get('viewvegetable','FruitController::viewvegetable');
$routes->get('viewcompanyvegetable','FruitController::viewcompanyvegetable');
$routes->get('/delete-vegetable/(:num)', 'FruitController::deletevegetable/$1');
$routes->get('/editvegetable/(:num)', 'FruitController::editvegetable/$1');
$routes->post('/updatevegetable', 'FruitController::updatevegetable');
$routes->get('viewcompanybuyvegetable','FruitController::viewcompanybuyvegetable');
$routes->get('/buyvegetableinsert','FruitController::buyvegetableinsert');
//$routes->get('viewcompanyvegetable','FruitController::viewcompanyflower');
$routes->get('/displaybuyvegetable','FruitController::displaybuyvegetable');

//for flowers
$routes->get('flower','FruitController::flower');
$routes->get('/addflowerinsert','FruitController::addflowerinsert');
$routes->get('viewflower','FruitController::viewflower');
$routes->get('viewcompanyflower','FruitController::viewcompanyflower');
$routes->get('/delete-flower/(:num)', 'FruitController::deleteflower/$1');
$routes->get('/editflower/(:num)', 'FruitController::editflower/$1');
$routes->post('/updateflower', 'FruitController::updateflower');
$routes->get('viewcompanybuyflower','FruitController::viewcompanybuyflower');
$routes->get('/buyflowerinsert','FruitController::buyflowerinsert');
//$routes->get('viewcompanyflower','FruitController::viewcompanyflower');
$routes->get('/displaybuyflower','FruitController::displaybuyflower');

//dashboard

$routes->get('/dashboard','MyController::dashboard');

$routes->get('company', 'MyController::company');
$routes->get('companyform', 'MyController::companyform');



$routes->get('curd', 'StudentController::Demo');
$routes->get('/supplierregisterinsert', 'LoginController::supplierregisterinsert');
$routes->get('checksupplierlogin', 'LoginController::checksupplierlogin');
$routes->get('/companyregisterinsert', 'LoginController::companyregisterinsert');
$routes->get('checkcompanylogin', 'LoginController::checkcompanylogin');

//validation
$routes->get('curd', 'LoginController::Demo');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
