<?php

namespace App\Services;

use App\Models\Session;
use Illuminate\Support\Facades\DB;

class SessionService
{
    public function getHistory(): array
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

        return $history;
    }
}
