<?php

namespace App\Http\Controllers\Backend\Patient;

use App\Http\Controllers\Controller;
use App\Models\MedicalHistory;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MedicalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = MedicalHistory::orderBy('created_at','DESC')->where('user_id',Auth::id())->paginate(20);
        return view('backend.patients.pages.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.patients.pages.createPost');
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
            'title' => 'required',
            'doctor' => 'required',
            'appointedDate' => 'required',
            'image' =>'required|image',
            'description' => 'required',
        ]);
        $post = MedicalHistory::create([
            'title' => $request->title,
            'doctor' => $request->doctor,
            'appointedDate' => $request->appointedDate,
            'image' => 'image.jpg',
            'description' => $request->description,
            'user_id' => Auth::id(),

        ]);
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('storage/images',$image_new_name);
            $post->image = '/storage/images/'.$image_new_name;
        }

        $post->save();
        Session::flash('success','History Saved Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = MedicalHistory::findOrFail($id);
        return view('backend.patients.pages.showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = MedicalHistory::findOrFail($id);
        if($post){
            if(file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }
            $post->delete();
            Session::flash('success','Post Deleted Successfully');
            return redirect()->back();
        }
    }
}
