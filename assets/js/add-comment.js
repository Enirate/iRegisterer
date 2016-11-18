$(document).ready(function (e) {
	//console.log("slug is "+SLUG);
	$("#cForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "add-comment.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			    //$("#targetLayer").html(data);
                //window.reload();
				window.location.href="profile.php?id="+ID+"&name="+SLUG;
		    },
		  	error: function() 
	    	{
                console.log(data.data.status);
				
	    	} 	        
	   });
	}));
});