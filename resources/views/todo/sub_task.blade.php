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
    <h1>Add your SubTasks</h1>
    <h3>
        <x-alert />
    </h3>
        <div class="container"> 

    <form action="/subupload" method="post">
        @csrf
         <div class="row">
        <div class="col-md-4">
        <input type="text" class="form-control" readonly value="{{$todo->title}}"/>
        </div>

                
        <input style="" type="hidden" name="task_id" value="{{$todo->id}}">

                <div class="col-md-4">

        <input type="submit" class="btn btn-primary" value="Add" />

            <a class="btn btn-danger" href="/index">Return To List</a> 
  
    </div>
</div>
                                    <div class="form-row mt-5">
										<div class="field_wrapper">
											<div>
											
											<label for="sub_task" class="ml-2 font-weight-bold">You Can Add Upto Five</label><br>
											
											
											<input type="text" name="field_name[]" required value="" class="form-control" autocomplete="off">
												<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-fw fa-2x" aria-hidden="true"></i><i class="" aria-hidden="true"></i></a>
											
											</div>
											
											
										</div>
									</div>
    </form>
    <br>
   
</div>

</body>
<script >
	$(document).ready(function(){
		
	//$('.field_wrapper').hide();
    var maxField = 5; 
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper'); 
    var fieldHTML = '<div><input type="text" name="field_name[]" class="form-control" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fa fa-fw fa-2x" aria-hidden="true" title="Copy to use minus-circle"></i><i class="" aria-hidden="true"></i></a></div>'; //New input field html 
	//var len=$( "#inc1" ).val();
    var x = 1; 
   
    $(addButton).click(function(){

    	//alert("hello webminds");
        if(x < maxField){ 
            x++; 
            $(wrapper).append(fieldHTML); 
        }
    });
    
    
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); 
        x--; 
    });
	

	
});



</script>
</html>



