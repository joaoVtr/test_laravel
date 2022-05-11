<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
// use Illuminate\Foundation\Testing\DatabaseMigrations; //Invoca o migrate no banco de dados 
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        // dd(DB::connection()->getPDO());
        // dd(env('DB_CONNECTION'));
        // dd(env('DB_DATABASE'));
        // dd(env('APP_ENV'));
        $user = User::factory()->create();
    }
}
