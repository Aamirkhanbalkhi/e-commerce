<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bannerRequest;
use App\Models\Admin\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class bannerController extends Controller
{
    // ADD BANNER FUNCTION
    public function addbanner()
    {
        return view('Admin.banner.addbanner');
    }

    // CREATE BANNER FUNCTION
    public function createBanner(Request $req)
    {
        $param = $req->all();
        $banner = Banner::create($param);

        $directory = public_path('uploads');
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($directory, $filename);
            $banner->image = '' . $filename;
        }
        $banner->save();

        return redirect()->route('banner')->with('status', 'Your banner has been inserted successfully');
    }

    // SHOW BANNER FUNCTION
    public function banner()
    {
        $data['banners'] = banner::all();
        // dd($data);
        return view('Admin.banner.banner', $data);
    }

    // DELETE BANNER
    public function deletebanner(banner $banner)
    {
        $banner->delete();
        return redirect()->route('banner')->withStatus('Delete successfully');
    }

    // EDIT BANNER
    public function editbanner($banner)
    {
        $data['banner'] = banner::find($banner);
        return view('Admin.banner.edit-banner', $data);
    }

    // UPDATE BANNER
    public function updateBanner($id, Request $req)
    {
        $banner = Banner::find($id);
        $param = $req->all();

        $directory = public_path('uploads');
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($directory, $filename);
            $param['image'] = '' . $filename;
        }
        $banner->update($param);

        return redirect()->route('banner')->with('status', 'Your banner has been updated successfully');
    }
}
