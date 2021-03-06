<?php

namespace Tests\Feature;

use Tests\TestCase;

class UpTest extends TestCase
{
    public function testUp()
    {
        $this->artisan('up')->assertExitCode(0);

        $this->assertDockerCompose('up');
    }

    public function testUpCustom()
    {
        $this->artisan('up -d')->assertExitCode(0);

        $this->assertDockerCompose('up -d');
    }
}
