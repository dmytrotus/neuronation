<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\SessionService;

class SessionController extends Controller
{
    public function __construct(
        public SessionService $sessionService
    ) {
    }

    public function getHistory(): JsonResponse
    {
        return $this->sessionService->getHistory();
    }
}
