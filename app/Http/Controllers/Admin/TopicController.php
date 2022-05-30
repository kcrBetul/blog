<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Label;
use App\Http\Controllers\TopicCreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $a = Topic::join('users', 'users.id', '=', 'topics.user_id')->get();

        $uyeler = DB::table('users')->join('topics','user_id', '=', 'topics.id')->toSql();


        $konular = Topic::get();

        return view('components.admin.tplist',compact('konular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labels = Label::get();
        return view('components.admin.tpekle', compact('labels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veri = [
           'title' => $request->title,
           'user_id' => $request->user_id,
           'ticket_id' => $request->ticket_id,
           'contents' => $request->contents,
        ];
        Topic::create($veri);
        return redirect()->route('konular.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $konu = Topic::whereId($id)->first();
       if($konu){
           return view('components.admin.tpduzen',compact('konu'));
       }
       else{
           return redirect()->route('konular.index');
       }
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
        $update = ([
           'title' => $request->title,
           'user_id' => $request->user_id,
           'ticket_id' => $request->ticket_id,
           'contents' => $request->contents,
        ]);
        Topic::whereId($id)->update($update);
        return redirect()->route('konular.index',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $konular = Topic::whereId($id)->first();
       if($konular){
         Topic::whereId($id)->delete();
       }
       return redirect()->route('konular.index');
        }
}
