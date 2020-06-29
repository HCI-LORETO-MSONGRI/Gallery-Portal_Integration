<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use DB;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        $ac_galleries = Gallery::where('category','Academic')->get();
        $cc_galleries = Gallery::where('category','cocurricular')->get();
        $sp_galleries = Gallery::where('category','sports')->get();
        $aw_galleries = Gallery::where('category','awards')->get();
        $mw_galleries = Gallery::where('category','mwday')->get();
        return view('pages.gallery',[
            'galleries'=>$galleries,
            'ac_galleries'=>$ac_galleries,
            'cc_galleries'=>$cc_galleries,
            'sp_galleries'=>$sp_galleries,
            'aw_galleries'=>$aw_galleries,
            'mw_galleries'=>$mw_galleries]);
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('pages.gallery',[
            'galleries'=>$galleries,
            'ac_galleries'=>$ac_galleries,
            'cc_galleries'=>$cc_galleries,
            'sp_galleries'=>$sp_galleries,
            'aw_galleries'=>$aw_galleries,
            'mw_galleries'=>$mw_galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_photo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'image|required|max:1999'
        ]); 
        //handle file upload
            if ($request->hasFile('image')) {
                //get file name with .ext
                $filename_ext = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
                $ext = $request->file('image')->getClientOriginalExtension();

                $filename_todb = $filename.'_'.time().'.'.$ext;
                $path = $request->file('image')->storeAs('public/gallery',$filename_todb);
            }

        $gallery = new Gallery;
        $gallery->name = $filename_todb;
        $gallery->category = $request->input('category');
        $gallery->caption = $request->input('caption');
        $gallery->save();

        return redirect('/galleries/create')->with('success','Media Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('pages.edit_photo')->with('gallery',$gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        if ($request->hasFile('image')) {
            //get file name with .ext
            $filename_ext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filename_ext, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();

            $filename_todb = $filename.'_'.time().'.'.$ext;
            $path = $request->file('image')->storeAs('public/gallery',$filename_todb);
        }
        $gallery =  Gallery::find($id);
        if ($request->input('image')) {
            $gallery->name = $filename_todb;
        }
        if ($request->input('category')) {
            $gallery->category = $request->input('category');
        }
        if ($request->input('caption')) {
            $gallery->caption = $request->input('caption');
        }
        $gallery->save();

        return redirect('/galleries')->with('success','Media updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
