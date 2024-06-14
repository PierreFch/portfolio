<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        $realisations = Realisation::paginate(9);
        $realisations->transform(function ($realisation) {
            $realisation->slug = Str::slug($realisation->titre);
            return $realisation;
        });

        return view('home', compact('realisations'));
    }

    public function realisations()
    {
        return view('realisations', ['realisations' => Realisation::all()]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function mentions()
    {
        return view('mentions');
    }
}
