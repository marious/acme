<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\Validation\Validator;
use Acme\Models\User;

class RegisterController extends BaseController
{


    public function showRegisterPage()
    {
        echo $this->blade->render('register');
    }


    public function postRegister()
    {
        $errors = [];

        $validation_data = [
            "first_name" => "min:3",
            "last_name" => "min:3",
            "email"     => 'email|equalTo:verify_email',
            'password' => 'min:3|equalTo:verify_password',
        ];
        // validate data
        $validator = new Validator();
        $errors = $validator->isValid($validation_data);

        if (sizeof($errors) > 0) {

            $_SESSION['msg'] = $errors;
            echo $this->blade->render('register');
            unset($_SESSION['msg']);
            exit;
        } else {
            // Save this data into a database
            $user = new User();
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();
            echo "Posted!";
        }
    }

    public function showLogin()
    {
        echo $this->blade->render('login');
    }

}