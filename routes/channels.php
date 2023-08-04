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

    if ($user->id == null)
        return null;

    $participant = ChatParticioant::where([
        [
            'user_id',$user->id,
        ],
        [
            'chat_id',$id
        ]
    ])->first();

    return $participant !== null;
});
