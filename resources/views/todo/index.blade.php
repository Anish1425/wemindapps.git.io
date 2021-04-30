<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Home</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h1>All Your Tasks Can Manage By Here</h1>
    <h3>
        <a class="btn btn-success" href="/create">Create New Task</a>
    </h3>
    <h3>
        <x-alert />
    </h3>

     <table class="table table-dark">
    <thead>
      <tr>
        <th>Your Tasks</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>


    @foreach($todos as $todo)
        <tr>
            <td>
            @if($todo->completed)
                <span style="text-decoration:line-through">{{$todo->title}}</span>
            @else 
                {{$todo->title}}
            @endif
            </td>
            <td>
            <a class="btn btn-success" href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
            <a class="btn btn-primary" href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
            <a class="btn btn-warning" href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
            </td>
        </tr>
    @endforeach
      
    </tbody>
  </table>
  
    </div>
</body>
</html>