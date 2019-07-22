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
            <form action="{{route('staff.store')}}" method="post" class="form-horizontal" role="form">
              @csrf
             
              <div class="text-center" style="color:red">
                <h2>Registration</h2>
               </div>
                    <br>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username*</label>
                    <div class="col-sm-9">
                        <input type="text" id="username" placeholder="Username"  name="username" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                <label for="birthday" class="col-sm-2 control-label">Date of Birth*</label>
                    <div class="col-sm-9">
                <input class="date form-control" type="text" id="birthday" name="birthday" placeholder="Birthday" required>
                  <script type="text/javascript">
                               $('.date').datepicker({  
                               format: 'dd-mm-yyyy'
                                       });            
                      </script> 
                        </div>
                </div>
                <div class="form-group">
                    <label for="telephone" class="col-sm-2 control-label">Phone number*</label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="telephone" placeholder="Phone number" name="telephone"  class="form-control">
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
                    <label class="control-label col-sm-2">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female" required>Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male" required>Male
                                </label>
                            </div>
                        </div>
                    </div> 
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button class="btn btn-primary col-sm-9 col-sm-offset-2" type="submit">Submit</button>
                     <br>   <br> 
                       <a href="{{route('staff')}}">
                      <input type="button" class="btn btn-danger col-sm-9 col-sm-offset-2" value="Cancel"></a>
                  
            </form> <!-- /form -->
        </div> <!-- ./container -->
