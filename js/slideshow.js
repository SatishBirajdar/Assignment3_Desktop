/*
Name : Satish Birajdar
File Name : slideshow.js
Description : This file is used functioning of Image slider of the home page.
*/

/* path of the images for slider */
aImages = ["images/android_games.jpg", "images/android_apps2.jpg", "images/VB_Apps.jpg"];

var iCounter = 0;
var iImgLength = aImages.length - 1;
var delay = 3000;
var lock = true;
var run = setInterval("chgImg(1)",delay);

/*functionality for next and pre button*/

function chgImg(direction)
{
	if(document.images)
	{
		iCounter = iCounter + direction;
		if(iCounter > iImgLength){iCounter = 0;}
		if(iCounter < 0){iCounter = iImgLength;}
		document.slideshow.src = aImages[iCounter];
	}
}

/*auto sliding of the images */

function auto()
{
	if(lock == true)
	{
		lock = false;
		window.clearInterval(run);
	}
	
	else if (lock == false)
	{
		lock = true;
		run = setInterval("chgImg(1)",delay);
	}
}