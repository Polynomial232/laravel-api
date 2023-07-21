<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactsResource;
use App\Http\Resources\ContactsDetailResource;
use App\Models\Contacts;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contacts::all();
        return ContactsResource::collection($contacts);
    }
    public function findById($user_id){
        $contacts = Contacts::with('contactFrom')->findOrFail($user_id);
        return new ContactsDetailResource($contacts);
    }
}
