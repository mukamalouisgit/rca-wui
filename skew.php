<!DOCTYPE html>
<html>
<head>
<style>
div {
  width: 300px;
  height: 100px;
  background-color: yellow;
  border: 1px solid black;
}

div#myDiv {
  transform: skew(20deg,10deg); /*skew(x,y)*/
  /* transform: skewX(20deg); */
  /* transform: skewY(10deg); */
}
</style>
</head>
<body>

<h1>The skew() Method</h1>
<p>The skew() method skews an element into a given angle.</p>

<div>
This a normal div element.
</div>

<div id="myDiv">
This div element is skewed 20 degrees along the X-axis, and 10 degrees along the Y-axis.
</div>

</body>
</html>


