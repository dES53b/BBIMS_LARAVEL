<!DOCTYPE html>
<html>
<head>
	<title>Donor Health Check</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
	<h1>New Donor</h1>


	
	{!! Form::open(['route'=>'health.index']) !!}


		<div class="form-group">
			{!! Form::label('1. Are you feeling well and in good health today?') !!}
			{!! Form::checkbox('name', 'value', true) !!}		
        </div>
        
        <div class="form-group">
			{!! Form::label('2. Have you eaten in the last 6 hours?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>
        
        <div class="form-group">
			{!! Form::label('3. Have you ever fainted?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('4. Been ill, received any treatment or any medication?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('5. Had any injections or vaccinations (immunizations)?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('6. Received a blood transfusion or any blood products?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('7. Any problems with your heart or lungs e.g. asthma?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('8. Any type of cancer?') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('9. Diabetes, epilepsy or TB? ') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>

        <div class="form-group">
			{!! Form::label('10. Any other long term illness') !!}
			{!! Form::checkbox('name', 'value', true); !!}		
        </div>











		

	{!! Form::close() !!}


</div>


</body>
</html>