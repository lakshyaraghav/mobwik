<?php
  $product_shuffle=$product->getData();
?>

<script>
// function lightbg_clr() {
// 	$('#qu').val("");
// 	$('#textbox-clr').text("");
//  	$('#search-layer').css({"width":"auto","height":"auto"});
// 	$('#livesearch').css({"display":"none"});	
// 	$("#qu").focus();
//  };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	  document.getElementById("search-layer").style.width="auto";
	  document.getElementById("search-layer").style.height="auto";
	  document.getElementById("livesearch").style.display="block";
	  $('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	  document.getElementById("search-layer").style.width="100%";
	  document.getElementById("search-layer").style.height="100%";
	  document.getElementById("livesearch").style.display="block";
	  $('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send();	
}

</script>

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top mynav">
  <a class="navbar-brand text-white" href="#">MOBwik</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form class="form-inline my-2 my-lg-0 mr-4" id="searchform">

            <!-- <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="What are you looking for ?" tabindex="1"> -->
            <!-- <button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button> -->
            <input class="form-control col-lg mr-sm-0 textbox" name="qu" id="qu"  type="search" placeholder="What are you looking for ?" autocomplete="off" style="width:600px" onKeyUp="fx(this.value)" tabindex="1">
            <!-- <button type="button" class="textbox-clr" id="textbox-clr" onClick="lightbg_clr()"></button>  -->
            <!-- <button class="btn btn-outline-light my-1 my-sm-0 query-submit" type="submit" tabindex="2"><i class="fa fa-search" aria-hidden="true"></i></button> -->
            <button class="btn btn-outline-light " type="submit" tabindex="2"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div id="livesearch" style="z-index: 1; position:absolute; top: 50px; "></div>
            
          
          </form>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    
    
    <ul class="navbar-nav ml-auto">
      
          
      
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Latest</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Commingsoon</a>
      </li>
    </ul>
    
  </div>
</nav>
<br><br>




            

