function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    if(username=="Ramisa"&&password=="Fariha")
    {
        location.href="profile.html";
       return false;
    }

else
{
    alert("Login failed")
}
}

const cookiecontainer=document.querySelector(".cookies");
const cookiebutton=document.querySelector(".cookie");
cookiebutton.addEventListener("click",()=>{
    cookiecontainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed","true");
});
setTimeout(()=>{
    if(!localStorage.getItem("cookieBannerDisplayed"))
    cookiecontainer.classList.add("active");
}, 2000);