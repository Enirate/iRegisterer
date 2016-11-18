$.get('modelsDB/api.php?obj=getComment&id='+ID, function(data) {
    if(data.status=="success") {
        var DT = data.data;
        var display='';
        var len = DT.length;
        for(i=0;i<=len-1;i++) {
            console.log(data.data[i].picture)
            display+="<div class='row rula'><div class='media-left'><img src='modelsDB/condo-img/"+DT[i].picture+"' class='media-object'      style='width:60px'></div><div class='media-body'><h4 class='media-heading'>"+DT[i].name_poster+"</h4><p>"+DT[i].message+"</p></div></div>"
        }
        $(".move-this").append(display);
    }
})