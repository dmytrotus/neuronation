<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use App\Models\Session;
use Illuminate\Support\Facades\DB;

class SessionService
{
    public function getHistory(): JsonResponse
    {
        $sessions = DB::select(
            'SELECT 
            sessions.session_id, sessions.timestamp, scores.score
            FROM sessions
            JOIN scores ON sessions.session_id = scores.sid'
        );

        $history = array_map(function ($session) {
            return [
                'score' => (int) $session->score,
                'date' => (int) strtotime($session->timestamp),
            ];
        }, $sessions);

        return response()->json(['history' => $history]);
    }
}
