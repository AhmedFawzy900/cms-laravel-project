<?php

namespace App\Http\Controllers;
use App\Models\Media as ModelsMedia;
use Illuminate\Http\Request;

class Media1Controller extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']] );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = ModelsMedia::latest()->paginate(6);
        return view('media.index')->with('media',$media); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');

        $photoName = $file->getClientOriginalName();
        $updatedPhotoName = time() . '_' . $photoName;

        $file->move('photos',  $updatedPhotoName);

        $media = new ModelsMedia;
        $media->name = $updatedPhotoName;
        $media->user_id = auth()->user()->id;
        
        $media->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $media=ModelsMedia::findOrFail($id);
        return view('media.show')->with('media',$media);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = ModelsMedia::findOrFail($id);
        // to delete the photo from photo file
        unlink('./photos/'. $media->name);
        $media->delete();
        return redirect('/media')->with('delete','media deleted');
    }
}
