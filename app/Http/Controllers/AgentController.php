<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function home()
    {
        return view('agent.home');
    }

    public function status()
    {
        return view('agent.status');
    }
}
