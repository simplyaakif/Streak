<?php

    namespace Tests\Feature\Admin;

    use App\Http\Controllers\EmployeesController;
    use App\Models\Employee;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;

    class EmployeeTest extends TestCase {

        use RefreshDatabase;

        /** @test */
        public function admin_can_view_employees_page()
        {
            $this->admin_can_login();
            $this->get(route('admin.employees.index'))->assertStatus(200);
        }

        /** @test */
        public function admin_can_create_employee()
        {
            $this->admin_can_login();
            $employee = [
                'name'              => 'Ayesha Fatima',
                'father_name'       => 'Muhammad Ashraf',
                'gender'            => 'female',
                'date_of_birth'     => now()->toDateString(),
                'mobile'            => '03335335792',
                'designation'       => 'director',
                'address'           => 'G14',
                //                'email'=>'aakifatdh@gmail.com',
                'salary_amount'     => '300000',
                'earning_type'      => 'fixed',
                'salary_commission' => '10',
            ];
            Employee::create($employee);
            $this->assertDatabaseCount('employees', 1);
        }

        /** @test */
        public function admin_can_delete_an_employee()
        {
            Employee::factory()->count(10)->create();
            $this->assertDatabaseCount('employees',10);

            $employee = Employee::first();
            $employee->delete();

            $this->assertDatabaseCount('employees',9);

        }
    }
