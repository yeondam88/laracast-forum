<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /**
     * @test
     */
    public function a_user_can_browse_threads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}