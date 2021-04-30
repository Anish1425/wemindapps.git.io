<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="display-2">TODO | Insert</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="text-align:center">
    <h1>Create Your Task</h1>
    <h3>
        <x-alert />
    </h3>
    <div class="container"> 
    <form  action="/upload" method="post">
        @csrf
        <div class="row">
        <div class="col-md-6">
        <input type="text" placeholder="Enter The Task" class="form-control" required name="title" />
         </div>
           <div class="col-md-6">
        <input type="submit" class="btn btn-warning" value="Create" />

            <a href="/index" class="btn btn-danger ml-3">Return To List</a>

    </div>

    </div>
    </form>
    <br>
    </div>
</body>
</html>