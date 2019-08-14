<?php

// Data available in the Front Page view

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function randomText()
    {
        return 'Howdy from the Controller';
    }
}
