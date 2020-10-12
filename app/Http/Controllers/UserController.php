<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Resources\Users as UserResource;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        return UserResource::collection(Users::where('name', 'like', $search . '%')->paginate());
    }
}
