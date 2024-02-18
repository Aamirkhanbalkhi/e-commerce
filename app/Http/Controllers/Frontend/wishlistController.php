<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\product;
use App\Models\cart;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\countOf;

class wishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    ## Function to Show all-Wishlist

    public function wishlist()
    {
        $data['categorys'] = Category::all();
        $data['cartno'] =  cart::where('user_id', auth()->id())->count();
        $data['wishlistno'] =  wishlist::where('user_id', auth()->id())->count();
        $data['wishlistItems'] = Wishlist::where('user_id', auth()->id())->with('product')->get();
        // dd($wishlistno);

        return view('frontend.wishlist', $data);
    }

    ## Function to add-Wishlist

    public function addWishlist(Request $request, $productId)
    {
        $existingWishlist = Wishlist::where('user_id', auth()->id())
            ->where('product_id', $productId)
            ->first();

        if ($existingWishlist) {
            throw ValidationException::withMessages([
                'product_id' => ['This product is already in your wishlist.'],
            ]);
        }

        Wishlist::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
        ]);

        return redirect()->back()->withStatus('Product added to wishlist.');
    }

    ## Function to remove Wishlist

    public function removeWishlist($wishlistId)
    {
        $wishlist = Wishlist::where('id', $wishlistId);
        if ($wishlist) {
            $wishlist->delete();
        }
        return redirect()->route('wishlist')->withStatus('Your Wishlist Deleted!');
    }

    ## Function to Show Cart Details

    public function cart()
    {
        // $data = wishlist::join('products', 'products.id', '=', 'wishlists.product_id')
        //     ->where('wishlists.user_id', auth()->id())
        //     ->get();
        // dd($data);

        $data['categorys'] = Category::all();
        $data['wishlistno'] =  wishlist::where('user_id', auth()->id())->count();
        $data['cartno'] =  cart::where('user_id', auth()->id())->count();
        $data['cartitems'] = cart::where('user_id', auth()->id())->with('product')->get();
        // dd($cartitems);

        return view('frontend.add-to-cart', $data);
    }

    ## Function to add to cart

    public function addToCart(Request $request, $productId)
    {
        $existingWishlist = cart::where('user_id', auth()->id())
            ->where('product_id', $productId)
            ->first();

        if ($existingWishlist) {
            throw ValidationException::withMessages([
                'product_id' => ['This product is already in your Cart.'],
            ]);
        }

        cart::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
        ]);

        // dd($a);
        return redirect()->back()->withStatus('Product added to cart.');
    }

    ## Function to Remove Cart

    public function removeCart($cartId)
    {
        $cart = cart::where('id', $cartId);
        if ($cart) {
            $cart->delete();
        }
        return redirect()->route('cart')->withStatus('Your Cart Delete!');
    }
}
