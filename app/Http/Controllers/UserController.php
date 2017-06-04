<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('pages.adminProfile', compact('user'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
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
    public function update(UserRequest $request, $id)
    {
        $input = $request->all();
        $user = Auth::user();
        $current_password = Auth::user()->password;
        $check = Hash::check($input['old_password'], $current_password);

        if(!is_null($input['password']) && $check) {
            if(strlen($input['password']) < 6){
                Session::flash('deleted', 'رمز عبور باید حداقل 6 حرف باشد');
            }else{
                $input['password'] = bcrypt($request->password);
                $user->update($input);
                Session::flash('created', 'اطلاعات شما ویرایش شد و رمز عبور شما تغییر کرد');
            }
        }elseif(is_null($input['password']) && $check){
            $input = $request->except('password');
            $user->update($input);
            Session::flash('created', 'اطلاعات شما ویرایش شد');
        }else{
            Session::flash('deleted', 'رمز عبور فعلی اشتباه است');
        }

        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
