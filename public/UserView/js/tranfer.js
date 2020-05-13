function Tranfer(StringFocus){
    if(StringFocus == "Checke_1"){
        document.getElementById("Checke_1").classList.add("active_view");
        document.getElementById("Checke_2").classList.remove("active_view");
    }else{
        if(StringFocus == "Checke_2"){
            document.getElementById("Checke_2").classList.add("active_view");
			document.getElementById("Checke_1").classList.remove("active_view");
        }
	}
}
