<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="text-align:center">
    <h1>Edit your Tasks</h1>
    <h3>
        <x-alert />
    </h3>
        <div class="container"> 

    <form action="/update" method="post">
        @csrf
        @method('patch')
         <div class="row">
        <div class="col-md-6">
        <input type="text" class="form-control" required name="title" value="{{$todo->title}}"/>
         </div>

        <input style="display:none" type="number" name="id" value="{{$todo->id}}">

                <div class="col-md-6">

        <input type="submit" class="btn btn-primary" value="Edit" />

            <a class="btn btn-danger" href="/index">Return To List</a>
  
    </div>
</div>
    </form>
    <br>
   
</div>

</body>
</html>



