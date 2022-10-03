
function borrar() {

    var el = document.getElementById('borrame');
    if (el != null) {
        for(i = 0; i <= document.getElementsByTagName("div").length; i++){
            el.remove();
        }

    } else {
       console.log("xd");
    }
}
