<?php


namespace Modules;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->isLogin();

    }
    public function isLogin()
    {
        dd(Auth::user());
            if (!$user = Auth::user()) {
                echo 'Please login first';
                die();
            }

    }
}
