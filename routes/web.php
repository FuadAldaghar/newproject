<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('employees', EmployeeController::class);

Route::resource('departments', DepartmentController::class);

Route::resource('positions', PositionController::class);

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');













// use Illuminate\Support\Facades\Route;
// 
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });
// 
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard');
// 
// Route::prefix('employees')->name('employees.')->group(function () {
//     Route::get('/', function () {
//         return view('employees.index');
//     })->name('index');
// 
//     Route::get('/create', function () {
//         return view('employees.create');
//     })->name('create');
// 
//     Route::get('/{employee}/edit', function () {
//         return view('employees.edit');
//     })->name('edit');
// 
//     Route::get('/{employee}', function () {
//         return view('employees.show');
//     })->name('show');
// });
// 
// Route::prefix('departments')->name('departments.')->group(function () {
//     Route::get('/', function () {
//         return view('departments.index');
//     })->name('index');
// 
//     Route::get('/create', function () {
//         return view('departments.create');
//     })->name('create');
// 
//     Route::get('/{department}/edit', function () {
//         return view('departments.edit');
//     })->name('edit');
// });
// 
// Route::prefix('positions')->name('positions.')->group(function () {
//     Route::get('/', function () {
//         return view('positions.index');
//     })->name('index');
// 
//     Route::get('/create', function () {
//         return view('positions.create');
//     })->name('create');
// 
//     Route::get('/{position}/edit', function () {
//         return view('positions.edit');
//     })->name('edit');
// });
// 
// Route::get('/reports', function () {
//     return view('reports.index');
// })->name('reports.index');
