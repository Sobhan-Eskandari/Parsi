<?php

namespace App\Http\Controllers;

use App\Http\Requests\LecturerRequest;
use App\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::orderByRaw('created_at desc')->paginate(4);
        return view('pages.speakers', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LecturerRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        Lecturer::create($input);
        Session::flash('created', 'سخنران جدید اضافه شد');
        return redirect(route('lecturers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        return view('pages.editLecturer', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(LecturerRequest $request, Lecturer $lecturer)
    {
        $input = $request->all();
        if($file = $request->file('image')){
            if($lecturer->image){
                File::delete('images/' . $lecturer->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        $lecturer->update($input);
        Session::flash('edited', 'اطلاعات سخنران ویرایش شد');
        return redirect(route('lecturers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        if($lecturer->image){
            File::delete('images/' . $lecturer->image);
        }
        $lecturer->delete();
        Session::flash('deleted', 'سخنران مورد نظر پاک شد');
        return redirect(route('lecturers.index'));
    }
}
