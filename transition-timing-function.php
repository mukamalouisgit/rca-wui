<!DOCTYPE html>
<html>

<head>
    <style>
    div {
        width: 100px;
        height: 100px;
        background: red;
        transition: width 2s;
    }

    #div1 {
        transition-timing-function: linear;
    }

    #div2 {
        transition-timing-function: ease;
    }

    #div3 {
        transition-timing-function: ease-in;
    }

    #div4 {
        transition-timing-function: ease-out;
    }

    #div5 {
        transition-timing-function: ease-in-out;
    }

    div:hover {
        width: 100%;
    }
    </style>
</head>

<body>

    <h1>The transition-timing-function Property</h1>

    <p>Hover over the div elements below, to see the different speed curves:</p>

    <div id="div1">linear</div><br>
    <div id="div2">ease</div><br>
    <div id="div3">ease-in</div><br>
    <div id="div4">ease-out</div><br>
    <div id="div5">ease-in-out</div><br>

</body>

</html>