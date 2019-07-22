<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<div class="container">
           
              <div class="text-center" style="color:red">
                <h2>Edit Profile {{$id}} </h2>
               </div>
                    <br>
                    <form action="{{route('staff.update')}}" method="post" class="form-horizontal" role="form">
                        @csrf       
                <div class="form-group">
                    <label for="telephone" class="col-sm-2 control-label">Phone number*</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="telephone" placeholder="Phone number" name="telephone"  class="form-control" required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="position" class="col-sm-2 control-label">Position*</label>
                    <div class="col-sm-9">
                    <select class="form-control form-control-lg" name="position" required>
                       <option selected >Position</option>
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
                        <label for="division" class="col-sm-2 control-label">Division*</label>
                    <div class="col-sm-9">
                    <select class="form-control form-control-lg" name="division" required>
                       <option selected >Division</option>
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
                    <label for="division_id" class="col-sm-2 control-label">Division ID*</label>
                    <div class="col-sm-9">
                        <input type="number" id="division_id" placeholder="Division ID" name="division_id" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="salary" class="col-sm-2 control-label">Salary</label>
                    <div class="col-sm-9">
                        <input type="number" id="salary" placeholder="Salary" name="salary" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <input id='id' name='id' value='{{$id}}' type='hidden'>
                <button class="btn btn-primary col-sm-9 col-sm-offset-2" type="submit">Submit</button>
                     <br>   <br> 
                       <a href="{{route('staff')}}">
                      <input type="button" class="btn btn-danger col-sm-9 col-sm-offset-2" value="Cancel"></a>
                  
            </form> <!-- /form -->
        </div> <!-- ./container -->
