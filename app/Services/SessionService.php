<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use App\Models\Session;

class SessionService
{
    public function getHistory(): JsonResponse
    {
        $sessions = Session::all();

        $history = $sessions->map(function ($session) {

            return [
                'score' => $session->score->score,
                'date' => $session->timestamp,
            ];
        });

        return response()->json(['history' => $history]);
    }
}
