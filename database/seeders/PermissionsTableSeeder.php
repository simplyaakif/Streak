<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'query_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'query_create',
            ],
            [
                'id'    => 20,
                'title' => 'query_edit',
            ],
            [
                'id'    => 21,
                'title' => 'query_show',
            ],
            [
                'id'    => 22,
                'title' => 'query_delete',
            ],
            [
                'id'    => 23,
                'title' => 'query_access',
            ],
            [
                'id'    => 24,
                'title' => 'academic_access',
            ],
            [
                'id'    => 25,
                'title' => 'course_create',
            ],
            [
                'id'    => 26,
                'title' => 'course_edit',
            ],
            [
                'id'    => 27,
                'title' => 'course_show',
            ],
            [
                'id'    => 28,
                'title' => 'course_delete',
            ],
            [
                'id'    => 29,
                'title' => 'course_access',
            ],
            [
                'id'    => 30,
                'title' => 'department_create',
            ],
            [
                'id'    => 31,
                'title' => 'department_edit',
            ],
            [
                'id'    => 32,
                'title' => 'department_show',
            ],
            [
                'id'    => 33,
                'title' => 'department_delete',
            ],
            [
                'id'    => 34,
                'title' => 'department_access',
            ],
            [
                'id'    => 35,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 36,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 37,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 38,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 40,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 44,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'task_create',
            ],
            [
                'id'    => 50,
                'title' => 'task_edit',
            ],
            [
                'id'    => 51,
                'title' => 'task_show',
            ],
            [
                'id'    => 52,
                'title' => 'task_delete',
            ],
            [
                'id'    => 53,
                'title' => 'task_access',
            ],
            [
                'id'    => 54,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 55,
                'title' => 'setting_create',
            ],
            [
                'id'    => 56,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 57,
                'title' => 'setting_show',
            ],
            [
                'id'    => 58,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 59,
                'title' => 'setting_access',
            ],
            [
                'id'    => 60,
                'title' => 'batch_create',
            ],
            [
                'id'    => 61,
                'title' => 'batch_edit',
            ],
            [
                'id'    => 62,
                'title' => 'batch_show',
            ],
            [
                'id'    => 63,
                'title' => 'batch_delete',
            ],
            [
                'id'    => 64,
                'title' => 'batch_access',
            ],
            [
                'id'    => 65,
                'title' => 'employee_management_access',
            ],
            [
                'id'    => 66,
                'title' => 'study_material_access',
            ],
            [
                'id'    => 67,
                'title' => 'finance_management_access',
            ],
            [
                'id'    => 68,
                'title' => 'student_create',
            ],
            [
                'id'    => 69,
                'title' => 'student_edit',
            ],
            [
                'id'    => 70,
                'title' => 'student_show',
            ],
            [
                'id'    => 71,
                'title' => 'student_delete',
            ],
            [
                'id'    => 72,
                'title' => 'student_access',
            ],
            [
                'id'    => 73,
                'title' => 'student_management_access',
            ],
            [
                'id'    => 74,
                'title' => 'employee_create',
            ],
            [
                'id'    => 75,
                'title' => 'employee_edit',
            ],
            [
                'id'    => 76,
                'title' => 'employee_show',
            ],
            [
                'id'    => 77,
                'title' => 'employee_delete',
            ],
            [
                'id'    => 78,
                'title' => 'employee_access',
            ], [
                'id'    => 79,
                'title' => 'expense_create',
            ],
            [
                'id'    => 80,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 81,
                'title' => 'expense_show',
            ],
            [
                'id'    => 82,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 83,
                'title' => 'expense_access',
            ],
            [
                'id'    => 84,
                'title' => 'income_create',
            ],
            [
                'id'    => 85,
                'title' => 'income_edit',
            ],
            [
                'id'    => 86,
                'title' => 'income_show',
            ],
            [
                'id'    => 87,
                'title' => 'income_delete',
            ],
            [
                'id'    => 88,
                'title' => 'income_access',
            ],[
                'id'    => 89,
                'title' => 'dashboard_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
