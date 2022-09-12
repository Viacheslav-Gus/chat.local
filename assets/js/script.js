// alert('ddd');


// $('body').css({'background':'red'});

$(document).ready(function(){
  console.log('jQuery works');
});

// btnDelete.onclick = function() {
// 	alert("Really delete?");
// }

$('.btnDelete').on('click', (e) => {
	let element = e.target;
	console.dir(element);

	let ID = element.dataset.id;
	console.dir(ID);

	location = '/delete_user.php?user_id=' + ID;

});