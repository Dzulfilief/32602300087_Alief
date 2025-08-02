<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function profil()
    {
        return view('profil');
    }

    public function skill()
    {
        return view('skill');
    }
}
