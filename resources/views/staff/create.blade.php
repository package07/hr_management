<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<br/>
            <div class="row">
                 <h2 style="center">Add Staff Register</h2>
            </div>
            <div class="row">
                <div class="col-md-12">

                <div class="row">
                </div>
                    <form action="{{route('staff.store')}}" method="post">
                        @csrf
                        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="birthday">Birthday</label>
      <input class="date form-control" type="text" placeholder="Birthday" required>
      <script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script> 
    </div>
  <div class="form-group col-md-6">
    <label for="position">Position</label>
    <select  class="custom-select custom-select-lg mb-3">
  <option selected style="color:gray">Position</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">four</option>
  <option value="5">five</option>
  <option value="6">six</option>
</select>
</div>
  
  </div>
  <div class="form-group">
  <label for="division">Divisoin</label>
    <select  class="custom-select custom-select-lg mb-3">
  <option selected style="color:gray">Position</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">four</option>
  <option value="5">five</option>
  <option value="6">six</option>
</select>  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
                       
    <a href="{{route('staff')}}"><input type="button" class="btn btn-danger" value="Cancel"></a>
</form>
                </div>
            </div>
        </div>
</body>
</html>