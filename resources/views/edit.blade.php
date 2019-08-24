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
    <div class="container">
        <div class="row">

          <!-- {{$data}} -->
           <form action="/update_data/{{$data->id}}" method="POST">
             {{csrf_field()}}
              <div class="form-group">
                <label for="email">Email address:</label>
                <input name="email" type="email" class="form-control" id="email" value="{{$data->email}}">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input name="password" type="password" class="form-control" id="pwd" value="{{$data->password}}">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
    </div>
</body>
</html>