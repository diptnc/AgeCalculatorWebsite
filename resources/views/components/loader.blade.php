<div id="overlayer"></div>
<span class="loader">
  <span class="loader-inner"></span>
</span>

<style>

    /*PRELOADING------------ */
#overlayer {
  width:100%;
  height:100vh;  
  position:fixed;
  z-index:1;
  background:#5161ff;
  top: 0%;
  left :0%;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: absolute;
  z-index:3;
  border: 4px solid #Fff;
  top: 50%;
  left: 50%;
  transform:translate(-50%, -50%);
  animation: loader 2s infinite ease;
}

.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% {
    transform: rotate(0deg);
  }
  
  25% {
    transform: rotate(180deg);
  }
  
  50% {
    transform: rotate(180deg);
  }
  
  75% {
    transform: rotate(360deg);
  }
  
  100% {
    transform: rotate(360deg);
  }
}

@keyframes loader-inner {
  0% {
    height: 0%;
  }
  
  25% {
    height: 0%;
  }
  
  50% {
    height: 100%;
  }
  
  75% {
    height: 100%;
  }
  
  100% {
    height: 0%;
  }
}
</style>

<script>


$(document).ready(function() {
	$(".loader").fadeOut("slow");
  $("#overlayer").fadeOut("slow");
});
</script>