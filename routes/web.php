<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Example2Controller;
use App\Http\Controllers\MyUsersController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\ShowAddress;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [HelloController::class, 'hello']);

$uri = 'example/';
Route::get($uri, fn() => 'GET ' . $uri);
Route::post($uri, fn() => 'POST ' . $uri);
Route::delete($uri, fn() => 'DELETE ' . $uri);
Route::put($uri, fn() => 'PUT ' . $uri);
Route::options($uri, fn() => 'OPTIONS ' . $uri);

$uri = 'example2/';

Route::get($uri, [Example2Controller::class, 'get']);
Route::post($uri, [Example2Controller::class, 'post']);
Route::put($uri, [Example2Controller::class, 'put']);
Route::delete($uri, [Example2Controller::class, 'delete']);
Route::options($uri, [Example2Controller::class, 'options']);



// Route::match(['get', 'post'], '/user/profile', function () {
//     return 'Jestem GET i POST';
// });

// Route::view('/view/route', 'route.view');

// Route::view(
//     '/view/routeparam', 
//     'route.viewparam', 
//     ['p1' => 'value1', 'p2' => 'value2']
// );

// Route::get('users/{postId}/{title}', function (int $postId, string $title) {
//     var_dump($title);
//     var_dump($postId);
// });

// Route::get('users/{nick?}', function (string $nick = null) {
//     dd($nick);
// });

// Route::get('users/{nick}', function ($nick) {
//     dd($nick);
// })->where(['nick' => '[a-z]+']);

// Route::get('items/', function () {
//     return 'Items';
// })->name('items');

// Route::get('items/{id}', function (int $id) {
//     return 'Item: ' . $id;
// })->name('item');

// Route::get('example/', function() {
//     // $url = route('items');
//     $url = route('item', ['id' => 12]);
//     return $url;
// });

Route::get('/myusers', [MyUsersController::class, 'list'])
    ->name('get.users');

Route::get('/myusers/test/{id}', [MyUsersController::class, 'testShow'])
    ->name('get.users.test');

Route::post('/myusers/test/{id}', [MyUsersController::class, 'testStore'])
    ->name('post.users.test');

Route::get('/myusers/{id}', [ProfileController::class, 'show']);

Route::get('/myusers/{id}/address', ShowAddress::class)
->name('user.showAddress')
->where(['id' => '[0-9]+']);

//Route::resource('games', GameController::class);
Route::resource('games', GameController::class)
->only(['index', 'show']);