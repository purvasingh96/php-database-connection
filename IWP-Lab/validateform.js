function validateform1(){
	var name = document.myform.name;
	var email = document.myform.email;
	var age = document.myform.age;
	var contact = document.myform.contact;

	if(name.value==""){
		window.alert("name cant be blank!");
		name.focus();
		return false;
	}
	if(email.value==""){
		window.alert("email cant be empty");
		email.focus();
		return false;
	}
	if(email.value.indexOf("@", 0)<0){
		window.alert("enter valid mail");
		email.focus();
		return false;
	}
	if(email.value.indexOf(".", 0)<0){
		window.alert("enter valid mail");
		email.focus();
		return false;
	}
	if(document.getElementById("male").checked==false && document.getElementById("female").checked==false){
		window.alert("please fill in one gender box");
		gender.focus();
		return false;
	}
	if(document.getElementById("window").checked==false && document.getElementById("nochoice").checked==false){
		window.alert("please select a choice");
		choice.focus();
		return false;
	}
}