

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}


// Open the lightbox


function openbox(formtitle, fadin)
{
  var box = document.getElementById('box'); 
  document.getElementById('shadowing').style.display='block';

  var btitle = document.getElementById('boxtitle');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box", 0);
	 fadein("box");
  }
  else
  { 	
    box.style.display='block';
  }  	
}



// Close the lightbox
function closebox()
{
   document.getElementById('lightbox').style.display='none';
   document.getElementById('box').style.display='none';
   document.getElementById('shadowing').style.display='none';
}

/*
$( '#overlay, #close').on('click', function(event) {
    $("#lightbox, #overlay").hide();
});

$( '#show').on('click', function(event) {
    $("#lightbox, #overlay").show();
});
*/
