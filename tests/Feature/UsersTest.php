<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_list_loaded()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/users');
        $response->assertStatus(200);
    }
}
