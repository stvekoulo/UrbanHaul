<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserStatus;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;



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

    public function toggleStatus(Request $request)
    {
        $user = auth()->user();

        if (!$this->profilIsComplete($user)) {
            return redirect()->route('profil.edit')->with('warning', 'Veuillez compléter vos informations de profil avant de changer votre statut.');
        }

        if ($user->status) {
            // Mettre à jour le statut de l'utilisateur
            $newStatus = $user->status->status === 'available' ? 'not_available' : 'available';
            $user->status->update(['status' => $newStatus]);
        } else {
            // Créer un nouveau statut pour l'utilisateur
            $user->status()->create(['status' => 'available']);
        }

        // Rediriger l'utilisateur
        return redirect()->back()->with('success', 'Statut mis à jour avec succès');

    }

    private function profilIsComplete($user)
    {
        return !empty($user->phone_number) && !empty($user->whatsapp_link) && !empty($user->national_id) && !empty($user->photo);
    }




 



    
   
}
    
   