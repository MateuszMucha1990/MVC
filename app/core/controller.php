<?php

class Controller{

    protected function view($view,$data = [])
    {
        if (file_exists("../app/views/" . $view . ".php")) 
        {  //jesli plik istnieje to
            include "../app/views/" . $view . ".php";
        }else{
            include "../app/views/404.php";
        }
    }


    protected function loadModel($model)
    {
        if (file_exists("../app/model/" . $model . ".php")) 
        {  
            include "../app/model/" . $model . ".php";
           return $model = new $model();   //gdy plik istnieje to inicjujemy
        }
        return false;
    }
}