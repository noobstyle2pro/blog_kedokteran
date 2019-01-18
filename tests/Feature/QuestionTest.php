<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_can_read_questions()
    {
        $response = $this->get('/api/questions');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function a_user_can_read_a_question()
    {
        $response = $this->get('/api/question/1');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function an_admin_can_create_a_question()
    {
        $response = $this->get('/api/question/1');

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function an_admin_can_update_a_question()
    {
        $response = $this->get('/api/question/1');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function a_user_can_delete_a_question()
    {
        $response = $this->get('/api/question/1');

        $response->assertStatus(204);
    }
}
