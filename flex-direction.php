<!DOCTYPE html>
<html>

<head>
    <style>
    .container {
        width: 400px;
        height: 400px;
        border: 1px solid #c3c3c3;
        display: flex;
        /* flex-direction: row-reverse;
        flex-direction: column;
        flex-direction: column-reverse;
        flex-direction: row; */



    }

    .container div {
        width: 50px;
        height: 50px;
    }
    </style>
</head>

<body>

    <p>
        flex-direction property is used to change the direction of flexible elements.
    </p>

    <div class="container">
        <div style="background-color:coral;">A</div>
        <div style="background-color:lightblue;">B</div>
        <div style="background-color:khaki;">C</div>
        <div style="background-color:pink;">D</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
    </div>

    <p>
        <b>Syntax</b>
        <br>
        flex-direction: row|row-reverse|column|column-reverse|initial|inherit;
        <br>
        <b>Note:</b> Internet Explorer 10 and earlier versions do not support the flex-direction property.
    </p>

</body>

</html>