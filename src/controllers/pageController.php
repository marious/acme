<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class pageController extends BaseController
{

    public function showHomePage()
    {
        echo $this->blade->render('home', array('test' => 'Hello, again'));
    }

}
