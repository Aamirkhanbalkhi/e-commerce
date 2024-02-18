<?php

use App\Http\Controllers\Admin\bannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Frontend\homeController;
use App\Http\Controllers\Frontend\wishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

## ADMIN ROUTERS

Route::group(['prefix' => 'admin'], function () {

    route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');

    ## CATEGRIES ROUTE
    route::get('/categries', [CategoryController::class, 'Categries'])->name('categries');
    route::get('/add-category', [CategoryController::class, 'AddCategory'])->name('add.category');
    route::match(['GET', 'POST'], '/addcategory', [CategoryController::class, 'StoreCategory'])->name('addcate');
    route::match(['GET', 'POST'], '/delete-category/{category}', [CategoryController::class, 'deletecategory'])->name('delete.category');
    route::match(['GET', 'POST'], '/edit-category/{category:category_slug}', [CategoryController::class, 'editcategory'])->name('edit.category');
    route::match(['GET', 'POST'], '/update-category/{category:category_slug}', [CategoryController::class, 'updatecategory'])->name('update.category');

    ## SUBCATEGRIES ROUTE
    route::get('/subcategries', [CategoryController::class, 'SubCategries'])->name('subcategries');
    route::get('/add-subcategory', [CategoryController::class, 'AddSubCategory'])->name('add.subcategory');
    route::match(['GET', 'POST'], '/add-sub-category', [CategoryController::class, 'storeSubCategory'])->name('addsubcate');
    route::match(['GET', 'POST'], '/delete-sub-category/{subcategory}', [CategoryController::class, 'deletesubcategory'])->name('delete.subcategory');
    route::match(['GET', 'POST'], '/edit-sub-category/{subcategory:sub_category_slug}', [CategoryController::class, 'editsubcategory'])->name('edit.subcategory');
    route::match(['GET', 'POST'], '/update-sub-category/{subcategory:sub_category_slug}', [CategoryController::class, 'updatesubcategory'])->name('update.subcategory');

    // PRODUCT ROUTES
    route::get('/products', [ProductController::class, 'Products'])->name('products');
    ## ADD-PRODUCTS ROUTE
    route::get('/add-product', [ProductController::class, 'AddProduct'])->name('add.product');
    route::match(['GET', 'POST'], '/add-new-product', [ProductController::class, 'StoreProduct'])->name('store.product');
    route::match(['GET', 'POST'], '/delete-product/{product}', [ProductController::class, 'deleteproduct'])->name('delete.product');
    route::match(['GET', 'POST'], '/edit-product/{product:rference}', [ProductController::class, 'editProduct'])->name('edit.product');
    route::match(['GET', 'POST'], '/update-product/{product:reference}', [ProductController::class, 'updateProduct'])->name('update.product');

    // BANNER Routes

    route::match(['get', 'post'], '/banner', [bannerController::class, 'banner'])->name('banner');
    route::match(['get', 'post'], '/add-banner-page', [bannerController::class, 'addbanner'])->name('addbanner');
    route::match(['get', 'post'], '/add-banner', [bannerController::class, 'createBanner'])->name('add.banner');
    route::match(['get', 'post'], '/delete-banner/{banner}', [bannerController::class, 'deletebanner'])->name('delete.banner');
    route::match(['get', 'post'], '/edit-banner/{id}', [bannerController::class, 'editbanner'])->name('edit.banner');
    route::match(['get', 'post'], '/update-banner/{id}', [bannerController::class, 'updatebanner'])->name('update.banner');

    ## Customer Routes

    Route::match(['GET', 'POST'], '/customers', [CustomerController::class, 'customers'])->name('customers');
    Route::match(['GET', 'POST'], '/add-customer', [CustomerController::class, 'addcustomer'])->name('addcustomer');
    Route::match(['GET', 'POST'], '/store-customer', [CustomerController::class, 'storecustomer'])->name('storecustomer');
    Route::match(['GET', 'POST'], '/edit-customer/{id}', [CustomerController::class, 'editcustomer'])->name('editcustomer');
    Route::match(['GET', 'POST'], '/update-customer/{id}', [CustomerController::class, 'updatecustomer'])->name('updatecustomer');
    Route::match(['GET', 'POST'], '/delete-customer/{customer}', [CustomerController::class, 'deletecustomer'])->name('deletecustomer');

    ## Order Routes

    Route::match(['GET', 'POST'], '/orders', [OrderController::class, 'order'])->name('order');
    Route::match(['GET', 'POST'], '/order-detail', [OrderController::class, 'orderdetails'])->name('orderdetails');
    Route::match(['GET', 'POST'], '/sellers', [OrderController::class, 'sellers'])->name('sellers');
    Route::match(['GET', 'POST'], '/add-seller', [OrderController::class, 'addseller'])->name('addseller');
    Route::match(['GET', 'POST'], '/store-seller', [OrderController::class, 'storeseller'])->name('storeseller');
    Route::match(['GET', 'POST'], '/edit-seller/{id}', [OrderController::class, 'editseller'])->name('editseller');
    Route::match(['GET', 'POST'], '/update-seller/{id}', [OrderController::class, 'updatesller'])->name('updatesller');
    Route::match(['GET', 'POST'], '/delete-seller/{seller}', [OrderController::class, 'deletseller'])->name('deletseller');

    ## Shop Routes

    Route::match(['GET', 'POST'], '/shop-cart', [ShopController::class, 'shopcart'])->name('shopcart');
    Route::match(['GET', 'POST'], '/checkout', [ShopController::class, 'checkout'])->name('checkout');
});


// WEBSITE ROUTES

route::match(['get', 'post'], '/shop-home', [homeController::class, 'home'])->name('home.page');
route::match(['get', 'post'], '/about', [homeController::class, 'about'])->name('about.page');
route::match(['get', 'post'], '/contact-us', [homeController::class, 'contact'])->name('contact.page');
route::match(['get', 'post'], '/product-list/{categoryName}', [homeController::class, 'productList'])->name('product.list');
route::match(['get', 'post'], '/product-detail/{productDetail?}', [homeController::class, 'productDetails'])->name('product.detail');
route::match(['get', 'post'], '/shop-wishlist', [wishlistController::class, 'wishlist'])->name('wishlist');
route::match(['get', 'post'], '/add-wishlist/{id?}', [wishlistController::class, 'addWishlist'])->name('add.wishlist');
route::match(['get', 'post'], '/remove-wishlist/{wishlistId}', [wishlistController::class, 'removeWishlist'])->name('removeToWishlist');
route::match(['get', 'post'], '/shop-cartlists', [wishlistController::class, 'cart'])->name('cart');
route::match(['get', 'post'], '/add-to-cart/{id?}', [wishlistController::class, 'addToCart'])->name('add.cart');
route::match(['get', 'post'], '/remove-cart/{cartId}', [wishlistController::class, 'removeCart'])->name('removeToCart');


Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
