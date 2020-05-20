function Tranfer(StringFocus){
    if(StringFocus == "Checke_1"){
        document.getElementById("Checke_1").classList.add("active_view");
        document.getElementById("Checke_2").classList.remove("active_view");
        document.getElementById("over").classList.remove("d-none");
        document.getElementById("re").classList.add("d-none");
    }else{
        if(StringFocus == "Checke_2"){
            document.getElementById("Checke_2").classList.add("active_view");    
            document.getElementById("Checke_1").classList.remove("active_view");
            document.getElementById("re").classList.remove("d-none");
            document.getElementById("over").classList.add("d-none");
        }
	}
}
