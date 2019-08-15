<?php

// Data available in the Front Page view

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function landingFields()
    {
        return (object) [
            'logo' => get_field('logo'),
            'name' => get_field('name'),
            'slug' => get_field('slug'),
            'slug_ending_1' => get_field('slug_ending_1'),
            'slug_ending_2' => get_field('slug_ending_2'),
            'slug_ending_3' => get_field('slug_ending_3'),
            'button_text' => get_field('button_text'),
            'bottom_text' => get_field('bottom_text')
        ];
    }

}
