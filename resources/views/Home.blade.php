<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        .taskApp{
            display:flex;
            justify-content:center;
            margin-top:200px;
        }
        .taskAppBtn{
            display:flex;
            justify-content:center;
            margin-top:10px;
            margin:50px;
            padding:50px;
        }
    </style>
</head>
<body>
    <div class="taskApp">
        <h1 class="text-info">
             WelCome to Task app 
        </h1>
    </div>
    <div class="taskAppBtn">
        <a class="btn btn-success me-5" href="{{ url('/login') }}">Login </a>
        <a class="btn btn-danger ml-5" href="{{ url('/resistration') }}">Resigtration</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>