<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TimelineModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_timeline_page()
    {
        $this->get('/timeline')
            ->assertStatus(200)
            ->assertSee('Timeline');
    }
}
