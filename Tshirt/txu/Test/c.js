
function drawImage() {
	var canvas= document.getElementById("c1")
	var context=  canvas.getContext('2d');
// 	var img = $("#img")[0];
// 	can.fillStyle = 'rgb(0,0,255)';
// 	can.fillRect(0,0,100,100);
// 	can.drawImage(img, 0, 100);
	var image = new Image();
	image.src = "t1.png";
	image.onload = function () {
		context.drawImage(image,0,0);
		context.fillStyle='rgb(0,0,255)';
		context.moveTo(10, 10);
		context.lineTo(150, 50);
		context.lineTo(10, 50);
		context.stroke();
	}
	
	console.log(canvas.toDataURL("image/png"));
	w=window.open(canvas.toDataURL("image/jpeg"),"smallwin","width=400,height=350");
	

	//将canvas的图片保存base64的数据
	// $("#img2").attr('src',)
}
