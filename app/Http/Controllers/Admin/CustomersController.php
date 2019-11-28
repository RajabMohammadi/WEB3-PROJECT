<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = User::paginate(5);
        return view("customer.list",compact("customers"));
    }

    public function update(Request $request)
    {

        $update = User::find($request->input("id"));

        $update->name = $request->input("name");
        $update->email = $request->input("email");
        $update->save();

        return route("customer.list");
    }

    public function create(Request $request)
    {
        $arr = User::create([
            "name"=>$request->input("name"),
            "email" =>$request->input("email"),
            "password" =>Hash::make($request->input("password")),
        ]);

        return route("customer.list");



        return route("customer.list");
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect('customer');
    }
}
