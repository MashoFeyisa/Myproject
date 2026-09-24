<?php
use App\Http\Controllers\MyappController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Teachers;
use App\Http\Controllers\StudnetController;


Route::get('add_Data', [StudnetController::class, 'addData']);


Route::get('teachers', [Teachers::class, 'index']);
Route::get('add-teacher', [Teachers::class, 'add']);
Route::get('iteam-show/{id}', [Teachers::class, 'show']);
Route::get('iteam-update/{id}',[Teachers::class,'update']);
Route::get('iteam-delete/{id}',[Teachers::class, 'delete']);
Route::get('delete-student/{id}',[StudnetController::class,'delete']);
Route::get('get-data', [StudnetController::class,'getData']);
Route::get('update-data', [StudnetController::class,'updateData']);
Route::get('delete-data',[StudnetController::class, 'deleteData']);

Route::get('where-condition',[StudnetController::class,'whereCondtion']);

Route::get('query-scope', [StudnetController::class,'ScopeQuery']);



Route::get('/about-us/{name}/{id}', function ($name, $id) {
    return view('aboutus', compact('name', 'id'));
});

// Route::get('/contact-us',function(){
//     return view('contactus');
// });



// Route::controller(MyappController::class)->group(function () {
//     Route::get('/myapp', 'index');
//     // Route::get('/about-us', 'aboutus');
// });
// Route::get('invoke', TestController::class);
// Route::get('teachers',function(){
//     return Teacher::all();
// });
