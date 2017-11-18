<?php

namespace App\Http\Controllers;

use App\Models\Quit;

class MainController extends Controller
{
    public function index()
    {
        $isQuit = Quit::thisWeek()->exists();
        $latestQuit = Quit::getLatest();
        $planned = Quit::planned()->count('id');

        return view('index', compact('isQuit', 'latestQuit', 'planned'));
    }
}
