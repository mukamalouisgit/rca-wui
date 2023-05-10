<!DOCTYPE html>
<html>

<head>
    <style>
    .container {
        width: 200px;
        height: 200px;
        border: 1px solid #c3c3c3;
        display: flex;
        flex-wrap: wrap;
        /* flex-wrap: nowrap;
        flex-wrap: wrap-reverse; */


    }

    .container div {
        width: 50px;
        height: 50px;
    }
    </style>
</head>

<body>

    <p>flex-wrap</p>
    <p>
        By default, flex items will all try to fit onto one line. You can
        change that and allow the items to wrap as needed with this
        property.
        <br><br>
        flex-wrap: nowrap | wrap | wrap-reverse;
    </p>

    <div class="container">
        <div style="background-color:coral;">A</div>
        <div style="background-color:lightblue;">B</div>
        <div style="background-color:khaki;">C</div>
        <div style="background-color:pink;">D</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
    </div>

    <p><b>Note:</b> Internet Explorer 10 and earlier versions do not support the flex-wrap property.</p>

</body>

</html>