var zdj = document.querySelector("#zdjeciaaa");

function zmieniaczzdj(t) {

    if (t == "lanzarotte"){
        document.getElementById("zdjeciaaa").src="lanzarotte.jpg"
 
     }
     else if (t == "pekin"){
        document.getElementById("zdjeciaaa").src="pekin.jpg"
      }
      else if (t == "serengeti"){
        document.getElementById("zdjeciaaa").src="serengeti.jpg"
      }
      else if (t == "wenecja"){
        document.getElementById("zdjeciaaa").src="wenecja.jpg"
      }
      else if (t == "tajlandia"){
        document.getElementById("zdjeciaaa").src="tajlandia.jpg"
      }
}
var ikona = document.querySelector("#ikonaa");
function zmieniaczikon(s){
    if(s == "ikonaa"){
        document.getElementById("ikonaa").src="icon-off.png"
    }
    else{
        document.getElementById("ikonaa").src="icon-on.png"
    }
}