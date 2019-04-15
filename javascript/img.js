
	let num=0;
	let myimage=document.querySelector(".J_img");
	myimage.addEventListener('click',function(event){
		if(num%2==0)
			myimage.setAttribute("src","images/2.jpg");
		else
			myimage.setAttribute("src","images/1.jpg");
		num++;
	})
