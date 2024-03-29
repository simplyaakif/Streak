<?php

    use App\Http\Controllers\AccountsController;
    use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\BatchController;
    use App\Http\Controllers\Admin\CertificatesController;
    use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DepartmentController;
    use App\Http\Controllers\Admin\FinanceController;
    use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
    use App\Http\Controllers\Admin\StreamingController;
    use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SystemCalendarController;
use App\Http\Controllers\Admin\TaskCalendarController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\TaskStatusController;
use App\Http\Controllers\Admin\TaskTagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\DiscussionsController;
    use App\Http\Controllers\EmployeesController;
    use App\Http\Controllers\ExpensesController;
    use App\Http\Controllers\HomeTaskController;
    use App\Http\Controllers\IncomesController;
    use App\Http\Controllers\LessonsController;
    use App\Http\Controllers\OnlineRegistrationsController;
    use App\Http\Controllers\RecoveriesController;
    use App\Http\Controllers\ReportsController;
    use App\Http\Controllers\SmsController;
    use App\Http\Controllers\Student\IssuesController;
    use App\Http\Controllers\StudentAttendancesController;
    use App\Http\Controllers\VendorsController;
    use App\Models\Issue;
    use App\Models\OnlineRegistration;
    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Student\StreamingController as STController;
use App\Http\Controllers\Student\StudentController as SC;

Route::impersonate();


Route::redirect('/', '/login');

Route::get('/wip',[HomeController::class,'wip']);

Route::get('/online-register',function (){
    return view('guest.online-registration');
})->name('online-register');

Route::get('/online-information',function (){
    return view('guest.online-information');
})->name('online-information');

Auth::routes(['register' => false]);


Route::group(['prefix' => 'student','middleware' => ['auth','student_guardian']],function(){
    Route::get('/',[SC::class,'index'])->name('student.dashboard');
    Route::get('/courses',[SC::class,'courses'])->name('student.courses');
    Route::get('/course/{id}',[SC::class,'course'])->name('student.course');
    Route::get('/class-lesson/{lesson}',[SC::class,'classwork'])->name('student.course.class.lesson.show');
    Route::get('/homework/{id}',[SC::class,'homework'])->name('student.course.home.lesson.show');
    Route::get('/support',[IssuesController::class,'index'])->name('student.issues');
    Route::get('/support/{id}',[IssuesController::class,'show'])->name('student.issue');
    Route::get('/discussions',[DiscussionsController::class,'index'])->name('student.discussions');
    Route::get('/stream/online-class/{batch}',[STController::class,'index'])->name('stream.class');
    Route::get('/calendar',[SC::class,'calendar'])->name('student.institute_calendar');

});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','staff_only']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Query
    Route::get('queries/follow',[QueryController::class,'follow'])->name('queries.follow');
    Route::post('queries/media', [QueryController::class, 'storeMedia'])->name('queries.storeMedia');
    Route::get('queries/dashboard',[QueryController::class,'dashboard'])->name('queries.dashboard');
    Route::resource('queries', QueryController::class, ['except' => ['store', 'update', 'destroy']]);


//    Attendance
    Route::get('student-attendances',[StudentAttendancesController::class,'index'])->name('student-attendances');
    // Course
    Route::post('courses/media', [CourseController::class, 'storeMedia'])->name('courses.storeMedia');
    Route::resource('courses', CourseController::class, ['except' => ['store', 'update', 'destroy']]);

    // Department
    Route::post('departments/media', [DepartmentController::class, 'storeMedia'])->name('departments.storeMedia');
    Route::resource('departments', DepartmentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // System Calendar
    Route::resource('system-calendars', SystemCalendarController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);

    // Task Status
    Route::resource('task-statuses', TaskStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Task Tag
    Route::resource('task-tags', TaskTagController::class, ['except' => ['store', 'update', 'destroy']]);

    // Task
    Route::post('tasks/media', [TaskController::class, 'storeMedia'])->name('tasks.storeMedia');
    Route::get('tasks/done/{id}', [TaskController::class, 'done'])->name('task_done');
    Route::resource('tasks', TaskController::class, ['except' => ['store', 'update', 'destroy']]);

    // Task Calendar
    Route::resource('task-calendars', TaskCalendarController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit', 'show']]);

    // Setting
    Route::resource('settings', SettingController::class, ['except' => ['store', 'update', 'destroy']]);

    // Batch
    Route::post('batches/media', [BatchController::class, 'storeMedia'])->name('batches.storeMedia');
    Route::resource('batches', BatchController::class, ['except' => ['store', 'update', 'destroy']]);

    //Lesson Planner
    Route::resource('lessons',LessonsController::class,['only' =>['index']]);

    Route::resource('home-task',HomeTaskController::class,['only' =>['index']]);

    // Student
    Route::get('students/dashboard/{date?}',[StudentController::class,'dashboard'])->name('students.dashboard');
    Route::get('students/classrooms',[StudentController::class,'classrooms'])->name('students.classrooms');
    Route::get('students/classroom/{batch}',[StudentController::class,'classroom'])->name('students.classroom');
    Route::post('students/media', [StudentController::class, 'storeMedia'])->name('students.storeMedia');
    Route::resource('students', StudentController::class, ['except' => ['store', 'update', 'destroy']]);



    Route::get('finance/dashboard/{date?}',[FinanceController::class,'index'])->name('finance.dashboard');
    //    Expense
    Route::resource('finance/expenses',ExpensesController::class,['except' => ['store','update','destroy']]);

    //    Account
    Route::resource('finance/accounts',AccountsController::class,['except' => ['store','update','destroy']]);

    //    Employee
    Route::resource('employees',EmployeesController::class,['except' => ['store','update','destroy']]);

    //    Recovery
    Route::get('recovery/recovery',[RecoveriesController::class,'recovery'])->name('recovery.received');
    Route::resource('recovery',RecoveriesController::class,['except' => ['store','update','destroy']]);

    //    Income
    Route::resource('incomes',IncomesController::class,['except' => ['store','update','destroy']]);

    //    Vendors
    Route::resource('vendors',VendorsController::class,['except' => ['store','update','destroy']]);

    //      Certificate
    Route::resource('certificates',CertificatesController::class,['except' => ['store','update','destroy']]);

    // Sms Hub
    Route::resource('sms',SmsController::class,['except' => ['store','update','destroy','create']]);

    //Online Registration
    Route::resource('online-registration',OnlineRegistrationsController::class,
                    ['except' => ['create']]);



    Route::get('stream/start-online-class/{batch}',[StreamingController::class,'startOnlineClass'])->name('stream.start-online-class');
    Route::get('stream/online-class/{batch}',[StreamingController::class,'index'])->name('stream.class');
    Route::get('stream/rtm-token',[StreamingController::class, 'rtm_token'])->name('stream.rtc-token');


    Route::get('useful-links',function (){
    return view('admin.links.useful');
    })->name('useful-links');

    Route::get('reports',[ReportsController::class,'index'])->name('reports.index');


});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
