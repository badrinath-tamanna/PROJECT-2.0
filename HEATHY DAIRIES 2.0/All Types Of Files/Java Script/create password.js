function pageRedirect1()
{
    window.open("../Sign Up/signup.HTML",target="_self");
}


function pageRedirect()
{
    window.location.href="../Log In/login.html",target="_self";
}

function MyFunction() {
    var x=document.getElementById("myInput");
    var y=document.getElementById("hide1");
    var z=document.getElementById("hide2");

    if(x.type==="password"){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
    }

    else{
        x.type="password";
        y.style.display="none";
        z.style.display="block";
    }


}