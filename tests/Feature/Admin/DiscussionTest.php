<?php

    namespace Tests\Feature\Admin;

    use App\Models\Discussion;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class DiscussionTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function anyone_can_visit_discussions_page()
        {
//            $this->withoutExceptionHandling();
            $res = $this->get('/student/discussions');
            $res->assertStatus(200);
            $res->assertSeeText("Discussions");
        }


        /** @test */
        public function anyone_can_see_latest_record()
        {
            $discussion = Discussion::create([
                                                  'title'       => "Why?",
                                                  'description' => "Is this ok",
                                                  'user_id'     => '10'
                                              ]);
            $res         = $this->get(route('student.discussions'));
            $res->assertSee('Why?',$discussion->title);

        }
    }
