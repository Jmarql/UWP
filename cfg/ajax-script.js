
//PEOPLE
$(document).on('click','#showAllPeople',function(e){
      $.ajax({    
        type: "GET",
        url: "./people/show-all-people.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});

$(document).on('click','#searchPeople',function(e){
	var idperson = $("#searchpeople").val();
	
      $.ajax({    
        type: "POST",
        url: "./people/search-people.php",     
	cache: false,
	data:  { id : idperson },
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});

$(document).on('click','#addPeople',function(e){
	var personname = $("#personname").val();
	var personemail = $("#personemail").val();
	var personage = $("#personage").val();
	
	var dataadd = {
                name: personname,
                email: personemail,
		age: personage
               }
	
	       
      $.ajax({    
        type: "POST",
        url: "./people/add-people.php",     
	cache: false,
	data:  dataadd,
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});

$(document).on('click','#updatePeople',function(e){
	
	var idperson = $("#updateidsearch").val();
	var updatename = $("#updatename").val();
	var updateemail = $("#updateemail").val();
	var updateage = $("#updateage").val();
	
	var dataadd = {
		id: idperson,
                name: updatename,
                email: updateemail,
		age: updateage
               }
	
	       
      $.ajax({    
        type: "POST",
        url: "./people/update-people.php",     
	cache: false,
	data:  dataadd,
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});

$(document).on('click','#deletePeople',function(e){

	var idperson = $("#deleteidpeople").val();

       
      $.ajax({    
        type: "POST",
        url: "./people/delete-people.php",     
	cache: false,
	data:  { id : idperson },
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});



// PETS
$(document).on('click','#showAllpets',function(e){
	
      $.ajax({    
        type: "GET",
        url: "./pets/show-all-pets.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});

$(document).on('click','#searchPet',function(e){
	
	
	var idpet = $("#searchpet").val();
	
      $.ajax({    
        type: "POST",
        url: "./pets/search-pet.php",     
	cache: false,
	data:  { id : idpet },
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});



$(document).on('click','#addPet',function(e){
	var petname = $("#petname").val();
	var petspecies = $("#petspecies").val();
	var petage = $("#petage").val();
	var petowner = $("#petowner").val();
	
	var dataadd = {
                name: petname,
                species: petspecies,
		age: petage,
		owner: petowner
               }
	
	       
      $.ajax({    
        type: "POST",
        url: "./pets/add-pet.php",     
	cache: false,
	data:  dataadd,
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});


$(document).on('click','#updatePet',function(e){
	
	var idpet = $("#updatepetsearch").val();
	var updatepetname = $("#updatepetname").val();
	var updatepetspecies = $("#updatepetspecies").val();
	var updatepetage = $("#updatepetage").val();
	
	var dataadd = {
		id: idpet,
                name: updatepetname,
                species: updatepetspecies,
		age: updatepetage
               }
	
	       
      $.ajax({    
        type: "POST",
        url: "./pets/update-pet.php",     
	cache: false,
	data:  dataadd,
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});


$(document).on('click','#deletePet',function(e){

	var idpet = $("#deleteidpet").val();

       
      $.ajax({    
        type: "POST",
        url: "./pets/delete-pet.php",     
	cache: false,
	data:  { id : idpet },
        dataType: "html",                  
        success: function(data){                    
            $("#results").html(data); 
           
        }
    });
});