<?php

    namespace Tests\Feature\Admin;

    use App\Models\Query;
    use App\Models\User;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class QueryTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function can_view_query_status_page()
        {

//            Setting Time
            $this->travelTo(now()->startOfMonth());

//            Admin Login
            $this->admin_can_login();

//            Create Query via Factory
            Query::factory()->count(10)->create(['created_at' =>now() ]);
            Query::factory()->count(10)->create(['created_at' =>now()->addDays(1) ]);
            Query::factory()->count(10)->create(['created_at' =>now()->addDays(10) ]);
            Query::factory()->count(10)->create(['created_at' =>now()->subMonths(1) ]);


            //            Daily Queries
            $dQuery = Query::whereDate('created_at', now()->toDate())->get()->count();
            $wQuery = Query::whereBetween('created_at', [now()->startOfWeek(),now()->endOfWeek()])->get()->count();
            $mQuery = Query::whereMonth('created_at', now()->month)
                ->whereYear('created_at',now()->year)
                ->get()->count();
            $pMquery = Query::whereMonth('created_at', now()->subMonth()->month)
                ->whereYear('created_at',now()->subMonth()->year)
                ->get()->count();

//            Visiting the Route
            $this->get(route('admin.queries.dashboard'))
                ->assertStatus(200)
                ->assertSee($dQuery)
                ->assertSee($wQuery)
                ->assertSee($mQuery)
                ->assertSee($pMquery);

            $this->travelBack();

        }

        /** @test */
        public function can_view_query_section()
        {
            $this->admin_can_login();
            $this->get(route('admin.queries.index'))->assertStatus(200);
        }

        /** @test */
        public function can_create_a_query()
        {
            $this->admin_can_login();
            $this->get(route('admin.queries.create'))->assertStatus(200);
            $query = Query::create([
                                       'name'          => 'Test Name',
                                       'mobile'        => '+923335335792',
                                       'email'         => 'appssoulz@gmail.com',
                                       'address'       => 'Ace American Center of English G-10 Markaz',
                                       'telephone'     => '0512345679',
                                       'p_timings'     => 'Morning',
                                       'reference'     => 'SEO',
                                       'staff_user_id' => auth()->id(),
                                       'remarks'       => 'Very Nice Query'
                                   ]);

            $this->assertEquals($query->name, 'Test Name');
            $this->assertDatabaseCount('queries', 1);
        }

    }
