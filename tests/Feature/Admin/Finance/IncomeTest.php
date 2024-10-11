<?php

    namespace Tests\Feature\Admin\Finance;

    use App\Livewire\Admin\Finance\Income\Index;
    use App\Models\Income;
    use Livewire\Livewire;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class IncomeTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function admin_can_view_index()
        {
            $this->admin_can_login();
            $this->get(route('admin.incomes.index'))->assertStatus(200);
        }

        /** @test */
        public function admin_can_see_table_and_contents()
        {
            $this->admin_can_login();
            Income::factory()->count(10)->create();
            $income = Income::find(1);

            $this->get(route('admin.incomes.index'))->assertSee($income->type)->assertSee($income->amount);
        }

        /** @test */
        public function admin_can_create_a_new_income()
        {
            $this->admin_can_login();


            Livewire::test(Index::class)
                    ->set('showEditModal',true)
                    ->set('editing.type',0)
                    ->set('editing.amount',1000)
                    ->set('editing.paid_on','22-10-2021 12:00:00')
                    ->set('editing.paid_by','Muhammad Aakif Raza')
                    ->set('editing.user_id',1)
                    ->set('editing.remarks','Paid as a Fine')
                    ->call('save')
                ->assertStatus(200);
            $this->assertDatabaseCount('incomes',1);

        }
    }
