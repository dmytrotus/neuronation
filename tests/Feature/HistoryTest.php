<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HistoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_history_with_correct_structure_returns(): void
    {
        $response = $this->get('/api/sessions/history');

        $response->assertJsonStructure([
            'history' => [
                '*' => [
                    'score',
                    'date'
                ]
            ]
        ])->assertStatus(200);
    }
}
