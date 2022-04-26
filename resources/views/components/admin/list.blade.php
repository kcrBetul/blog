<div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Type</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Profile</th>
          </tr>
        </thead>
        <tbody>
            @foreach($uye as $uyeler)
          <tr>
            <td>{{$uyeler->name}}</td>
            <td>{{$uyeler->surname}}</td>
            <td>{{$uyeler->email}}</td>
            <td>{{$uyeler->phone}}</td>
            <td>{{$uyeler->type}}</td>
            <td>{{$uyeler->level}}</td>
            <td>{{$uyeler->profile}}</td>
          </tr>
           @endforeach
        </tbody>
      </table>
</div>
