<?php

class Home extends Controller {



    public function index($name = '')
    {
       $user = $this->model('User');
       $user->name = $name;
       $this->kaya();
echo"<br><br>". $this->$space ."<br><br>";
       

    //    $use = new User();
    //    var_dump($use->hello());
       $user->hello();
       $this->view('home/index', ['name' => $user->name]);
      

    }

 
}

//composer dump-autoload