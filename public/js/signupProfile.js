// alert("test");


// function validateConfirmpassword(password, Cpassword){
// 	return password != Cpassword ? false : true;
// }

$('#formprofilesign').submit(function(e){
	e.preventDefault();
	
	// if(validateConfirmpassword($('#password').value, $('#Cpassword').value) == true){
		var formData = $('#signupform').serialize();
		// let varurl = ;
		// alert(varurl);
		$.ajax({
			type: 'POST',
            // url: '{{ route("profile_setup") }}', // Embedding route URL
            url: 'http://bactapapv1.test/profilesetupsubmit', // Embedding route URL
            // profileSetup/5
            // url: 'profile_setup', // Embedding route URL
            data: formData,
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    success: function(response) {
		        // resolve(response); // Resolve the promise with the response data
		    		// console.log(response.data);
		    	alert('Welcome Please complete your profile : ' + response.data);

				// window.location.href = "profileSetup/" + response.data;
				

		    },
		    error: function(xhr, status, error) {
		        // reject(error); // Reject the promise with the error message
		    }
		});
	// }
});




