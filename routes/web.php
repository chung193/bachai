<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

use App\Livewire\Admin\Dashboard\Setting;
use App\Livewire\Admin\Dashboard\Role;
use App\Livewire\Admin\Dashboard\Permission;
use App\Livewire\Admin\Dashboard\GivePermission;
use App\Livewire\Admin\Dashboard\PermissionUser;
use App\Livewire\Admin\Dashboard\PermissionRole;

use App\Livewire\Admin\Dashboard\Profile;
use App\Livewire\Admin\Dashboard\Contact as ContactController;

use App\Livewire\Admin\Dashboard\Index;
use App\Livewire\Admin\Dashboard\Post as PostManager;
use App\Livewire\Admin\Dashboard\PostAdd;
use App\Livewire\Admin\Dashboard\PostEdit;

use App\Livewire\Admin\Dashboard\Users;
use App\Livewire\Admin\Dashboard\UserAdd;
use App\Livewire\Admin\Dashboard\UserEdit;

use App\Livewire\Admin\Dashboard\Category as CategoryManager;
use App\Livewire\Admin\Dashboard\Tag as TagManager;

use App\Livewire\Admin\Auth\Login;
use App\Livewire\Admin\Auth\Forgot;
use App\Livewire\Admin\Auth\Logout;

use App\Livewire\Home;
use App\Livewire\SearchResult;
use App\Livewire\Page;
use App\Livewire\Post;
use App\Livewire\Book;

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

Route::get('/', Home::class)->name('home');
Route::get('/b', Book::class)->name('book');
Route::get('/b/tim-kiem', SearchResult::class)->name('search');
Route::get('/{slug}', Page::class)->name('page');
Route::get('/p/{slug}', Post::class)->name('post');

Route::post('/send-contact', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    if ($validator->fails()) {
        redirect()->back()->with('message', 'Có lỗi trong dữ liệu gửi đi');
    }

    Contact::create($request);
    redirect()->back()->with('message', 'Thực hiện thành công!');
})->name('sendcontact');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard/home', Index::class)->name('dashboard.home');
    Route::get('/admin/dashboard/post', PostManager::class)->name('dashboard.post');
    Route::get('/admin/dashboard/post-add', PostAdd::class)->name('dashboard.post.add');
    Route::get('/admin/dashboard/post-edit/{slug}', PostEdit::class)->name('dashboard.post.edit');

    Route::get('/admin/dashboard/users', Users::class)->name('dashboard.users');
    Route::get('/admin/dashboard/user-add', UserAdd::class)->name('dashboard.user.add');
    Route::get('/admin/dashboard/user-edit/{slug}', UserEdit::class)->name('dashboard.user.edit');

    Route::get('/admin/dashboard/category', CategoryManager::class)->name('dashboard.category');
    Route::get('/admin/dashboard/tag', TagManager::class)->name('dashboard.tag');

    Route::get('/admin/dashboard/role', Role::class)->name('dashboard.role');
    Route::get('/admin/dashboard/permission', Permission::class)->name('dashboard.permission');
    Route::get('/admin/dashboard/give-permission/{name}', GivePermission::class)->name('dashboard.give.permission');
    Route::get('/admin/dashboard/user-permission/{slug}', PermissionUser::class)->name('dashboard.user.permission');
    Route::get('/admin/dashboard/role-permission/{name}', PermissionRole::class)->name('dashboard.role.permission');
    Route::get('/admin/dashboard/setting/', Setting::class)->name('dashboard.setting');

    Route::get('/admin/dashboard/profile/', Profile::class)->name('dashboard.profile');
    Route::get('/admin/dashboard/contact/', ContactController::class)->name('dashboard.contact');
});
