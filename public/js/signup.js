// alert("test");


function validateConfirmpassword(password, Cpassword){
	return password != Cpassword ? false : true;
}

$('#signupform').submit(function(e){
	e.preventDefault();
	
	if(validateConfirmpassword($('#password').value, $('#Cpassword').value) == true){
		var formData = $('#signupform').serialize();
		// let varurl = ;
		// alert(varurl);
		$.ajax({
			type: 'POST',
            url: '{{ route("signup") }}', // Embedding route URL
            data: formData,
		    // url:"signup",
		    // type: "POST",
		    // data: formData,
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    success: function(response) {
		        // resolve(response); // Resolve the promise with the response data
		    		// console.log(response.data);
		    	alert('Welcome Please complete your profile : ' + response.data);

				window.location.href = "profileSetup/" + response.id;
				

		    },
		    error: function(xhr, status, error) {
		        // reject(error); // Reject the promise with the error message
		    }
		});
	}
});




// alert();