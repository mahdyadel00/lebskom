<?php

namespace App\Http\Controllers\Seller;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Model\Seller;
use App\Model\Brand;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Translation;

class BrandController extends Controller
{
    public function add_new()
    {
        $br = Brand::latest()->paginate(Helpers::pagination_limit());
        return view('seller-views.brand.add-new', compact('br'));
    }

    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->name[array_search('en', $request->lang)];
        $brand->image = ImageManager::upload('brand/', 'png', $request->file('image'));
        $brand->status = 1;
        $brand->save();

        foreach($request->lang as $index=>$key)
        {
            if($request->name[$index] && $key != 'en')
            {
                Translation::updateOrInsert(
                    ['translationable_type'  => 'App\Model\Brand',
                        'translationable_id'    => $brand->id,
                        'locale'                => $key,
                        'key'                   => 'name'],
                    ['value'                 => $request->name[$index]]
                );
            }
        }
        Toastr::success('Brand added successfully!');
        return back();
    }


}
