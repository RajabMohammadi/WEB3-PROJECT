<?php

namespace App\Http\Controllers;

use App\Console\Commands\ChangeLocaleCommand;

use http\Env\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $lan = OptionsController::getLang();
        App::setLocale($lan);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function blank()
    {
        return "";

    }


    public function language(ChangeLocaleCommand $ChangeLocaleCommand)
    {
        $this->dispatch($ChangeLocaleCommand);
        return redirect()->back();
    }

    public function test(\Illuminate\Http\Request $request)
    {
        dd($request->input());
    }


}
