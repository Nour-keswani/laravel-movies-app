<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get(route('movies.index'));

        $response->assertStatus(200);
        $response->assertSee('Popular Movies');
    }
}


// public function the_main_page_shows_correct_info()
//     {
//         $response = $this->get(route('movies.index'));

//         $response->assertSuccessful();
//     }

// test_the_application_returns_a_successful_response
