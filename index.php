<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('SERVERNAME', 'sql2.njit.edu');
define('USERNAME','ci38');
define('PASSWORD','chhavi12345');
define('DBNAME','ci38');

include 'model.php';
include 'database.php';
include 'collection.php';
include "account.php";
include "todos.php";
include "todo.php";
include 'accounts.php';
include "htmlTable.php";


echo "<h1><u> This is PHP ActiveRecord Assignment </u></h1>";
echo "<h1>Select All Record</h1>";
echo "<h2> Select all Records from accounts</h2>";
$obj = new Account;
$obj->save();
$obj =  accounts::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h2> Select all Records from todos</h2>";
$obj = new todo;
$obj->save();
$obj =  todos::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h1> Select One Record</h1>";
echo "<h2> Select one record from accounts</h2>";
echo "<h3> Record selected having id=7 from accounts </h3><br>";
$obj =  accounts::create();
$result = $obj -> findOne(7);
htmlTable::createTable($result);


echo "<h2> Select One Record from todos</h2>";
echo "<h3> Record selected having id=3 from todos </h3><br>";
$obj =  todos::create();
$result = $obj -> findOne(3);
htmlTable::createTable($result);


echo "<h1> Insert Record</h1>";
echo "<h2> Insert new Record in table accounts</h2>";
//echo "Inserted new Record<br><br>";
$obj = new Account;
$obj->save();
$obj =  accounts::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h2> Insert new Record in table todos</h2>";
//echo "Inserted new Record<br><br>";
$obj = new todo;
$obj->save();
$obj =  todos::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h1> Update Record</h1>";
echo "<h2> Update record in table accounts</h2>";
echo "updated lname = woodsen where id=6<br><br>";
$obj = new Account;
$obj->save();
$obj =  accounts::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h2> Update record in table todos</h2>";
echo "updated messgae = code where id=3 <br><br>";
$obj = new todo;
$obj->save();
$obj =  todos::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h1> Delete Record</h1>";
echo "<h2> Delete record in table accounts</h2>";
echo "Deleted record where id=9 from accounts<br>";
$obj = new account;
$obj->save();
echo '<br>';
$obj->delete();
$obj =  accounts::create();
$result = $obj -> findAll();
htmlTable::createTable($result);


echo "<h2> Delete record in table todos</h2>";
echo "Deleted record where id=5 from todos<br>";
$obj = new todo;
$obj->save();
echo '<br>';
$obj->delete();
$obj =  todos::create();
$result = $obj -> findAll();
htmlTable::createTable($result);
?>