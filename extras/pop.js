
setTimeout(function prueba() {
    var el = document.getElementById('borrame');
    if (el != null) {
        el.remove();
    } else {
       console.log("xd");
    }
}, 3000);
