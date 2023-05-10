<!DOCTYPE html>
<html>

<head>
    <style>
    img {
        width: 200px;
        height: 300px;
        object-fit: cover;
    }
    </style>
</head>

<body>

    <h2>Using object-fit</h2>
    <p>
        The object-fit property can take one of the following values:

    <ul>
        <li>
            fill - This is default. The image is resized to fill the given dimension. If necessary, the image will be
            stretched or squished to fit
        </li>
        <li>
            contain - The image keeps its aspect ratio, but is resized to fit within the given dimension
        </li>
        <li>
            cover - The image keeps its aspect ratio and fills the given dimension. The image will be clipped to fit
        </li>
        <li>
            none - The image is not resized
        </li>
        <li>
            scale-down - the image is scaled down to the smallest version of none or contain
        </li>
    </ul>
    </p>

    <img src="https://www.w3schools.com/html/img_girl.jpg" alt="Paris" width="400" height="300">

</body>

</html>