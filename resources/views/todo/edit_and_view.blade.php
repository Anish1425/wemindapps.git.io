  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Sub Tasks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<body style="text-align:center">
    <h1>Manage your SubTasks</h1>
    <h3>
        <x-alert />
    </h3>
        <div class="container"> 

     <form action="/subupdate" class="" method="post">
        @csrf

    <input style="" type="hidden" name="task_id" value="{{$todo->task_id}}">
   
   @foreach($Avalue as $value)
     <div class="row">
        <div class="col-md-4">
        <input type="text" class="form-control" name="field_name[]" required value="{{$value}}"/>
        </div>
       
    </div>
    @endforeach

    <div class="row mt-5">
        
     <div class="col-md-4">

        <input type="submit" class="btn btn-primary" value="Update" />

            <a class="btn btn-danger" href="/index">Return To List</a> 
  
        </div>

    </div>
                                  
    </form>

   
        </div>

</body>

</html>



