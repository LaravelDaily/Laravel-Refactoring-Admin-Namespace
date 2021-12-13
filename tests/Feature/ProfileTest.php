<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_profile_form_loaded()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/profile');
        $response->assertStatus(200);
        $response->assertViewIs('auth.profile');
    }

    public function test_profile_form_update()
    {
        $user = User::factory()->create();

        $userData = [
            'name' => 'Updated name',
            'email' => 'updated@email.com'
        ];
        $response = $this->actingAs($user)->put('/profile', $userData);
        $response->assertRedirect('profile');
        $this->assertDatabaseHas('users', $userData);
    }
}
