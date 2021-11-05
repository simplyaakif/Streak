<?php

    namespace Tests\Feature\Admin;

    use App\Models\User;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\DatabaseTransactions;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class AdminTest extends TestCase {

        use DatabaseMigrations, RefreshDatabase;

        /** @test */
        public function admin_can_login()
        {
            $this->withoutExceptionHandling();
            $this->seed();
            $user = User::findOrFail(1)->first();
            $this->actingAs($user)
                ->get('/admin')
                ->assertSee('Good morning')
                ->assertStatus(200);
        }

        /** @test */
        public function admin_can_see_dashboard_his_details()
        {
            $this->withoutExceptionHandling();
            $this->seed();
            $user = User::findOrFail(1)->first();
            $this->actingAs($user)
                ->get('/admin')
                ->assertSee('Good morning, '.$user->name)
                ->assertStatus(200);
        }
    }
