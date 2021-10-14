<?php

    namespace Tests\Feature\Admin;

    use App\Models\Query;
    use App\Models\User;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class QueryTest extends TestCase {

        use RefreshDatabase;

        public function login_admin()
        {
            $this->seed();
            $user = User::findOrFail(1)->first();
            $this->actingAs($user);
        }

        /** @test */
        public function can_view_query_section()
        {
            $this->login_admin();
            $this->get(route('admin.queries.index'))->assertStatus(200);
        }

        /** @test */
        public function can_create_a_query()
        {
            $this->login_admin();
            $this->get(route('admin.queries.create'))->assertStatus(200);
            $query = Query::create([
                                       'name'   => 'Test Name',
                                       'mobile' => '+923335335792',
                                       'email'  => 'appssoulz@gmail.com',
                                       'address' => 'Ace American Center of English G-10 Markaz',
                                       'telephone'=>'0512345679',
                                       'p_timings' =>  'Morning',
                                       'reference' => 'SEO',
                                       'staff_user_id' => auth()->id(),
                                       'remarks' => 'Very Nice Query'
                                   ]);

            $this->assertEquals($query->name,'Test Name');
            $this->assertDatabaseCount('queries',1);
        }
    }
