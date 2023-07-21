<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Resources\UsersResource;
use App\Http\Resources\UsersDetailResource;



class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return UsersResource::collection($users);
    }
    public function findById($id)
    {
        $users = Users::with('contacts')->findOrFail($id);
        return new UsersDetailResource($users);
    }
}