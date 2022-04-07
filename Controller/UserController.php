<?php
require_once('Controller/Controller.php');
require_once('Models/User.php');

class UserController extends Controller
{
    public function login($error = null)
    {
        require_once('Views/forms/login.php');
    }

    public function check()
    {
        //check $_POST, get username , password from $_POST
        if ($_POST){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $model = new User();
            $result = $model->check($username, $password);
            //Helper::vdump($result);

            if (!$result){
                $this->login('Falsche Login-Daten!');
            }
            else{
                //Login war erfolgreich
                // hier wird die $_SESSION selber benannt als assoc. array :
                $_SESSION['auth'] = [
                    'id'    =>  $result['id'],
                    'username'  =>  $result['username'],
                ];
                //weiterleiten auf Homepage
                header('Location: /');
            }
        }

    }

    public function logout()
    {
        unset($_SESSION['auth']);
        header('Location: /');
    }
}
?>