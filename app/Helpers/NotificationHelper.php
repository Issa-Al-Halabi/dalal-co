<?php

namespace App\Helpers;

use Filament\Notifications\Notification;

class NotificationHelper
{
    public static function sendFilamentNotification($title)
    {
        Notification::make()
            ->title($title)
            ->success()
            ->send();
    }
}
