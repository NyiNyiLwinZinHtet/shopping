<?php
// phpcs:ignore
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// phpcs:ignore
require dirname(__DIR__).'/vendor/autoload.php';


use App\Models\User;


// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(E_ALL);

// require_once dirname(__DIR__).'/app/Models/Model.php';
$id = 1;
$timezone = new DateTimeZone('UTC');
$created_at = new DateTime('NOW', $timezone);
$updated_at = new DateTime('NOW', $timezone);

$user = new User(
    'name',
    'password',
    'mail@gmail.com',
    $created_at,
    $updated_at
);
print_r($user);
