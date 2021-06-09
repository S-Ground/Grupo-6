 $(".humedad").hide();

 function ShowHideElements(){
    let text="";
    if($("#buttomhum").text() ==="Ocultar humedad"){
        $(".humedad").show();
        text = "Mostrar humedad";
    }else{
         $(".humedad").hide();
         text = "Mostrar humedad";

    }
    $("#buttomhum").html(text); 


 }