<?php

    namespace Database\Seeders;

    use App\Models\Account;
    use Illuminate\Database\Seeder;

    class AccountsTableSeeder extends Seeder {

        public function run()
        {
            $accounts=[
                [
                    'id'=>1,
                    'title'=>'Cash',
                    'account_number'=>'Front Desk',
                    'amount'=>0,
                    'oversee_by_id'=>1,
                    'type'=>'cash',
                    'is_active'=>1,
                ],[
                    'id'=>2,
                    'title'=>'Meezan Bank',
                    'account_number'=>'03270103844929',
                    'amount'=>100,
                    'oversee_by_id'=>1,
                    'type'=>'bank',
                    'is_active'=>1,
                ],[
                    'id'=>3,
                    'title'=>'Easy Paisa',
                    'account_number'=>'03365722334',
                    'amount'=>10,
                    'oversee_by_id'=>1,
                    'type'=>'wallet',
                    'is_active'=>1,
                ],
            ];
            Account::insert($accounts);
        }
    }
