<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="wrapper">


<div class="grid"><h2>People</h2>
<h3>Show All People</h3><br><button id="showAllPeople" class="button">Show</button></div>
<div class="grid"><h2>Pets</h2><h3>Show All Pets</h3><br><button id="showAllpets" class="button">Show</button></div>

<div class="grid"><h3>Search for a person: </h3><input type="text" id="searchpeople" name="searchpeople"><button id="searchPeople"  class="button">Find</button></div>
<div class="grid"><h3>Search for a pet: <input type="text" id="searchpet" name="searchpet"><button id="searchPet"  class="button">Find</button></div>

<div class="grid"><h3>Add a new person </h3>
<div class="three-col">
	<div>
		<label for="name">Name</label><br />
		<input type="text" id="personname" name="personname">
	</div>
	<div>
		<label for="email">Email</label><br />
		<input type="text" id="personemail" name="personemail">
	</div>
	<div>
		<label for="age">Age</label><br />
		<input type="text" id="personage" name="personage">
	</div>
</div>

<button id="addPeople" class="button" >Add</button></div>

<div class="grid"><h3>Add a new pet</h3>
<div class="four-col">
	<div>
		<label for="name">Name</label><br />
		<input type="text" id="petname" name="petname">
	</div>
	<div>
		<label for="species">Species</label><br />
		<input type="text" id="petspecies" name="petspecies">
	</div>
	<div>
		<label for="Age">Age</label><br />
		<input type="text" id="petage" name="petage">
	</div>
	
	<div>
		<label for="Owner">Owner</label><br />
		<input type="text" id="petowner" name="petowner">
	</div>
</div>
	
<button id="addPet"  class="button" >Add</button></div>

<div class="grid"><h3>Update person information</h3>
<div class="four-col">
	<div>
		<label for="id">ID</label><br />
		<input type="text" id="updateidsearch" name="updateidsearch">
	</div>
	<div>
		<label for="name">Name</label><br />
		<input type="text" id="updatename" name="updatename">
	</div>
	<div>
		<label for="email">Email</label><br />	
		<input type="text" id="updateemail" name="updateemail">
	</div>
	<div>
		<label for="age">Age</label><br />
		<input type="text" id="updateage" name="updateage">
	</div>
</div>
<button id="updatePeople"  class="button" >Update</button></div>

<div class="grid"><h3>Update pet information</h3>
<div class="four-col">
	<div>
		<label for="id">ID</label><br />
		<input type="text" id="updatepetsearch" name="updatepetsearch">
	</div>
	<div>
		<label for="name">Name</label><br />
		<input type="text" id="updatepetname" name="updatepetname">
	</div>
	<div>
		<label for="species">Species</label><br />
		<input type="text" id="updatepetspecies" name="updatepetspecies">
	</div>
	<div>
		<label for="age">Age</label><br />
		<input type="text" id="updatepetage" name="updatepetage">
	</div>
</div>
<button id="updatePet"  class="button" >Update</button></div>


<div class="grid"><h3>Delete person information</h3>
ID: <input type="text" id="deleteidpeople" name="deleteidpeople">
<button id="deletePeople"  class="button">Delete</button>
</div>


<div class="grid"><h3>Delete pet information</h3>
ID: <input type="text" id="deleteidpet" name="deleteidpet">
<button id="deletePet"  class="button">Delete</button>
</div>

</div>

<div id="results"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="cfg/ajax-script.js"></script>

</body>
</html>