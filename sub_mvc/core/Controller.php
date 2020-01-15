<?php
 class Controller
 {
     public function model($model)
     {
        require_once "./sub_mvc/models/".$model.".php";
        return new $model;
     }

     public function view($view, $data=[])
     {
        require_once "./sub_mvc/views/".$view.".php";
     }
 }
?>