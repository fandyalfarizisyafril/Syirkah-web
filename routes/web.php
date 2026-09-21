<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'company' => config('company'),
        'title' => 'Company Profile',
        'description' => config('company.description'),
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'company' => config('company'),
        'title' => 'About Company',
        'description' => 'Profil, fokus, value, dan legal information PT. Syirkah Mandiri Artomoro.',
    ]);
})->name('about');

Route::get('/products', function () {
    $products = collect(config('company.products'));
    $search = request('search');
    $category = request('category');

    if ($search) {
        $products = $products->filter(fn ($product) => str_contains(strtolower($product['name'].' '.$product['brand'].' '.$product['summary']), strtolower($search)));
    }

    if ($category) {
        $products = $products->where('category', $category);
    }

    return view('products.index', [
        'company' => config('company'),
        'products' => $products->values()->all(),
        'allProducts' => config('company.products'),
        'categories' => collect(config('company.products'))->pluck('category')->unique()->values()->all(),
        'activeSearch' => $search,
        'activeCategory' => $category,
        'title' => 'Products & Solutions',
        'description' => 'Katalog produk dan solusi teknis PT. Syirkah Mandiri Artomoro.',
    ]);
})->name('products.index');

Route::get('/products/{slug}', function (string $slug) {
    $product = collect(config('company.products'))->firstWhere('slug', $slug);

    abort_if(! $product, 404);

    return view('products.show', [
        'company' => config('company'),
        'product' => $product,
        'title' => $product['name'],
        'description' => $product['summary'],
    ]);
})->name('products.show');

Route::get('/brands', function () {
    return view('brands.index', [
        'company' => config('company'),
        'brands' => config('company.brands'),
        'title' => 'Brands & Principals',
        'description' => 'Brand dan principal yang mendukung solusi produk PT. Syirkah Mandiri Artomoro.',
    ]);
})->name('brands.index');

Route::get('/brands/{slug}', function (string $slug) {
    $brand = collect(config('company.brands'))->firstWhere('slug', $slug);

    abort_if(! $brand, 404);

    $products = collect(config('company.products'))
        ->where('brand', $brand['name'])
        ->values()
        ->all();

    return view('brands.show', [
        'company' => config('company'),
        'brand' => $brand,
        'products' => $products,
        'title' => $brand['name'],
        'description' => $brand['description'],
    ]);
})->name('brands.show');

Route::get('/industries', function () {
    return view('industries', [
        'company' => config('company'),
        'title' => 'Industrial Solutions',
        'description' => 'Solusi industri lintas sektor dari PT. Syirkah Mandiri Artomoro.',
    ]);
})->name('industries');

Route::get('/contact', function () {
    return view('contact', [
        'company' => config('company'),
        'title' => 'Contact',
        'description' => 'Alamat, nomor telepon, email, dan inquiry PT. Syirkah Mandiri Artomoro.',
    ]);
})->name('contact');

Route::get('/inquiry', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
