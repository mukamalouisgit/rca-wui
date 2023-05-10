<!DOCTYPE html>
<html>

<head>
    <title>Opacity Example</title>
    <style>
    .box1 {
        opacity: 0.5;
    }

    .box2 {
        position: relative;
    }

    .box2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 50%;
        /**Hide a half of paragraph*/
        background-color: white;
        opacity: 0.5;
        z-index: 1;
    }
    </style>
</head>

<body>
    <div class="box1">
        <h1>Applying Opacity on HTML Element</h1>
    </div>
    <div class="box2">
        <h1>
            To hide a part of a paragraph using opacity, you can use the ::before or ::after pseudo-element along with
            the content property to create a transparent overlay on top of the text you want to hide. Here's an example
            of CSS code that does that:
        </h1>
    </div>
</body>

</html>