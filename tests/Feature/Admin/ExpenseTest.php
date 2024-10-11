<?php

    namespace Tests\Feature\Admin;

    use App\Livewire\Admin\Finance\Expense\Index;
    use App\Models\Account;
    use App\Models\Expense;
    use Database\Seeders\AccountsTableSeeder;
    use Livewire;
    use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Exp;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class ExpenseTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function guest_cannot_view_page()
        {
            $this->get(route('admin.expenses.index'))->assertStatus(302);
        }

        /** @test */
        public function admin_can_view_expenses_page()
        {
            $this->admin_can_login();
            Expense::factory()->count(10)->create();
            $expense = Expense::first();
            $res
                     = $this->get(route('admin.expenses.index'))->assertSee($expense->type)->assertSee($expense->amount)->assertStatus(200);

        }

        /** @test */
        public function admin_can_add_expense()
        {

            $this->admin_can_login();
            $this->get(route('admin.expenses.index'))->assertSeeLivewire(Index::class);
            Livewire::test(Index::class)->set('modal', false)->set('newExpense.amount', '10000')->set('newExpense.type', 0)->set('newExpense.paid_on', now())->set('newExpense.paid_by', 1)->set('newExpense.paid_to', 'Digital Photostat')->set('newExpense.is_paid', 1)->call('submit');

            $this->assertDatabaseCount('expenses', 1);

        }

        /** @test */
        public function expense_is_added_with_transaction_and_account_updated()
        {

            $this->admin_can_login();
            $this->get(route('admin.expenses.index'))->assertSeeLivewire(Index::class);

            $account         = Account::findOrFail(1);
            $account->amount = 20000;
            $account->save();


            $expense_amount = 10000;
            Livewire::test(Index::class)
                ->set('modal', false)
                ->set('newExpense.amount', $expense_amount)
                ->set('newExpense.type', 0)
                ->set('newExpense.paid_on', now())
                ->set('newExpense.paid_by', 1)
                ->set('newExpense.paid_to', 'Digital Photostat')
                ->set('newExpense.is_paid', 1)
                ->set('account_id', 1)
                ->call('submit');


            $this->assertDatabaseCount('expenses', 1);
            $this->assertDatabaseCount('transactions', 1);
            $this->assertEquals(10000, $expense_amount);
        }

        /** @test */
        public function admin_can_edit_expense()
        {
            $this->admin_can_login();
            $this->get(route('admin.expenses.index'))->assertSeeLivewire(Index::class);

            Expense::factory()->create();
            $this->assertDatabaseCount('expenses', 1);

            Livewire::test(Index::class)
                ->call('edit',1)
                ->set('editing.amount', 1100)
                ->set('editing.type', 0)
                ->set('editing.paid_on', now())
                ->set('editing.paid_by', 1)
                ->set('editing.paid_to', 'Digital Photostat')
                ->set('editing.is_paid', 1)
                ->call('save',);
            $expense = Expense::findOrFail(1);
            $this->assertEquals(1100,$expense->amount);

        }

        /** @test */
        public function admin_can_delete_expense()
        {
            $this->admin_can_login();
            $this->get(route('admin.expenses.index'))->assertSeeLivewire(Index::class);
            Expense::factory()->create();
            $this->assertDatabaseCount('expenses', 1);
            Livewire::test(Index::class)->set('delete_id', 1)->call('delete',1);
            $this->assertDatabaseCount('expenses', 0);
        }
    }
