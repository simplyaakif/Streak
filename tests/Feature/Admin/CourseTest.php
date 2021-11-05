<?php

    namespace Tests\Feature\Admin;

    use App\Models\Course;
    use App\Models\CourseVariation;
    use App\Models\Role;
    use App\Models\User;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class CourseTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function a_course_can_be_created()
        {
            $course = Course::create([
                                         'title'       => 'Spoken English',
                                         'description' => 'Fake description'
                                     ]);
            $this->assertDatabaseCount('courses', 1);

        }

        /** @test */
        public function course_has_many_durations_and_prices()
        {
            $course     = Course::factory()->create();
            $variations = CourseVariation::factory()->count(3)->create(["course_id" => $course->id]);
            // Method 1: A comment exists in a post's comment collections.
            $this->assertTrue($course->variations->contains($variations[0]));

            // Method 2: Count that a post comments collection exists.
            $this->assertEquals(3, $course->variations->count());

        }

    }
