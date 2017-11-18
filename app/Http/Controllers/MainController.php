<?php

namespace App\Http\Controllers;

use App\Models\Quit;

class MainController extends Controller
{
    public function index()
    {
        $viewData = [];

        if ($isQuit = Quit::didSomeoneThisWeek()) {
            $viewData = compact('isQuit');
        }

        if (!$isQuit) {
            $viewData = ['latestQuit' => Quit::getLatest()];
        }

        return view('index', $viewData);
    }
}
