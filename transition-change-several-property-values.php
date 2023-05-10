<!DOCTYPE html>
<html>

<head>
    <style>
    div {
        width: 100px;
        height: 100px;
        background: red;
        transition: width 2s, height 4s, color 3s, font-size 2s;
    }

    div:hover {
        width: 300px;
        height: 300px;
        color: white;
        font-size: 40px;
    }
    </style>
</head>

<body>

    <h1>The transition Property</h1>

    <p>Hover over the div element below, to see the transition effect:</p>

    <div>
        Change me too
    </div>

</body>

</html>