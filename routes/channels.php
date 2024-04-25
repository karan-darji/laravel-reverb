<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    \Log::info("brodcaster user");
    \Log::info(print_r($user,true));
    \Log::info($id);
    return (int) $user->id === (int) $id;
});
