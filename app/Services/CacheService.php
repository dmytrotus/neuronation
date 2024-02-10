<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\JsonResponse;
use App\Services\SessionService;

class CacheService
{
    public function __construct(
        public SessionService $sessionService
    ) {
    }

    public function getHistory(): JsonResponse
    {
        $sessionService = $this->sessionService;

        return Cache::remember(
            'cachedHistory',
            config('cache.remember_timing'),
            function () use ($sessionService) {
                return response()->json([
                    'history' => $sessionService->getHistory()
                ]);
            }
        );
    }
}
