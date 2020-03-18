		var myInput = document.getElementById("inputPassword");
		var myInputRepeat = document.getElementById("repeatPassword");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		var repeat = document.getElementById("repeat");

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message form-control").style.display = "none";
		}
		myInputRepeat.onblur = function() {
			document.getElementById("message form-control").style.display = "none";
		}

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message form-control").style.display = "block";
		}

		myInputRepeat.onfocus = function() {
			document.getElementById("message form-control").style.display = "block";
		}


		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}

			// Validate repeat
			if (myInputRepeat.value.match(myInput.value)) {
				repeat.classList.replace("invalid", "valid");
			} else {
				repeat.classList.replace("valid", "invalid");
			}
		}
		myInputRepeat.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}

			// Validate repeat
			if (myInputRepeat.value.match(myInput.value)) {
				repeat.classList.replace("invalid", "valid");
			} else {
				repeat.classList.replace("valid", "invalid");
			}
		}

		//จับ Event key
		function myFunction()
		{
		  let SpacialCharacter = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
		  $('input[type=password]').on("keypress", function(event) {
			var keyChar = String.fromCharCode(event.keyCode);
			var output = SpacialCharacter.test(keyChar);
			var text = $(this).val();
			$(this).val(text.replace(SpacialCharacter, ''));
			console.log(event.key);
			return !output;
		  });
		}
