<!DOCTYPE html>
<html>

<head>
    <style>
  div{
    width:200px;
    height:100px;
    background: red;
    transition: width 3s, height 2s;
  }

  div:hover{
    width: 400px;
    height:100%;
    background: black;
    color:white;
  }
    </style>
</head>

<body>
    <div>
        <h3>Syntax</h3>
        <p>transition: transition-property transition-duration transition-timing-function transition-delay; </p>
        <p>Property Values:
        <ul>
            <li> transition-property: It specifies the CSS properties to which a transition effect should be applied.
            </li>
            <li> transition-duration: It specifies the length of time a transition animation should take to complete.
            </li>
            <li> transition-timing-function: It specifies the speed of transition.</li>
            <li> transition-delay: It specifies the transition delay or time when transition starts.</p>
            </li>
        </ul>

        <p>Note: If any of the values are not defined then the browser assumes the default values.</p>
        <p>Note: The transition effect can be defined in two states (hover and active) using pseudo-classes like : hover
            or: active or classes dynamically set by using JavaScript.</p>
    </div>


</body>

</html>