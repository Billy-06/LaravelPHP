<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DatabaseTest extends TestCase
{

    use RefreshDatabase;

    public function test_the_post_model()
    {
        Post::factory()->count(10)->create();

        $this->assertDatabaseCount("posts", 10);
    }
    
    public function test_the_posts_user_relationship()
    {
        $user = User::factory()->hasPosts(5)->create();

        $this->assertDatabaseCount("posts", 5);
        $this->assertDatabaseCount("users", 1);
        $this->assertDatabaseHas("posts", [
            "user_id" == $user->id
        ]);
    }

    public function test_the_user_authentication_wuth_password_hashing()
    {
        $user = User::factory()->create([
            "password" => Hash::make("pass123"),
        ]);

        $this->post("/login", [
            'email' => $user->email,
            'password' => 'pass123',
        ]);
        $this->assertAuthenticated();
    }
    
}
