<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as Bcontroller;


class Controller extends Bcontroller
{
    use AuthorizesRequests, ValidatesRequests;
}
