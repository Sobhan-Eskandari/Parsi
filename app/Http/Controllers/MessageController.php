<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageAnswerRequest;
use App\Http\Requests\MessageStoreRequest;
use App\Mail\AnswerMessage;
use App\Message;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderByRaw('created_at desc')->paginate(5);
        return view('pages.pms', compact('messages'));
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
    public function store(MessageStoreRequest $request)
    {
        if(Message::create($request->all())){
            Session::flash('created', 'پیام ارسال شد');
        }else{
            Session::flash('deleted', 'پیام ارسال نشد');
        }
        return redirect('/#contactDown');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $message->read = 1;
        $message->save();
        return view('pages.answerMsg', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        Session::flash('deleted', 'پیام مورد نظر با موفقیت پاک شد');
        return redirect(route('messages.index'));
    }

    public function answer(MessageAnswerRequest $request)
    {
        $input = $request->all();
        Mail::to($input['email'])->send(new AnswerMessage($input));
        Session::flash('created', 'ایمیل با موفقیت ارسال شد');
        return redirect(route('messages.index'));
    }
}
