<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('http://www.sclance.com/backgrounds/work-background/work-background_2454952.jpg');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container{
                background-color:#fff;

            }
        </style>
    </head>
    <body>

    <div class="container">
        <br/>
        <h2>
            Advance Operation Service company (AOI, PACKAGE)
   
             <a href="{{route('staff.index')}}">
             <button type="button" class="btn btn-primary" style="float: right;">+ Add staff</button><a>
        </h2>
       
        <div class="form-group">
       
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Serach">
  </div>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr align="center">
                <th scope="col">Number</th>
                <th scope="col">Username</th>
                <th scope="col">Brithday</th>
                <th scope="col">Position</th>
                <th scope="col">Division</th>
                <th scope="col">Division_id</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Salary</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staff as $index=>$staff)
                <tr align="center">
                <th scope="row">{{ ++$index }}</th>
                <td>{{$staff->username}}</td>
                <td>{{$staff->birthday}}</td>
                <td>{{$staff->position}}</td>
                <td>{{$staff->division}}</td>
                <td>{{$staff->division_id}}</td>
                <td>{{$staff->telephone}}</td>
                <td>{{$staff->salary}}</td>
                <td>{{$staff->gender}}</td>
                <td>
                    <form action="{{route('staff.delete')}}" method="post">
                        @csrf
                        <a href="{{route('staff.edit',$staff->id)}}">
                            <input type="button" class="btn btn-warning" value='Edit'>
                        </a>
                        <input id='id' name='id' value='{{$staff->id}}' type='hidden'>
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>



        </table>
    </div>
    </body>
</html>