<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        
        $response = $this->get('/login1');

        $response->assertStatus(404);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();  //https://laravel.com/docs/9.x/http-tests#assert-authenticated
        $response->assertRedirect(RouteServiceProvider::HOME);  //prvi nacin preko app/Providers/RouteServiceProvider
        $response->assertRedirect(route('dashboard'));  //"rucni"nacin preko imenovene rute routes/web
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);
    //$this->assertAuthenticated();  // ne smije proci jer nije dobar password
        $this->assertGuest();
    }
}
