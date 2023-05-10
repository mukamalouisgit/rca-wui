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
        animation-duration: 4s;
        animation-direction: alternate;
        animation-iteration-count: 2;/** Very necessary */

        /**reverse, normal, alternate, alternate-reverse  
        normal - The animation is played as normal (forwards). This is default
        reverse - The animation is played in reverse direction (backwards)
        alternate - The animation is played forwards first, then backwards
        alternate-reverse - The animation is played backwards first, then forwards
         
         
         */
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

    <p>The animation-direction property specifies whether an animation should be played forwards, backwards or in
        alternate cycles. The following example will run the animation in reverse direction (backwards):</p>

    <div></div>

</body>

</html>