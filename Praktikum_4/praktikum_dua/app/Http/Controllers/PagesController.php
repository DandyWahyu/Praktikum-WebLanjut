<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', ['active' => 'home']);
    }

    public function about()
    {
        return view('pages.about', ['active' => 'about']);
    }

    public function features()
    {
        $features = Feature::all();
        $data = [
            'active' => 'features',
            'features' => $features,
        ];
        return view('pages.features', $data);
    }

    public function contact()
    {
        return view('pages.contact', ['active' => 'contact']);
    }
}
