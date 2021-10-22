<?php

    namespace Tests\Feature\Admin;

    use App\Models\Batch;
    use App\Models\Course;
    use Faker\Provider\Address;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class BatchTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function guest_cannot_view_batch_page()
        {
            $this->get('admin/batches/')->assertStatus(302);
        }

        /** @test */
        public function admin_can_view_batch_page()
        {
            $this->admin_can_login();
            $this->get('admin/batches/')->assertStatus(200);
        }

        /** @test */
        public function admin_can_view_individual_batch()
        {
            $this->admin_can_login();
            $course= Course::factory()->create();
            $batch= [
                'title'=>'Spoken English',
                'limit'=>10,
                'session_duration'=>'2 Hour',
                'description'=>'',
                'course_id'=>$course->id,
            ];
            Batch::create($batch);
            $this->get('admin/batches/1')
                ->assertSee('Spoken English')
                ->assertSee('10')
                ->assertSee('2 Hour');

        }
    }
