<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uyeler = User::get();
        return view('components.admin.list',compact('uyeler'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {

    $veri = [
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'phone' => $request->phone,
        'type' => $request->type,
        'password' => md5($request->password),
        'level' => $request->level,
        'profile' => $request->profile,

    ];

    User::create($veri);
     return redirect()->route('uyeler.index')->withSuccess('Üye başarı ile gerçekleştirdi');


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

        $uye = User::whereId($id)->first();

        if ($uye) {

            return view('components.admin.edit',compact('uye'));


        }
        else{

            return redirect()->route('uyeler.index');
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

      $update = ([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => md5($request->password),
            'level' => $request->level,
            'profile' => $request->profile,
        ]);

        User::whereId($id)->update($update);
        return redirect()->route('uyeler.index', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uyeler = User::whereId($id)->first();
        if ($uyeler) {
           User::whereId($id)->delete();
        }
        return redirect()->route('uyeler.index');
    }
}




