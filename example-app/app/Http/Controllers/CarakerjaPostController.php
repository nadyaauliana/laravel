<?php

namespace App\Http\Controllers;

use App\Models\CarakerjaPost;
use App\Models\Faqpost;
use App\Models\WahanaPost;
use App\Models\WahanatersediaPost;
use Illuminate\Http\Request;

class CarakerjaPostController extends Controller
{
     public function index()
    {
        $CarakerjaPost=CarakerjaPost::all();
        $WahanatersediaPost=WahanatersediaPost::all();
        $FaqPost=Faqpost::all();
        return view('index', compact(['CarakerjaPost', 'WahanatersediaPost', 'FaqPost']));
    }
}
