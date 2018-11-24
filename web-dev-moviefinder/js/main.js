$(document).ready(function() {
	$('#searchForm').on('submit', function(e) {
		let searchText = $('#searchText').val();
		getMovies(searchText);
		e.preventDefault();
	})
});


		
		$('#favourites').html(output);
	});
}

$(".text-gradient").pxgradient({ 
  step: 10, 
  colors: ["#ff512f, #dd2476"], 
  dir: "y" 
});

function toTop(){
	document.getElementById("toTop").html = window.scrollTo(x-chord, y-chord);
}
