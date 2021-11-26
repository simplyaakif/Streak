<?php

    namespace Tests\Feature\Admin;

    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class Online_sessionTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function generate_token()
        {
            $this->withoutExceptionHandling();
            $this->admin_can_login();
            $response = $this->get(route('admin.stream.rtc-token'));
            $response->dd();
        }

    }
