<?php

namespace Tests;

use App\Http\Controllers\EmployeesController;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function admin_can_login()
    {
        $this->withoutExceptionHandling();

        $this->seed();
        $user = User::findOrFail(1)->first();
        $this->actingAs($user);
    }
}
