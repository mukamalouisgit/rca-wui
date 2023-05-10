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
        transform: rotate(20deg);  /* negative are also allowed*/
    }
    </style>
</head>

<body>

    <h1>The rotate() Method</h1>

    <p>The rotate() method rotates an element clockwise or counter-clockwise.</p>

    <div>
        This a normal div element.
    </div>

    <div id="myDiv">
        This div element is rotated clockwise 20 degrees.
    </div>

</body>

</html>