<?php

use App\Http\Controllers\Api\V1\Admin\CourseApiController;
use App\Http\Controllers\Api\V1\Admin\QueryApiController;
use App\Http\Controllers\Api\V1\Admin\StudentApiController;
use App\Http\Controllers\Api\V1\Admin\UserApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.'], function () {
    // Users
    Route::apiResource('users', UserApiController::class);

    // Query
    Route::post('queries/media', [QueryApiController::class, 'storeMedia'])->name('queries.store_media');
    Route::apiResource('queries', QueryApiController::class);

    // Course
    Route::post('courses/media', [CourseApiController::class, 'storeMedia'])->name('courses.store_media');
    Route::apiResource('courses', CourseApiController::class);

    // Student
    Route::post('students/media', [StudentApiController::class, 'storeMedia'])->name('students.store_media');
    Route::apiResource('students', StudentApiController::class);
});



Route::apiResource('qr', QueryApiController::class);
