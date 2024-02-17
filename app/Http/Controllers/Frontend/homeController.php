<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\banner;
use App\Models\Admin\Category;
use App\Models\Admin\product;
use App\Models\cart;
use App\Models\User;
use App\Models\wishlist;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // HOME PAGE FUNCTION
    public function home()
    {
        $cartno =  cart::where('user_id', auth()->id())->count();
        $wishlistno =  wishlist::where('user_id', auth()->id())->count();
        $categories = Category::all(); // Fetch all categories
        $categoryProducts = [];

        foreach ($categories as $category) {
            $products = Product::join('category', 'products.category_id', '=', 'category.id')
                ->where('category.category_name', $category->category_name)
                ->where('products.status', 'In Stock')
                ->take(10)
                ->get();

            $categoryProducts[$category->category_name] = $products;
        }

        $banners = banner::take(2)->get();
        $banners2 = banner::skip(2)->take(3)->get();
        $banners3 = banner::skip(5)->take(1)->get();
        $categorys = category::all();
        // dd($banners3);
        return view('frontend.home', compact('categoryProducts', 'banners', 'banners2', 'banners3', 'categorys', 'wishlistno', 'cartno'));
    }

    // ABOUT PAGE FUNCTION
    public function about()
    {
        $cartno =  cart::where('user_id', auth()->id())->count();
        $wishlistno =  wishlist::where('user_id', auth()->id())->count();
        $categorys = Category::all();
        return view('frontend.about', compact('categorys', 'wishlistno', 'cartno'));
    }

    // CONTACT PAGE FUNCTION
    public function contact()
    {
        $cartno =  cart::where('user_id', auth()->id())->count();
        $wishlistno =  wishlist::where('user_id', auth()->id())->count();
        $categorys = Category::all();
        return view('frontend.contact', compact('categorys', 'wishlistno', 'cartno'));
    }

    // PRODUCT LIST FUNCTION
    public function productList($categoryName)
    {
        $categorys = Category::all();
        $wishlistno =  wishlist::where('user_id', auth()->id())->count();
        $cartno =  cart::where('user_id', auth()->id())->count();

        $detaillist = Product::join('category', 'products.category_id', '=', 'category.id')
            ->where('category.category_slug', $categoryName)
            ->where('products.status', 'In Stock')
            ->get();

        return view('frontend.product-list', compact('categorys', 'detaillist', 'wishlistno', 'cartno'));
    }

    // PRODUT DETAIL FUNCTION
    public function productDetails($productDetail)
    {
        $cartno =  cart::where('user_id', auth()->id())->count();
        $wishlistno =  wishlist::where('user_id', auth()->id())->count();
        $user = User::first();
        $categorys = Category::all();
        // dd($user);
        $productDetail = Product::join('category', 'products.category_id', '=', 'category.id')
            ->where('products.reference', $productDetail)
            // ->where('products.status', 'In Stock')
            ->select('products.*')
            ->first();
        // dd($productDetail);
        return view('frontend.product-detail', compact('categorys', 'user', 'productDetail', 'wishlistno', 'cartno'));
    }
}
