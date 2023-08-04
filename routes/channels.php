<?php

use App\Models\ChatParticioant;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chat.{id}', function ($user, $id) {

    $user->id = 1;
    $user -> save();

    if ($user->id == null)
        return null;

    $participant = ChatParticioant::where([
        [
            'user_id',1,
        ],
        [
            'chat_id',$id
        ]
    ])->first();

    return $participant !== null;
});
