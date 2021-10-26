<?php
class Home extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION["user"])){
            $this->redirectTo("Login", "Index");
        }
    }

    public function Index(){
        //Gọi view
        $this->view("layoutAdmin", 
        [
            "page"=>"index"
        ]
        );
    }
}
?>