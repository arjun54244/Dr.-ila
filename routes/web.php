<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\YouTubeService;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('home');
})->name('home');
Route::view('/ckeditor', 'ckeditor');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::resource('posts', BlogsController::class);
Route::resource('/services', ServiceController::class);
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::view('/videos', 'videos')->name('videos');
Route::view('/web', 'web')->name('web');
Route::get('/services/search', [ServiceController::class, 'search'])->name('services.search');
Route::get('/upload', function(){
    $sourcePath = storage_path('app/public/blog/');
    $destinationPath = public_path('storage/blog/');

    // Ensure the destination directory exists
    if (!File::exists($destinationPath)) {
        File::makeDirectory($destinationPath, 0755, true);
    }

    // Clean the destination directory
    if (File::exists($destinationPath)) {
        File::deleteDirectory($destinationPath);
        File::makeDirectory($destinationPath, 0755, true);
    }

    // Get all files recursively in the source directory
    $files = File::allFiles($sourcePath);

    foreach ($files as $file) {
        // Log the file path
        Log::info('File found: ' . $file->getPathname());

        // Define the target path for the file
        $targetPath = $destinationPath . '/' . $file->getRelativePathname();

        // Ensure subdirectories exist in the target
        $targetDir = dirname($targetPath);
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        // Copy the file to the destination
        File::copy($file->getPathname(), $targetPath);
    }
    return redirect()->route('blog.index');
});



// Route::get('/dashboard', function () {
//     return view('admin.home');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });