function adminLogin(){

    
        let user = document.getElementById("userName").value;
        let pass = document.getElementById("password").value;
    if(user != null & pass != null){
        if(user == "Waifu" & pass == "soyadminxd"){
        
            window.location = "adminIndex.php";  

        }else{
            setTimeout(window.location = "index.php", 2000)
        }
    }   


}   

function createDiv(){
    document.getElementById("pass").innerHTML = '<div class="login__container" id="dialog" title="Basic dialog">Password<input class="login__input" id="password" type="password" size="25" />  Username<input class="login__input" id="userName" type="text" size="25" /> <button class="login__button" onClick="adminLogin()">Ingresar</button></div>';

}
