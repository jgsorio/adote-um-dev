<?php

namespace Tests\Feature;

use App\Livewire\Components\SplashScreen;
use Tests\TestCase;

class SplashScreenTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIfHomePageIsWorking(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testIfLivewireComponentIsLoaded()
    {
        $this->get('/')->assertSeeLivewire(SplashScreen::class);
    }
}
