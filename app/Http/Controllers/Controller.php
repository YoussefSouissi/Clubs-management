<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\club;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function showClubs()
    {
        $clubsData = club::all();
        return view('ClubsPage.show', compact('clubsData'));
    }
}