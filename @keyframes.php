<!DOCTYPE html>
<html>

<head>
    <style>
    div {
        width: 100px;
        height: 100px;
        background-color: red;
        animation-name: example;
        animation-duration: 4s;
    }

    @keyframes example {
        from {
            background-color: red;
        }

        to {
            background-color: green;
        }
    }
    </style>
</head>

<body>

    <h1>CSS Animation</h1>

    <div>Div to be animated</div>

    <p><b>Note:</b> When an animation is finished, it goes back to its original style.</p>

</body>

</html>