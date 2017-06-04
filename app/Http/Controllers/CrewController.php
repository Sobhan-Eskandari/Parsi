<?php

namespace App\Http\Controllers;

use App\Crew;
use App\Http\Requests\CrewRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crews = Crew::orderByRaw('created_at desc')->paginate(4);
        return view('pages.staff', compact('crews'));
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
    public function store(CrewRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('image')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        Crew::create($input);
        Session::flash('created', 'کادر اجرایی جدید ساخته شد');
        return redirect(route('crews.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function show(Crew $crew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function edit(Crew $crew)
    {
        return view('pages.editStaff', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crew $crew)
    {
        $input = $request->all();
        if($file = $request->file('image')){
            if($crew->image){
                File::delete('images/' . $crew->image);
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }
        $crew->update($input);
        Session::flash('edited', 'اطلاعات کادر اجرایی ویرایش شد');
        return redirect(route('crews.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crew  $crew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crew $crew)
    {
        if($crew->image){
            File::delete('images/' . $crew->image);
        }
        $crew->delete();
        Session::flash('deleted', 'کادر اجرایی مورد نظر پاک شد');
        return redirect(route('crews.index'));
    }
}
