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

    div#myDiv1 {
        transform: matrix(1, -0.3, 0, 1, 0, 0);
    }

    div#myDiv2 {
        transform: matrix(1, 0, 0.5, 1, 150, 0);
    }
    </style>
</head>

<body>

    <h1>The matrix() Method </h1>

    <p>The matrix() method combines all the 2D transform methods into one.</p>
    <p>The parameters are as follow: matrix(scaleX(), skewY(), skewX(), scaleY(), translateX(), translateY())

</p>

    <div>
        This a normal div element.
    </div>

    <div id="myDiv1">
        Using the matrix() method.
    </div>

    <div id="myDiv2">
        Another use of the matrix() method.
    </div>

</body>

</html>