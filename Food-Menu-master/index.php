
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="ajax/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



</head>
<body>




<form class="form-inline"  method="post" name="Pizza" onclick="validate()">

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Sandwiches</th>
            <th scope="col">Quantity</th>
            <th scope="col">X</th>
            <th scope="col">Price($)</th>
            <th scope="col">=</th>
            <th scope="col">Price</th>
        </tr>

        </thead>
        <tbody>
        <tr>
            <th scope="row">The Classic-Slices of your choice of meat* with lettuce, tomato, and cheese.</th>
            <td><div class="number"><input type="number" id="n1"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v1" value="4.75" readonly></div></td>
        <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result1"></span></div></td>
        </tr>



        <tr>
            <th scope="row">Croissant Sandwich-Slices of your choice of meat* with lettuce, tomato, and cheese on a croissant.</th>
            <td><div class="number"><input type="number" id="n2"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v2" value="5.50" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result2"></span></div></td>
        </tr>



        <tr>
            <th scope="row">Veggie Wrap-Lettuce, tomato, peppers, olives, and cheese in an oversized tortilla wrap. * Meats include chicken, ham, turkey, and roast beef.</th>
            <td><div class="number"><input type="number" id="n3"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v3" value="4.50" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result3"></span></div></td>
        </tr>


        </tbody>


        <thead class="thead-dark">
        <tr>
            <th scope="col">Salad</th>
            <th scope="col">Quantity</th>
            <th scope="col">X</th>
            <th scope="col">Price($)</th>
            <th scope="col">=</th>
            <th scope="col">Price</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th scope="row">Caesar Salad-A classic salad with Ranch dressing.</th>
            <td><div class="number"><input type="number" id="n4"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v4" value="2.50" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result4"></span></div></td>
        </tr>


        <tr>
            <th scope="row">Grilled Chicken Salad-Strips of grilled chicken on top of salad with Ranch dressing.</th>
            <td><div class="number"><input type="number" id="n5"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v5" value="3.25" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result5"></span></div></td>
        </tr>
        </tbody>





        <thead class="thead-dark">
        <tr>
            <th scope="col">Beverages</th>
            <th scope="col">Quantity</th>
            <th scope="col">X</th>
            <th scope="col">Price($)</th>
            <th scope="col">=</th>
            <th scope="col">Price</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th scope="row">Lemonade, Tea, Juices, and Soda</th>
            <td><div class="number"><input type="number" id="n6"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v6" value="1.75" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result6"></span></div></td>
        </tr>


        </tbody>






        <thead class="thead-dark">
        <tr>
            <th scope="col">Desserts</th>
            <th scope="col">Quantity</th>
            <th scope="col">X</th>
            <th scope="col">Price($)</th>
            <th scope="col">=</th>
            <th scope="col">Price</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th scope="row">Sundae-Vanilla ice-cream with chocolate syrup and a cherry.</th>
            <td><div class="number"><input type="number" id="n7"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v7" value="1.5" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result7"></span></div></td>
        </tr>


        <tr>
            <th scope="row">Brownie Sundae-Vanilla ice-cream with chocolate syrup and a cherry on top of a warm brownie.</th>
            <td><div class="number"><input type="number" id="n8"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v8" value="2.25" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result8"></span></div></td>
        </tr>



        <tr>
            <th scope="row">Freshly Baked Pie-A slice of warm pie. Flavors include cherry, blueberry, and apple.</th>
            <td><div class="number"><input type="number" id="n9"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="v9" value="1.75" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="result9"></span></div></td>
        </tr>


        </tbody>


    </table>



    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Total_QTY</th>
            <th scope="col">X</th>
            <th scope="col">Price</th>
            <th scope="col">=</th>
            <th scope="col">In_Total</th>

        </tr>

        </thead>

        <tbody>
        <tr>



            <td><div class="number"><span id="T1"></div></td>
            <td>X</td>
            <td><div class="number"><input type="text" id="P1" value="5" readonly></div></td>
            <!--    <td id="v1" value='4.75' >4.75</td>-->
            <td>=</td>
            <td><div class="number" ><span id="res1"></span></div></td>
        </tr>


        </tbody>


 <button onclick="validate()">Refresh</button>








</form>


<script>

     function validate() {
         var sand1 = document.getElementById('n1').value;
         var sand2 = document.getElementById('v1').value;
         //   console.log(my1);
         //   console.log(my2);
      //   var myResult1;

         //  myResult = parseFloat(my1) * parseFloat(my2); // Parse the strings

         document.getElementById("result1").innerHTML= sand1 * sand2;
         //  console.log(myResult);



         var sand3 = document.getElementById('n2').value;
         var sand4 = document.getElementById('v2').value;
         document.getElementById("result2").innerHTML= sand3 * sand4;


         var sand5 = document.getElementById('n3').value;
         var sand6 = document.getElementById('v3').value;
         document.getElementById("result3").innerHTML= sand5 * sand6;


         var sal1 = document.getElementById('n4').value;
         var sal2 = document.getElementById('v4').value;
         document.getElementById("result4").innerHTML= sal1 * sal2;


         var sal3 = document.getElementById('n5').value;
         var sal4 = document.getElementById('v5').value;
         document.getElementById("result5").innerHTML= sal3 * sal4;



         var drink1 = document.getElementById('n6').value;
         var drink2 = document.getElementById('v6').value;
         document.getElementById("result6").innerHTML= drink1 * drink2;


         var des1 = document.getElementById('n7').value;
         var des2 = document.getElementById('v7').value;
         document.getElementById("result7").innerHTML= des1 * des2;


         var des3 = document.getElementById('n8').value;
         var des4 = document.getElementById('v8').value;
         document.getElementById("result8").innerHTML= des3 * des4;


         var des5 = document.getElementById('n9').value;
         var des6 = document.getElementById('v9').value;
         document.getElementById("result9").innerHTML= des5 * des6;





        var k = (sand1 * sand2)+(sand3 * sand4)+(sand5 * sand6)+(sal1 * sal2)+(sal1 * sal2)+(drink1 * drink2)+(des1 * des2)+(des3 * des4)+(des5 * des6);

         document.getElementById('T1').innerHTML = k;
       //console.log((sand1 * sand2) + (sand3 * sand4) + (sand5 * sand6) + (sal1 * sal2) + (sal1 * sal2) + (drink1 * drink2) + (des1 * des2) + (des3 * des4) + (des5 * des6));

         var total2 = document.getElementById('P1').value;
        //var total= parseFloat("total1");
       //  console.log(total1);
        // console.log(total1);
         //console.log(total2);

         document.getElementById("res1").innerHTML= total2 * k;




     }

</script>
</body>
</html>








