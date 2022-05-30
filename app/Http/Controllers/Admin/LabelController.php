<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\LabelCreateRequest;
use App\Http\Requests\LabelUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Label;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiketler = Label::get();
        return view('components.admin.liste', compact('etiketler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('components.admin.ekle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LabelCreateRequest $request)
    {
        $veri = [
            'name'=>$request->name,
        ];
        Label::create($veri);
        return redirect()->route('etiketler.index');
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
        $uye = Label::whereId($id)->first();
        if ($uye) {
            return view('components.admin.duzen',compact('uye'));
        }
        else{
            return redirect()->route('etiketler.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LabelUpdateRequest $request, $id)
    {
         $update = ([
            'name' => $request->name,
         ]);
         Label::whereId($id)->update($update);
         return redirect()->route('etiketler.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etiket = Label::whereId($id)->first();
        if($etiket){
            Label::whereId($id)->delete();
        }
        return redirect()->route('etiketler.index');
    }
}


