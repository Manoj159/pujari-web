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
$routes->get('contact-us/', 'Home::contact_us');
$routes->get('disclaimers/', 'Home::disclaimers');
$routes->get('faqs/', 'Home::faqs');
$routes->get('our-pandits/', 'Home::our_pandits');
$routes->get('pandit-greater/', 'Home::pandit_greater');
$routes->get('privacy-policy/', 'Home::privacy_policy');
$routes->get('products/', 'Home::products');
$routes->get('pooja-list/', 'Home::pooja_list');
$routes->get('terms-and-conditions/', 'Home::terms');