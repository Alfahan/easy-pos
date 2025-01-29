<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/login', '/');

Route::middleware('guest')->group(function () {
    Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login.store');
});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard')->middleware('permission:dashboard.index');

    $resources = [
        'roles' => [
            'controller' => \App\Http\Controllers\Admin\RoleController::class,
            'permissions' => 'roles.index|roles.create|roles.edit|roles.delete',
            'names' => 'roles'
        ],
        'users' => [
            'controller' => \App\Http\Controllers\Admin\UserController::class,
            'permissions' => 'users.index|users.create|users.edit|users.delete',
            'names' => 'users'
        ],
        'suppliers' => [
            'controller' => \App\Http\Controllers\Admin\SupplierController::class,
            'permissions' => 'suppliers.index|suppliers.create|suppliers.edit|suppliers.delete'
        ],
        'customers' => [
            'controller' => \App\Http\Controllers\Admin\CustomerController::class,
            'permissions' => 'customers.index|customers.create|customers.edit|customers.delete'
        ],
        'categories' => [
            'controller' => \App\Http\Controllers\Admin\CategoryController::class,
            'permissions' => 'categories.index|categories.create|categories.edit|categories.delete',
            'name' => 'categories'
        ],
    ];

    foreach ($resources as $name => $resource) {
        $route = Route::resource($name, $resource['controller'])
            ->middleware("permission:{$resource['permissions']}");
        if (isset($resource['names'])) {
            $route->names($resource['names']);
        }
    }

    Route::get('/get-cities/{provinceId}', [\App\Http\Controllers\Admin\SupplierController::class, 'getCitiesByProvince'])->name('get-cities');
});

Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, '__invoke'])->name('logout')->middleware('auth');
