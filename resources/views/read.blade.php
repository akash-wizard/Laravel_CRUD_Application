  <!DOCTYPE html>
<html>
<head>
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('layouts.header')
    <br>
    <br>

    <!-- {{$data}} -->
    <div class="container">
      <div class="row">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Email</th>
              <th>Password</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $d)
            <tr>
              <td>{{$d->email}}</td>
              <td>{{$d->password}}</td>
              <td>
                <a href="/delete_data/{{$d->id}}" class="btn btn-info">Delete</a>
                <a href="/edit_data/{{$d->id}}" class="btn btn-info">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>