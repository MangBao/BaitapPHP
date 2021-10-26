<?php
class Controller{

    // class Controller có nv nối giữa các model trong foler models
    // vs các controller trong folder controllers
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    
    public function redirectTo($controller, $action, $params = []) {
        $url = 'Location: '.BASE.''.$controller.'/'.$action;

        if(count($params) > 0) {
            foreach ($params as $param) {
                $url .= '/'.$param;
            }
        }
        header($url);
    }
}
?>