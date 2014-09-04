var ad = new Array();
ad[0]=new Array('firefox01.gif','http://www.mozilla.org/products/firefox/');
ad[1]=new Array('firefox02.gif','http://www.mozilla.org/products/firefox/');

var i = Math.floor(Math.random()*ad.length);
document.write('<a href="'+ad[i][1]+'" target="_top"><img src="'+ad[i][0]+'" border="0"></a>');