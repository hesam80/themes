
    	function myFunction()
    	        {
                        document.getElementById("date").innerHTML = Date();
                }
       function changeImage() {
			    var image = document.getElementById('myImage');
			    if (image.src.match("bulboff")) {
			        image.src = "image/pic_bulbon.gif";
			    } 
			}
			function startTime() {
			    var today=new Date();
			    var h=today.getHours();
			    var m=today.getMinutes();
			    var s=today.getSeconds();
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
			    var t = setTimeout(function(){startTime()},500);
			}

		function checkTime(i) {
		    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
		function  changepage()
    	{
    		var str=document.getElementById('txtHint2').value;
    		window.location=str;
    	}
    	function  changepage1()
    	{
    		var str=document.getElementById('txtHint1').value;
    		window.location=str;
    	}
    function showUser()
 
 
		   {
		   
		        var str=document.getElementById("txtHint").value;
		 
		          window.location=str;
		   } 
