<?php

    namespace Tests\Feature\Student;

    use App\Http\Controllers\DiscussionsController;
    use App\Models\Batch;
    use App\Models\Discussion;
    use App\Models\Student;
    use Carbon\Carbon;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class StudentPortalTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function student_can_view_dashboard()
        {

            $student = Student::factory()->create();

            $user = $student->user;
            $this->actingAs($user);
            $this->get(route('student.dashboard'))
            ->assertStatus(200);

        }

        public function student_login()
        {
            $this->seed();
            $student = Student::factory()->create();

            $user = $student->user;
            $this->actingAs($user);
        }

        /** @test */
        public function student_can_view_his_course_on_dashboard()
        {
            $this->student_login();


            $student = Student::find(1);
            $batch = Batch::factory()->create();

            $student->batches()->attach($batch->id,[
                'batch_status'=>1,
                'session_start_date'=>now(),
                'session_end_date'=>now()->addMonths(3)
            ]);

        $response = $this->get(route('student.dashboard'))
            ->assertSee($batch->title)
            ->assertSee(Carbon::parse($student->batches[0]->pivot->session_start_date)->format('M d Y'));

        }

        /** @test */
        public function student_can_view_discussion_on_dashboard()
        {
            Discussion::factory()->count(10)->create();
            $discussion = Discussion::find(1);

            $this->student_login();

            $this->get(route('student.dashboard'))
                ->assertSee($discussion->title)
                ->assertStatus(200);

            $this->assertDatabaseCount('discussions',10);

        }

    }
