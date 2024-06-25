<?php

    namespace Tests\Feature\Admin;

    use App\Http\Controllers\GuardiansController;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Guardian;
    use App\Models\Student;
    use App\Models\User;
    use Carbon\Carbon;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class StudentTest extends TestCase {

        use RefreshDatabase;

        public function login_admin()
        {
            $this->seed();
            $user = User::findOrFail(1)->first();
            $this->actingAs($user);
        }

        /** @test */
        public function can_view_student_details()
        {
            $student = [
                'name'          => 'Muhammad Aakif Raza',
                'father_name'   => 'Muhammad Ashraf Raza',
                'gender'        => 'male',
                'nationality'   => 'pakistan',
                'date_of_birth' => '27-05-1992',
                'cnic_passport' => '3630242909177',
                'mobile'        => '03320913427',
                'email'         => 'simply.aakif@gmail.com',
                'user_id'       => ''
            ];
            Student::create($student);
            $this->login_admin();
            $response = $this->get('admin/students/1')->assertStatus(200);
            $response->assertSee('Muhammad Aakif Raza')->assertSee('Muhammad Ashraf Raza')->assertSee('male')
                ->assertSee('27-05-1992')->assertSee('pakistan')->assertSee('3630242909177')->assertSee('simply.aakif@gmail.com')->assertSee('03320913427');

        }

        /** @test */
        public function student_is_enrolled_in_a_batch()
        {
            $student = Student::factory()->create();
            $batch   = Batch::factory()->create();

            $admission = [
                'session_start_date' => now()->toDateString(),
                'session_end_date'   => now()->toDateString(),
                'batch_status'       => 0,
            ];

            $student->batches()->attach($batch, $admission);

            $student->batches()->attach($batch, $admission);

            $this->assertEquals(2, $student->batches()->count());

        }

        /** @test */
        public function student_enrolled_in_batch_has_recoveries_not_paid()
        {
            $student = Student::factory()->create();
            $batch   = Batch::factory()->create();

            $admission = [
                'session_start_date' => now()->toDateString(),
                'session_end_date'   => now()->toDateString(),
                'batch_status'       => 0,
            ];

            $student->batches()->attach($batch->id, $admission);

            $batchStudent = BatchStudent::where('student_id', $student->id)->where('batch_id', $batch->id)->first();

            $recovery = [
                'batch_id'         => $batch->id,
                'batch_student_id' => $batchStudent->id,
                'amount'           => 20000,
                'due_date'         => now(),
                'is_paid'          => 0,
                'course_id'        => $batch->course_id,
                'student_id'       => $student->id,
            ];
            $student->recoveries()->create($recovery);

            $this->assertEquals(1, $student->batches()->count());
            $this->assertEquals(1, $student->recoveries()->count());

        }

        /** @test */
        public function student_has_a_guardian()
        {
            $this->withoutExceptionHandling();
            $student  = Student::factory()->create();
            $guardian = [
                'name'        => 'Amjad',
                'relation'    => 'Father',
                'mobile'      => '03335335792',
                'email'       => 'amjad@mailnator.com',
                'profession'  => 'medical',
                'designation' => 'doctor'
            ];

            $guardian = Guardian::create($guardian);

            $student->guardian()->associate($guardian);

            $this->assertDatabaseCount('guardians', 1);
            $this->assertEquals(1, $student->guardian()->count());
        }


    }
