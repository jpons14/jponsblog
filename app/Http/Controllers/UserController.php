<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    public function index()
    {
        return 'index';
    }

    public function getUsers()
    {
        $users = DB::table('users')->paginate(1)->where('nombre', 'josep');
        return response()->json(['cdrs' => $users]);
    }
}
