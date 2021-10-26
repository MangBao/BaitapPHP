<?php 
class Login extends controller{

    public $loginmodel;

    public function __construct()
    {
        $this->loginmodel = $this->model("LoginModel");

    }
    
    function redirect($url) {
        header("location: " . $url);
    }

    public function Index(){
        $this->view("login", [

        ]);
    }

    public function login(){
        
        $result_mess = false;

        if(isset($_POST["submit"])){

            $email = $_POST["email"];
            $password = $_POST["pass"];
            $password_input = $_POST["pass"];
            // email và password để trống thì in ra lỗi
            if(empty($_POST["email"]) || empty($_POST["pass"])){
                $this->view("login",
                [
                    "result"=>$result_mess,
                ]);
            }
            // mớ này email đúng mk đúng thì vào trang HomeAdmin index
            // email đúng mk sai thì in ra lỗi
            $result = $this->loginmodel->login($email);
            var_dump($this->loginmodel->login($email));
            if(mysqli_num_rows($result) > 0){
                if(mysqli_num_rows($result)){
                    while($row = mysqli_fetch_array($result)){
                        $manv = $row["manv"];
                        $honv = $row["honv"];
                        $tennv = $row["tennv"];
                        $email = $row["usernames"];
                        $password = $row["passwords"];
                        $hinhanh = $row["anh"];
                        // $IDNhom = $row["IDNhom"];
                    }
                    if($password_input == $password){
                        $_SESSION["user"] = [
                            "maNV" => $manv,
                            "hoNV" => $honv,
                            "tenNV" => $tennv,
                            "hinhAnh" => $hinhanh
                        ];
                        $this->redirectTo('Home', 'Index');
                    }
                    else{
                        $this->view("login",
                        [
                            "result"=>$result_mess,
                        ]);
                    }
                } 
            }
            else{
                $this->view("login",
                [
                    "result"=>$result_mess,
                ]);
            }
        }
    }
    
    public function logout(){
        unset($_SESSION["user"]);
        session_destroy();
        $this->view("login",
        [
        ]);
    }
}
?>