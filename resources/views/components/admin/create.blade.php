@extends("layouts.index")

@section('title')
Üye
@endsection

@section('css')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form  method="post">
        @csrf
        <div class="form-group">
            <label>İsim </label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group mt-2">
            <label>Soyisim</label>
            <input type="text" name="surname" class="form-control" value="{{old('surname')}}">
        </div>
        <div class="form-group mt-2">
            <label>E-mail</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}}">
        </div>
        <div class="form-group mt-2">
            <label>Telefon</label>
            <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
        </div>
        <div class="form-group mt-2">
            <label>Tipi</label>
            <input type="text" name="type class="form-control" value="{{old('type')}}">
        </div>
        <div class="form-group mt-2">
            <label>Seviye</label>
            <input type="text" name="level" class="form-control" value="{{old('level')}}">
        </div>
        <div class="form-group mt-2">
            <label>Resim</label>
            <input type="text" name="profile" class="form-control" value="{{old('profile')}}">
        </div>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-success btn-sm btn-block">Üye Ekle</button>
        </div>
        </form>
    </div>
</div>
@endsection
