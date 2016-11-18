
    $.get('modelsDB/api.php?obj=getADeadPerson&id='+ID, function(data) {
        console.log(data);
        var DT = {};
        DT = data.data[0];
        var display='';
        console.log(data.data[0].bio);

        display += "<div class='row'> <div class='col-sm-6 profile-image'> <img src='modelsDB/dead-img/"+DT.image+"' alt='nothing' width='150' height='150' > <h3>"+DT.name+"</h3> <a href='condolence.php?id="+ID+"&name="+SLUG+"' class='btn btn-success'>Sign condolence</a> </div> <div class='col-sm-6'> <article> <h5><b>About "+DT.name+"</b></h5> <p> "+DT.bio+" </p> <p><b>Died on: </b>"+DT.death_date+" </article> </div> </div>";


        $(".container").append(display);

        
    })
