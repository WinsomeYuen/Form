<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Entry</title>

        <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #D2E1FF;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            th{
                background-color: #F2AE08;
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                color: white;
            }

            tr{
                background-color: white;
            }

            table{
                border: 1px solid black;
                border-collapse: collapse;
            }

            .form td, th {
                border: 1px solid #ddd;
                padding: 8px;
                font-weight: bold;
            }

            button{
                border-radius: 3.5em;
                background-color: #b1dfbb;
                border-color: #71dd8a;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Data Entry
            </div>
            <button onclick="goBack()">Go Back</button><br/><br/>
            <div class="form">
                <table border="2">
                    <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>DOB</th></th><th>Gender</th></tr>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->fname }}</td><td>{{$form->lname}}</td><td>{{$form->email}}</td><td>{{$form->mobile}}</td><td>{{$form->dob}}</td><td>{{$form->gender}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </body>
</html>
