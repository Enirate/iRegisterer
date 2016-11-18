// $(document).ready(function () {
//     $("#subButton").click(function (event) { 
//         alert("Step1");
        
//             event.preventDefault();
//         // $("form#DeadForm").submit(function(event){
//             var formData = new FormData();
//             var form = $("form").serializeArray();
//             //formData.append(form);
//             console.log(formData);
//             var file_data = $("#pic").get(0).files[0].pic;//$("#pic").get(0).files;
//             formData.append("file", file_data);

//             $.ajax({
//                 type:"POST",
//                 url:"upload-deceased.php",
//                 data: formData,
//                 dataType:"json",
//                 encode : true
//             })

//             .done(function(data){
//                 console.log(data);
//             });

//             event.preventDefault();
//         // });

//      })
// });


$(document).ready(function (e) {
	$("#deadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "upload-deceased.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			    //$("#targetLayer").html(data);
                window.location.href='index.php';
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});