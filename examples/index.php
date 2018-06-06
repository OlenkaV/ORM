<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Orm\Adapter;
use Orm\Mapping\Driver\Annotation;





use Orm\DB\Driver\MySQL;

$driver = new MySQL('localhost', 'test_orm', 'root', '');
$orm = new Adapter($driver, new Annotation());

/*
use Orm\DB\Driver\MongoDB;
$orm = new Adapter(new MongoDB('localhost', 'test_orm'), new Annotation());
*/

/*
use Orm\DB\Driver\PostgreSQL;
$orm = new Adapter(new PostgreSQL('localhost', 'test_orm', 'root', ''), new Annotation()));
*/


use \Model\Users;
// INSERT
///*
$user = new Users();
$user->name = 'Username958689';
$user->mail = 'username84596244@mail.com';
$user->password = sha1('password');
$user->tel = '003333025';
$orm->save($user);
 
//*/
 
 /* UPDATE 
$user = new Users();
$user->id = 1;
$user = $orm->get($user);

$user->mail = 'username111@mail.com';
$orm->save($user);
*/
 
 
/* Кількість користувачів в базі

$user = new Users();
echo $orm->count($user); 

*/


/*
$user = new Users();
$user->setId(1);
print_r($orm->get($user));
*/


use Model\Pages;
/*
$page = new Pages;
$page->name = 'Home page';
$page->description = 'My first page';
$orm->save($page);
*/


//print_r($orm->getAll($user));
