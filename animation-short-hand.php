<!DOCTYPE html>
<html>

<head>
    <style>
    div {
        width: 100px;
        height: 100px;
        background-color: red;
        position: relative;
        animation-name: example;
        animation-duration: 5s;
        animation-timing-function: linear;
        animation-delay: 2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;

        /*   animation: example 5s linear 2s infinite alternate;  *//*Short hand*/
    }

    @keyframes example {
        0% {
            background-color: red;
            left: 0px;
            top: 0px;
        }

        25% {
            background-color: yellow;
            left: 200px;
            top: 0px;
        }

        50% {
            background-color: blue;
            left: 200px;
            top: 200px;
        }

        75% {
            background-color: green;
            left: 0px;
            top: 200px;
        }

        100% {
            background-color: red;
            left: 0px;
            top: 0px;
        }
    }
    </style>
</head>

<body>

    <h1>CSS Animation</h1>

    <p>This example uses six of the animation properties:</p>

    <div></div>

</body>

</html>