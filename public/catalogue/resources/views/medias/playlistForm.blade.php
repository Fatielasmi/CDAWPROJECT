<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v9 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../../../public/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="../playlist/{{$medias[0]->id}}" method="POST">
        @csrf
					<h3>Find your PlayList:</h3>
					<div class="form-row">
						<div class="form-wrapper">
							  <label for="nom">choose your playList name :</label>
  <input list="playlist" class="form-control" type="text" name="nom" id="nom">
  <datalist id="playlist">
  @foreach($playlist as $play)   
    <option value="{{$play->name}}">
    @endforeach
  </datalist>
</div>
							
						</div>
						
       

					
  <input type="submit" value="submit !">
</form> 

		
<form action="../create_playlist/{{$medias[0]->id}}" method="POST">
@csrf
        <h3> Create a New PlayList </h3>
        <div class="form-row">
						<div class="form-wrapper">
        <label for="nom">Enter your  playList's name : </label>
        <input class="form-control" type="text" name="nom" id="nom">

        <input type="submit" value="submit !">
</div>
</div>
    </form>

					

			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>