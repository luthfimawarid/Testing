<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->get();
        $unreadNotificationCount = Notification::where('read', false)->count();

        return view('notification.notification', compact('notifications', 'unreadNotificationCount'));
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['read' => true]);

        return redirect()->route('notifications.index');
    }
}
