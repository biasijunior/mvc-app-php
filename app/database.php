<?php

class Model
{
   
    private $enviroment = 3;

    public function database() 
    {

        switch ($this->enviroment) {
            case 1:
                
                //PRODUCTION


                break;
            case 2:

                //TEST SERVER

                break;
            case 3:

                //LOCAL
                $servername = "localhost";
                $username = "testUser";
                $password = "testPass";
                $database = "testing";
                break;
        }

        // new mysqli($servername, $username, $password, $database)
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

        return $conn ;
    }
}

/*
*when wish to use illuminate Database 
*run composer require illuminate/database on root folder(./app) in this case
 use Illuminate\Database\Capsule\Manager as Capsule;
 $capsule = new Capsule();
 $capsule->addConnection([
     'drive' => 'mysqli',
     'host' => 'localhost',
     'username' => 'root',
     'database' => 'rewards',
     'charset' => 'utf8',
     'collation' => 'utf8_unicode_ci',
     'prefix' => ''
 ]);
 $capsule->bootEloquent();
*/