
// Project: ViewHome
var next;

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});
function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	next = $('#gallery a:first'); 
	next.css({opacity: 1.0});
	
	$('#gallery .content').css({opacity:0.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	setCaption();
//	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	$('#gallery .content').animate({opacity: 0.7}, 1400);
//	caption = "Cur:"+$('#gallery a:first').find('img').attr('src')
	
		
//	$('#gallery .content').html(caption);
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',4000);
	
}
function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

//	alert("current:"+current.next().hasClass('caption'));
	
	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));
//var next = ((current.next().length) ? (current.next()) : $('#gallery a:first'));	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 2000);

	//Hide the current image
	current
	.animate({opacity: 0.0}, 2000)
	.removeClass('show'); 

	//Set the opacity to 0 and height to 1px
 $('#gallery .caption').slideUp("slow");
 $('#gallery .caption').slideDown("slow");
	
	//Get next image caption
	var t = setTimeout("setCaption()",500);
	
}

function setCaption() {
	var name = " - <b>ВижуДом</b> - камера наблюдения. режим: просмотр";
	var caption = "<em>время: </em><span>"+next.find('img').attr('alt')+"</span>"+name;	

			//Display the content
	$('#gallery .content').html(caption);

}
