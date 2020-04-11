<?php

class Home extends Controller
{



    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;
        $this->kaya();
        $this->view('home/hello');
        $this->view('home/index', ['name' => $user->name]);
    }

}

//composer dump-autoload
