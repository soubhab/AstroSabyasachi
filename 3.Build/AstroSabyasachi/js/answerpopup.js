$(document).ready(function($)
{
	setDefaultNoOfCharacters();
	
	var max = 100;
	$("#popupTextAreaAnswer").keypress(function(e) {
        if (e.which < 0x20) {
            // e.which < 0x20, then it's not a printable character
            // e.which === 0 - Not a character
            return;     // Do nothing
        }
        if (this.value.length == max) {
            e.preventDefault();
        } else if (this.value.length > max) {
            // Maximum exceeded
            this.value = this.value.substring(0, max);
        }
    });
	
	$("#popupTextAreaAnswer").keyup(function(){
	  var currentLength = $(this).val().length;
	  if (currentLength > max) {
		  $("#lblTexer").text("You have reached the maximum number of characters.");
		  this.value = this.value.substring(0, max);
	  }  else {
		  var remainingChars = max - currentLength;
		  document.getElementById("lblTexer").innerHTML = "(Total characters left " +remainingChars +")&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		  
		  if (remainingChars == 0) {
			  document.getElementById("lblTexer").innerHTML = "(Total character left 0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			  return;
		  }
	  }
	});
});

function setDefaultNoOfCharacters()
{
	var totalChars = 100;
	document.getElementById("lblTexer").innerHTML = "(Total characters left 100)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
} 	