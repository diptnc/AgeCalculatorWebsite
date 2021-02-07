// var gpay= document.getElementById("gpay_btn");
function gpay(){
    Instamojo.open("https://www.instamojo.com/@diptnc"); 

  console.log("hh");
}


function ppay(){
    window.location.href = "https://paypal.me/diptncofficial?locale.x=en_GB";


  console.log("hh2");
}

//
function downloadApp(){
browser.downloads.download({url: "https://agecalculatorapp.diptanuchakraborty.in/download/"});
}



$(document).bind("contextmenu",function(e) {
    e.preventDefault();
   });

   $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});