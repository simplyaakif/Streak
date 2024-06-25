<?php

    namespace Database\Seeders;

    use App\Models\Employee;
    use Illuminate\Database\Seeder;

    class EmployeeSeeder extends Seeder {

        public function run()
        {
            $employees = [
                [
                    'id'                => 1,
                    'name'              => 'Muhammad Aakif Raza',
                    'father_name'       => 'Muhammad Ashraf Raza',
                    'gender'            => 'male',
                    'date_of_birth'     => now()->toDateString(),
                    'mobile'            => '03320913427',
                    'designation'       => 'director',
                    'address'           => 'G11/3',
                    'salary_amount'     => '70000',
                    'earning_type'      => 'fixed',
                    'salary_commission' => '0',
                    'user_id'           => 1
                ],
                [
                    'id'                => 2,
                    'name'              => 'Ace Manager',
                    'father_name'       => 'Father of Ace Manager',
                    'gender'            => 'male',
                    'date_of_birth'     => now()->subYears(30)->toDateString(),
                    'mobile'            => '0123456789',
                    'designation'       => 'front-desk-officer',
                    'address'           => 'G14',
                    'salary_amount'     => '30000',
                    'earning_type'      => 'fixed',
                    'salary_commission' => '0',
                    'user_id'           => 2
                ],
            ];
            Employee::insert($employees);
        }
    }
