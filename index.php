<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    ul,
    #myUL {
        list-style-type: none;
    }

    #myUL {
        margin: 0;
        padding: 0;
    }

    .caret {
        cursor: pointer;
        -webkit-user-select: none;
        /* Safari 3.1+ */
        -moz-user-select: none;
        /* Firefox 2+ */
        -ms-user-select: none;
        /* IE 10+ */
        user-select: none;
    }

    .caret::before {
        content: "\25B6";
        color: black;
        display: inline-block;
        margin-right: 6px;
    }

    .caret-down::before {
        -ms-transform: rotate(90deg);
        /* IE 9 */
        -webkit-transform: rotate(90deg);
        /* Safari */
        '
transform: rotate(90deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
    </style>
</head>

<body>

    <h2>CSS</h2>

    <ul id="myUL">
        <li>
            <span class="caret">Positioning application</span>
            <ul class="nested">
                <li><a href="position.php" target="_blank">Position</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">Opacity</span>
            <ul class="nested">
                <li><a href="opacity-on-html-element.php" target="_blank">Opacity on html element</a></li>
                <li><a href="opacity-on-image.php" target="_blank">Opacity on image</a></li>
                <li><a href="opacity-on-text.php" target="_blank">Opacity on text</a></li>
                <li><a href="flex-wrap.php" target="_blank">Flex wrap</a></li>
                <li><a href="transition.php" target="_blank">Transition</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">Flex</span>
            <ul class="nested">
                <li><a href="inherit.php" target="_blank">Inherit</a></li>
                <li><a href="flexBox.php" target="_blank">Flex Box</a></li>
                <li><a href="flex-direction.php" target="_blank">Flex direction</a></li>
                <li><a href="flex-wrap.php" target="_blank">Flex wrap</a></li>
                <li><a href="transition.php" target="_blank">Transition</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">
                CSS Box Model
            </span>
            <ul class="nested">
                <li><a href="borders.php" target="_blank">Borders</a></li>
                <li><a href="margin.php" target="_blank">Margin</a></li>
                <li><a href="padding.php" target="_blank">Padding</a></li>
                <li><a href="height.php" target="_blank">Height</a></li>
                <li><a href="width.php" target="_blank">Width</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">
                CSS Outline
            </span>
            <ul class="nested">
                <li><a href="outline.php" target="_blank">Outline</a></li>
                <li><a href="outline-color.php" target="_blank">Outline-color</a></li>
                <li><a href="outline-width.php" target="_blank">Outline-width</a></li>
                <li><a href="outline-offset.php" target="_blank">Outline-offset</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">
                CSS Text
            </span>
            <ul class="nested">
                <li><a href="text-color.php" target="_blank">Text color</a></li>
                <li><a href="text-alignment.php" target="_blank">Text alignment</a> || <a
                        href="https://www.w3schools.com/css/css_text_align.asp" target="_blank">Read more ...</a></li>
                <li><a href="text-decolation.php" target="_blank">Text Decolation</a> || <a
                        href="https://www.w3schools.com/css/css_text_decoration.asp" target="_blank">Read more ...</a>
                </li>
                <li><a href="text-transformation.php" target="_blank">Text Transformation</a></li>
                <li><a href="text-spacing.php" target="_blank">Text Spacing</a> || <a
                        href="https://www.w3schools.com/css/css_text_spacing.asp" target="_blank">Read
                        more ...</a></li>
                <li><a href="text-shadow.php" target="_blank">Text shadow</a> || <a
                        href="https://www.w3schools.com/css/css_text_shadow.asp" target="_blank">Read
                        more ...</a></li>

            </ul>
        </li>
        <li>
            <span class="caret">Transition</span>
            <ul class="nested">
                <li><a href="transition.php" target="_blank">Transition</a></li>
                <li><a href="transition-change-several-property-values.php" target="_blank">Transition Change Several
                        Property Values</a></li>
                <li><a href="transition-timing-function.php" target="_blank">Transition timing function (speed
                        curve)</a></li>
                <li><a href="transition-delay.php" target="_blank">Transition delay</a></li>
            </ul>
        </li>
        <li>
            <span class="caret">Animation </span>
            <ul class="nested">
                <li><a href="@keyframes.php" target="_blank">@keyframes</a></li>
                <li><a href="animation-delay.php" target="_blank">Animation delay</a></li>
                <li><a href="animation-iteration-count.php" target="_blank">Animation iteration count</a></li>
                <li><a href="animation-direction.php" target="_blank">Animation direction</a></li>
                <li><a href="animation-timing-function.php" target="_blank">Animation speed curve</a></li>
                <li><a href="animation-short-hand.php" target="_blank">Animation short hand</a></li>


            </ul>
        </li>
        <li>
            <span class="caret"> CSS 2D and 3D transformation </span>
            <ul class="nested">
                <li>
                    <span class="caret"> CSS 2Dtransformation </span>
                    <ul class="nested">
                        <li><a href="translate.php" target="_blank">translate()</a></li>
                        <li><a href="rotate.php" target="_blank">totate()</a></li>
                        <li><a href="scale.php" target="_blank">scale()</a></li>
                        <li><a href="skew.php" target="_blank">skew()</a></li>
                        <li><a href="matrix.php" target="_blank">matrix()</a></li>
                    </ul>
                </li>
                <li>
                    <span class="caret"> CSS 3D Transforms </span>
                    <ul class="nested">
                        <li><a href="translate.php" target="_blank">translate()</a></li>
                        <li><a href="3d-rotateX.php" target="_blank">3D totateX()</a></li>
                        <li><a href="scale.php" target="_blank">scale()</a></li>
                        <li><a href="skew.php" target="_blank">skew()</a></li>
                        <li><a href="matrix.php" target="_blank">matrix()</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="object-fit.php" target="_blank">Object-fit</a></li>
        <li>
            <span class="caret"> CSS Flexbox </span>
            <ul class="nested">
                <li><a href="@keyframes.php" target="_blank">@keyframes</a></li>
                <li><a href="animation-delay.php" target="_blank">Animation delay</a></li>
                <li><a href="animation-iteration-count.php" target="_blank">Animation iteration count</a></li>
                <li><a href="animation-direction.php" target="_blank">Animation direction</a></li>
                <li><a href="animation-timing-function.php" target="_blank">Animation speed curve</a></li>
                <li><a href="animation-short-hand.php" target="_blank">Animation short hand</a></li>


            </ul>
        </li>
    </ul>

    <script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
    </script>

</body>

</html>