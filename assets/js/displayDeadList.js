$(document).ready(function (){
    $.get('modelsDB/api.php?obj=getDead', function(data) {
        console.log(data.data[0].image);
        var DT = {};
        DT = data.data;
        var show = '';
        for(i=0;i<=data.data.length-1;i++) {
            console.log(DT[i].id);
            show += "<div class='media display'>" ;
            show += "<div class='media-left'>";
            show += "<a href=''> <img class='media-object' src='modelsDB/dead-img/"+DT[i].image + "' alt='...' width='150' height='150'>";
            show += " </a>       </div>";
            show += " <div class='media-body'>";
            show += "       <h4 class='media-heading'><a href='profile.php?id="+DT[i].id+"&name="+DT[i].slug+"'>"+DT[i].name+"</a></h4>";
            show += "       <p>"+DT[i].bio+"</p>";                                                            
            show += " </div>  </div>";
        }
        $("#add-more").append(show);
    })
})