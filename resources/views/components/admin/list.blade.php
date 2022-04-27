@extends("layouts.index")

@section('title')
Üye
@endsection

@section('css')
<style>
  .table{
    color:white;
    background-color:#0a1124;;
  }
  .card{
    background-color: #0a1124;
  }
</style>
@endsection
@section('content')
<br><br><br><br><br>
<div class="card mt-5">
    <div class="card-body">
        <h5 class="card-title"> <a class="btn btn-sm btn-danger"></a>Üyeler listesi</h5>
        <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>E-mail</th>
                      <th>Phone</th>
                      <th>Type</th>
                      <th>Level</th>
                      <th>Profile</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($uyeler as $uye)
                    <tr>
                      <td>{{$uye->name}}</td>
                      <td>{{$uye->surname}}</td>
                      <td>{{$uye->email}}</td>
                      <td>{{$uye->phone}}</td>
                      <td>{{$uye->type}}</td>
                      <td>{{$uye->level}}</td>
                      <td>{{$uye->profile}}</td>
                    </tr>
                     @endforeach
                  </tbody>
          </table>
      {{-- {{$uyeler->links()}} --}}
    </div>
</div>
@endsection



