<?php

use Illuminate\Http\Request;
use Modules\Blog\Models\BlogContent;
use App\Support\Module;

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

Route::prefix(Module::currentConfig('web.prefix'))->group(function () {
    Route::get('/', 'BlogController@index');
});

Route::prefix('admin')->group(function () {
    Route::prefix(Module::currentConfig('web.prefix'))->group(function () {
        Route::prefix('{table}')->where(['table' => '(metas|contents|comments|links)'])->group(function () {
            Route::get('', function (Request $request, $table) {
                $return = [
                    'view' => 'admin::admin.modules.' . $table,
                    'readonly' => true,
                    'paginator' => BlogContent::paginate(10),
                ];

                return \Modules\Admin\Http\Controllers\AdminController::view($return['view'], $return);
            });
            Route::match(['get', 'post'], '/insert', function (Request $request, $table) {
                $return = [
                    'view' => 'admin::admin.modules.' . substr($table, 0, -1),
                    'readonly' => true,
                    'detail' => new BlogContent,
                ];

                if ($request->method() == 'POST') {
                    $return['detail'] = BlogContent::create($request->input());
                    // $return['detail']->save();
                }

                return \Modules\Admin\Http\Controllers\AdminController::view($return['view'], $return);
            });
            Route::match(['get', 'post'], '/{id}', function (Request $request, $table, $id) {
                $return = [
                    'view' => 'admin::admin.modules.' . substr($table, 0, -1),
                    'readonly' => true,
                    'detail' => BlogContent::find($id),
                ];

                if ($request->method() == 'POST') {
                    $return['detail']->fill($request->input());
                    $return['detail']->save();
                }

                return \Modules\Admin\Http\Controllers\AdminController::view($return['view'], $return);
            });
        });
        Route::match(['get', 'post'], '/config', '\\Modules\\Admin\\Http\\Controllers\\AdminController@view_admin_modules_config');
    });
});
