<?php

use App\Http\Controllers\Teachers;
use App\Http\Controllers\StudnetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudnetController::class, 'index'])->name('home');
Route::get('about-us', [StudnetController::class, 'index'])->name('about-us');
Route::get('add_Data', [StudnetController::class, 'addData']);

Route::get('teachers', [Teachers::class, 'index']);
Route::get('add-teacher', [Teachers::class, 'add']);
Route::get('iteam-show/{id}', [Teachers::class, 'show']);
Route::get('iteam-update/{id}', [Teachers::class, 'update']);
Route::get('iteam-delete/{id}', [Teachers::class, 'delete']);
Route::get('delete-student/{id}', [StudnetController::class, 'delete'])->name('student.delete');
Route::get('student-delete/{id}', [StudnetController::class, 'delete'])->name('student.delete');
Route::get('student-edit/{id}', [StudnetController::class, 'edit'])->name('student.edit');
Route::get('get-data', [StudnetController::class, 'getData']);
Route::get('update-data/{id}', [StudnetController::class, 'updateData'])->name('student.update');
Route::get('delete-data', [StudnetController::class, 'deleteData']);
Route::get('where-condition', [StudnetController::class, 'whereCondtion']);
Route::get('query-scope', [StudnetController::class, 'ScopeQuery']);

Route::get('/contact-us', function () {
    return view('contactus');
});



// Route::controller(MyappController::class)->group(function () {
//     Route::get('/myapp', 'index');
//     // Route::get('/about-us', 'aboutus');
// });
// Route::get('invoke', TestController::class);
// Route::get('teachers',function(){
//     return Teacher::all();
// });
