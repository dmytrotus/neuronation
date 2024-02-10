<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\CacheService;

class SessionController extends Controller
{
    public function __construct(
        public CacheService $cacheService
    ) {
    }

    public function getHistory(): JsonResponse
    {
        return $this->cacheService->getHistory();
    }
}
