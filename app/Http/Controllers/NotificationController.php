<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Notification;


class NotificationController extends Controller
{
    public function getNotifications(Request $request)
    {
        $notifications = auth()->user()->notifications;

        return response()->json(['notifications' => $notifications]);
    }

    public function getNouvellesNotifications(Request $request)
    {
        $lastNotificationId = $request->input('last_notification_id', 0);

        // Ajoutez ici la logique pour récupérer les nouvelles notifications (par exemple, depuis la base de données)
        $nouvellesNotifications = auth()->user()->notifications()->where('id', '>', $lastNotificationId)->get();

        return response()->json(['nouvelles_notifications' => $nouvellesNotifications]);
    }
}



