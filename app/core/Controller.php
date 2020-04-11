<?php
class Controller {

    protected $space = "hehe";

    public function kaya(){
       echo $this->space = "boogie";
    }

    public function model($model)
    {
        require_once '../app/models/' . $model .'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {

        $ext = '.php';
        $ext = $ext ? '.php' : '.phtml';
        $path = '../app/views/' . $view . $ext;
  if (file_exists($path)){
            require_once $path;
  }else{
      require_once $path = '../app/views/' . $view . '.phtml';
  }
       
        
    }
}