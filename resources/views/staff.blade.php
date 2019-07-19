<!doctype html>
hello world
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
                background-color: #fff;
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
        </style>
    </head>
    <body>

    <div class="container">
        <br/>
        <h3>
            Advance Operation Service company (AOI,PKG,MO)
             <a href="{{route('staff.index')}}"><button type="button" class="btn btn-dark" style="float: right;">+ Add staff</button><a>
        </h3>
        <table class="table">
            <thead class="thead-dark">
                <tr align="center">
                <th scope="col">Number</th>
                <th scope="col">Userame</th>
                <th scope="col">Brithday</th>
                <th scope="col">position</th>
                <th scope="col">division</th>
                <th scope="col">division_id</th>
                <th scope="col">telephone</th>
                <th scope="col">salary</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
     
        </table>
    </div>
    </body>
</html>