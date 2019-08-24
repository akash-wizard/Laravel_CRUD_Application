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
           <form action="/store_data" method="POST">
             {{csrf_field()}}
              <div class="form-group">
                <label for="email">Email address:</label>
                <input name="email" type="email" class="form-control" id="email">6
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input name="password" type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="sel1">City:</label>
                <select class="form-control" id="sel1">
                  <option value="Mumbai">Mumbai</option>
                  <option value="Pune">Pune</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Thane">Thane</option>
                </select>
              </div>
              <label>Hobbies:</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="kho-kho[]">kho-kho
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Hocky">Hocky
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value="Football">Football
                </label>
              </div>
              <br>
              <label>Gender:</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio" value="Male">Male
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio" value="Female">Female
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio" value="Others">Others
                </label>
              </div>
              <br>
              <div class="form-group">
                <label for="comment">Address:</label>
                <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
        </div>
    </div>
</body>
</html>