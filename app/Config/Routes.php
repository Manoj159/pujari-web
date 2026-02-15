<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us/', 'Home::about_us');
$routes->get('blogs/', 'Home::blogs');
$routes->get('blog/(:segment)', 'Home::blog/$1');
$routes->get('booking-details/(:segment)', 'Home::booking_details/$1');
$routes->match(['get', 'post'], 'contact-us/', 'Home::contact_us');
$routes->get('disclaimers/', 'Home::disclaimers');
$routes->get('faqs/', 'Home::faqs');
$routes->get('our-pandits/', 'Home::our_pandits');
$routes->get('pandit-greater/', 'Home::pandit_greater');
$routes->get('privacy-policy/', 'Home::privacy_policy');
$routes->get('products/', 'Home::products');
$routes->get('pooja-list/', 'Home::pooja_list');
$routes->get('terms-and-conditions/', 'Home::terms');
$routes->get('bookingdetails/', 'Home::bookingdetails');


$routes->group('user', static function (RouteCollection $routes) {
    $routes->get('dashboard/', 'User::dashboard');
    $routes->get('profile/', 'User::profile');
    $routes->get('bookings/', 'User::bookings');
    $routes->get('booking/(:segment)', 'User::booking/$1');
    $routes->get('change-password/', 'User::change_password');
});
$routes->group('auth', ['filter' => 'adminLogin'], static function (RouteCollection $routes) {
    $routes->get('admin-login/', 'Admin\LoginController::login');
    $routes->post('admin-login/', 'Admin\LoginController::log_in');
});

$routes->group('admin', ['filter' => 'adminAuth'], static function (RouteCollection $routes) {
    $routes->get('/', 'Admin\AdminController::index');
    $routes->match(['get', 'post'], 'addpooja/', 'Admin\AdminController::addPooja');
    $routes->get('poojalist/', 'Admin\AdminController::poojaList');
    $routes->get('logout/', 'Admin\AdminController::logout');
    $routes->get('dashboard/', 'Admin\AdminController::dashboard');
    $routes->get('products/', 'Admin\AdminController::products');
    $routes->get('pandits/', 'Admin\AdminController::pandits');
    $routes->get('faqlist/', 'Admin\AdminController::faqlist');
    $routes->get('contacts/', 'Admin\AdminController::contacts');
    $routes->match(['get', 'post'], 'addproduct/', 'Admin\AdminController::addProduct');
    $routes->match(['get', 'post'], 'addpandit/', 'Admin\AdminController::addPandit');
    $routes->match(['get', 'post'], 'addfaq/', 'Admin\AdminController::addFaq');
    $routes->match(['get', 'post'], 'addblog/', 'Admin\AdminController::addblog');
    $routes->get('bloglist/', 'Admin\AdminController::bloglist');
    $routes->get('bookings/', 'Admin\AdminController::bookings');
    $routes->get('bookingdetails/', 'Admin\AdminController::bookingDetails');
    $routes->get('orderdetails/', 'Admin\AdminController::orderdetails');
    $routes->get('orderhistory/', 'Admin\AdminController::orderhistory');
    $routes->get('orders/', 'Admin\AdminController::orders');
});

// user routes

$routes->get('user/logout/', 'User::logout');
$routes->group('user-auth', ['filter' => 'userLogin'], static function (RouteCollection $routes) {
    $routes->get('login/', 'User::index');
    $routes->post('signup/', 'User::signup');
    $routes->post('login/', 'User::login');
});

$routes->group('user', ['filter' => 'userAuth'], static function (RouteCollection $routes) {
    $routes->get('dashboard/', 'User::dashboard');
    $routes->get('order-details/', 'User::order_details');
    $routes->get('profile/', 'User::profile');
});