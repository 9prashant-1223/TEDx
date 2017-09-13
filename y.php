<!DOCTYPE html>
<html>
<head>
	<title>div hover</title>
</head>
<body>

<!-- <div class="div1">
	Prashant
</div> -->

<div class="vert-one">
    home
</div>


<style>
.vert-one {
    display:block;
    text-decoration:none;
    color:white;
    background-size: 200% 100%;
    background-image: linear-gradient(to right, #600 50%, yellow 50%);
    transition:  .5s;
    padding:50px 0 0 5%;
    width:180px;
    height:100px;
}
.vert-one:hover {
    background-position: -100% 0;
    color: #000;
}



	/*.div1{
		background-color: blue;
		width: 20%;
		height: 200px;
		margin:10% 35%;
		text-align: center;
		padding-top:80px;
		font-size: 35px;
  transition: 2s;
	}

	.div1:hover{
		background-color: red;
		color: #fff;
*/
	}
</style>
</body>
</html>