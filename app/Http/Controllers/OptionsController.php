<?php

namespace App\Http\Controllers;

use App\Models\Option;

class OptionsController extends Controller
{


    public static function getLang()
    {
        $val = Option::where("option_key", "=", "lang")->value("option_value");

        return $val;
    }

    public function setLang($lang)
    {
        Option::where("option_key", "=", "lang")->update(['option_value' => $lang]);
        return redirect()->back();
    }

}
