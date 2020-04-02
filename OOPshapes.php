<?php
//create a program which asks for required inputs and outputs the area and perimeter of the 3 shapes
// create variables for the area, perimeter/cirumference, length, width, base, height and radius
$RectArea=0;
$RectPerimeter=0;
$RectLength=" ";
$RectWidth=" ";
// create variables for the area, perimeter, base and height of the triangle
$TriArea=0;
$TriPerimeter=0;
$TriBase=" ";
$TriHeight=" ";
//create variables for the area, circumference and radius of the circle
$CirArea=0;
$CirCircumference=0;
$pi=3.14;
$CirRadius=" ";

//calculations to get area and perimeter of the 3 shapes
if(isset($_POST[CalcBtn]))
{
    $RectLength= $_POST["RectLength"];
    $RectWidth= $_POST["RectWidth"];
    $TriBase= $_POST["TriBase"];
    $TriHeight= $_POST["TriHeight"];
    $CirRadius= $_POST["CirRadius"];


    //calculate the area of the rectangle and store it into RectArea
    $RectArea=$RectLength*$RectWidth;
    
    //calculate the perimeter of the rectangle and store it into RectPerimeter
    $RectPerimeter=2*($RectLength+$RectWidth);

    //calculate the area of the triangle and store it into TriArea
    $TriArea=$TriBase*$TriHeight/2;
    
    //calculate the perimeter of the triangle and store it into TriArea
    $TriPerimeter=$TriBase*3;

    //calculate the area of the circle
    $CirArea=$pi*$CirRadius*$CirRadius;

    //calculate the perimeter of the circle
    $CirCircumference=$pi*$CirRadius*2;

}
?>

<!-- create the html to be able to get the inputs and calculate the outputs of the 3 shapes -->
<! doctype html>
<html>
    <body>
        <!-- To get and ouput variables for the rectangle -->
        <h1>Area and Perimeter of rectangle</h1>
        <!-- Outputs the area and the perimeter of the rectangle --->
        <h2>Area: <?=$RectArea?></h2> 
        <h2>Perimeter:<?=$RectPerimeter?></h2>
        <form action="" method="post">
        <!-- creates an input for the rectangles length and width -->
            <label for="RectLength">Length:
                <input type="text" name="RectLength" value="<?=$RectLength?>">
            </label>
            <label for="RectWidth">Width:
                <input type="text" name="RectWidth" value="<?=$RectWidth?>">
            </label>

         <!-- To get and ouput variables for the triangle -->
        <h1>Area and Perimeter of triangle</h1>
        <!-- Outputs the area and the perimeter of the triangle --->
        <h2>Area: <?=$TriArea?></h2> 
        <h2>Perimeter:<?=$TriPerimeter?></h2>
        <!-- creates an input for the triangles base and height -->
            <label for="TriBase">Base:
                <input type="text" name="TriBase" value="<?=$TriBase?>">
            </label>
            <label for="TriHeight">Height:
                <input type="text" name="TriHeight" value="<?=$TriHeight?>">
            </label>

            <!-- to get and output variables for the circle -->
            <h1>Area and Circumference of circle</h1>
            <!-- Outputs the area and circumference of the circle -->
            <h2>Area: <?=$CirArea?></h2>
            <h2>Circumference: <?=$CirCircumference?></h2>
            <!-- creates an input for the circles radius-->
            <label for="CirRadius">Radius:
                <input type="text" name="CirRadius" value="<?=$CirRadius?>">
            </label>

            <!-- button to submit the values -->
            <button name="CalcBtn" type="submit">Calculate</button>
        </form>
    </body>
</html>