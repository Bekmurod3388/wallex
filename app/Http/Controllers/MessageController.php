<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;



class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Messages::orderBy('id','desc')->paginate(10);
        return view('admin.messages.index')->with('messages', $messages);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'country' => 'required',
            'trustelem' => [],
            'bastion' => [],
            'bestsafe' => [],
            'text' =>'required'
        ]);



        Messages::create($request->all());
        return response()->json(['success'=>'Form is successfully submitted!']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messages  $message
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Messages $message)
    {
        Messages::where('id', $message->id);
        return view('admin.messages.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messages $message
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Messages $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index')
            ->with('success','Данные успешно удалены');
    }
}
