<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;

class galleryController extends Controller
{
    function gallery(){
        // return view('admin.gallery');
        $gallerylists = gallery::all();
    	return view('admin.gallery',compact('gallerylists')); 
    }

    // insert_image
    function insert_image(Request $request)
    {
      $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png,JPG,webp',
      ],
      [
          'image.required' => 'Choose jpg/jpeg/png/JPG/webp file!'
      ]); 

     //image insert
      $image= $request->file('image'); //('image') is form field name
       $image_name=hexdec(uniqid());
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/admin/image/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);

      //end 

       //whole form insert in db
       $state = gallery::insert([ 
        'image'=> $image_url,
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'Image was Added' );

    }
    
    // deleteImage 
    function deleteImage($id)
    {
    	gallery::findOrFail($id)->delete();
    	// return back();
        return redirect()->back()->with('alert', 'Image was deleted' );
    }


// end
}
