<?php
class App
{
    //http://localhost:8888/sub_mvc/live/Home/SayHi/1/2/3
    protected $controller = "Login";
    protected $action = "GetView";
    protected $params = [];
    function __construct()
    {
        //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 4 )
        $arr = $this->UrlProcess();

        //Xu ly controller
        if (file_exists("./sub_mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once("./sub_mvc/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        //Xu li ACtion/Function
        if (isset($arr[1])) {
            if(method_exists($this->controller, $arr[1]))
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //Xu li Params
        $this->params = $arr?array_values($arr):[];

        //Gọi controller - action ra
        call_user_func_array([$this->controller, $this->action], $this->params);
        
    }



    //Lấy URL
    function UrlProcess()
    //Home/SayHi/1/2/3
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
