<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


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

        $validator = validator::make($request->all(),
        [
            'name' => 'required|name',
            'surname' => 'required|surname',
            'email' => 'required|email',
            'phone' => 'required|phone',
            'type' => 'required|type',
            'password' => 'required',
            'level' => 'required|level',


        ],[
            'name.required' => 'Name alanı boş bırakılaz.',
            'name.name' => 'Lütfen isim giriniz.',
            'surname.required' => 'Surname alanı boş bırakılamaz.',
            'surname.surname' => 'Lütfen soyisminizi giriniz.',
             'email.rquired' => 'Email alanı boş bırakılaz.',
             'email.email' => 'Lütfen emailinizi giriniz.',
             'phone.required' => 'Phone alanı boş bırakılamaz.',
             'phone.phone' => 'Lütfen telefon numaranızı giriniz.',
             'type.required' => 'Type alanı boş bırakılamaz.',
             'type.type' => 'Lütfen Veri giriniz.',
             'password.required' => 'password alanı boş bırakılamaz.',
             'level.required' => 'Level alanı boş bırakılamz.',
             'level.level' => 'Lütfen veri giriniz.',



        ]);



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

    public function kayit(UserCreateRequest $request){

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
  return redirect()->route('admin.kayit');

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
    public function update(Request $request)
    {
      $update = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'password' => md5($request->password),
            'level' => $request->level,
            'profile' => $request->profile,
        ];

        $user = User::where('id', $request->id)->first();

        if($user){

            $user->update($update);
            return redirect()->route('uyeler.index', $request->id);
        }

        return redirect()->route('uyeler.index', $request->id);

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




