<?php

namespace helper;

class SuperAmin extends Admin
{
    public function getNav()
    {
        $nav= parent::getNav();
        $nav['Vartotojai']='users.php';
        return $nav;
    }

}