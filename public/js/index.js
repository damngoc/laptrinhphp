$(document).ready(function(){
	$('a.nutxoapd').click(function(event) {
		if(!confirm("Bạn có chắc xoá ?")){
			return false;
		}
		else{
			return true;
		}
	});

	$('a.nutxoact').click(function(event) {
		if(!confirm("Bạn có chắc xoá ?")){
			return false;
		}
		else{
			return true;
		}
	});

	
});
