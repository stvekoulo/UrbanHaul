<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserStatus;

class AgentController extends Controller
{
    public function home()
    {
        $user = auth()->user();
        $status = $user->status ? $user->status->status : 'Non défini';
        $statusText = '';

        switch ($status) {

            case 'available':
                $statusText = 'Disponible';
                break;
            case 'not_available':
                $statusText = 'Non disponible';
                break;
            default:
                $statusText = 'Statut inconnu';
        }

        $lastUpdated = $user->status ? $user->status->updated_at->diffForHumans() : 'Non disponible';

        return view('agent.home')->with('statusText', $statusText)->with('user', $user)->with('lastUpdated', $lastUpdated);
    }

    public function status()
    {
        $user = auth()->user();
        $status = $user->status ? $user->status->status : 'Non défini';
        $statusText = '';

        switch ($status) {
            case 'available':
                $statusText = 'Disponible';
                break;
            case 'not_available':
                $statusText = 'Non disponible';
                break;
            default:
                $statusText = 'Statut inconnu';
        }
        return view('agent.status')->with('statusText', $statusText)->with('user', $user);
    }
}
