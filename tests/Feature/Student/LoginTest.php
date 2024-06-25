<?php

    namespace Tests\Feature\Student;

    use App\Models\Student;
    use App\Models\User;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class LoginTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function student_cannot_login_to_admin()
        {

            Student::factory()->create();
            $user = User::findOrFail(1);
            $this->get('/admin')
                ->assertStatus(302);



        }

    }
