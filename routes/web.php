<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    // Permissions Routes
        Route::view('permissions', 'permissions')->name('permissions.index');
        Route::get('/permission/create', Livewire\CreatePermission::class)->name('permission.create');
        Route::get('/permission/edit/{id}', Livewire\EditPermission::class)->name('permission.edit');
    // Roles Routes
        Route::get('/role/create', Livewire\CreateRoles::class)->name('role.create');
        Route::view('roles', 'roles')->name('roles.index');
        Route::get('/role/edit/{id}', Livewire\EditRole::class)->name('role.edit');
        Route::get('{id}/role/', Livewire\DestroyRole::class)->name('role.destroy');
        Route::get('/role/{id}', Livewire\ShowRole::class)->name('role.show');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});