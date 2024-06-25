<?php

    namespace Tests\Feature\Admin;

    use App\Http\Controllers\AccountsController;
    use App\Models\Account;
    use App\Models\User;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class AccountTest extends TestCase {

        use DatabaseMigrations;

        public function login_admin()
        {
            $this->seed();
            $user = User::findOrFail(1)->first();

            $this->actingAs($user);
        }

        /** @test */
        public function admin_can_view_account_route()
        {
            $this->login_admin();
            $this->get('admin/finance/accounts')->assertStatus(200);
        }

        /** @test */
        public function admin_can_view_create_account_route()
        {
            $this->login_admin();
            $account = Account::
            $this->get('admin/finance/accounts/create')
                ->assertStatus(200);

        }
        /** @test */
        public function admin_can_view_edit_account_route()
        {
        $this->login_admin();
        $this->get('admin/finance/accounts/edit')
            ->assertStatus(200);
        }
    }
