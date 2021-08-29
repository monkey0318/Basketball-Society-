<!DOCTYPE html>
<html lang="en">
    <head>

        <!Required meta tags>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!Created for cart and payment wed desight>
    <meta name="author" content="Yuvan Pillaii A/L G.Raejndran">

    <!icon>
    <link rel="shortcut icon" type="image/x-icon" href="img/TARC.png">

    <!link for bookstrap>
    

    <!link for style.css>
    <link href="shop.css" rel="stylesheet"/>
    <link href="shop background.css" rel="stylesheet">

    <!title>
    <title>Shop</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="img/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="event.php">EVENT</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                </ul>
            </nav>
            <img src="img/menu.jpg" class="menu-icon">
        </div>
        <header>
            <div id="titleId" style="padding: 40px;">
                <p style="clear:both;font-weight: bold;font-size: 30pt; color: whitesmoke; text-align: center;">Checkout Form</p>
            </div> 

            <form action=""name="order" id="order">

                <div style="padding: 40px;">
                    <table style="width: 100%;">

                        <tr>
                            <td style="width: 10%; color: whitesmoke">Name&nbsp;</td>

                            <!--required is user much key in data if not will remind -->
                            <td style="width: 2%;">&nbsp;</td>
                            <td style="width: 20%;">
                                <input style="width: 100%;" type="name" name="customerName" id="customerName"   required  />
                            </td>
                            <td style="width: 4%;">&nbsp;</td>
                            <td style="width: 10%; color: whitesmoke">Tel No&nbsp;</td>
                            <td style="width: 2%;">&nbsp;</td>
                            <td style="width: 20%;"><input type="tel" name="telNo" id="telNo" style="width: 100%;"  required /></td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 10%; color: whitesmoke">Course&nbsp;</td>
                            <!--required is user much key in data if not will remind -->
                            <td style="width: 2%;">&nbsp;</td>
                            <td style="width: 20%;">
                                <input style="width: 100%;" type="course" name="course" id="course"   required  />
                            </td>
                            <td style="width: 4%;">&nbsp;</td>
                            <td style="width: 10%; color: whitesmoke">Student ID&nbsp;</td>
                            <td style="width: 2%;">&nbsp;</td>
                            <td style="width: 20%;"><input type="studentid" name="studentid" id="studentid" style="width: 100%;"  required /></td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td style="color: whitesmoke">Payment Type&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><select style="width: 100%;" name="paymentType" id="paymentType">
                                    <option value="cashOnDelivery">Cash On Delivery</option>
                                    <option value="credit/DebitCard">Credit/Debit Card</option>
                                    <option value="onlineBanking">Online Banking</option>
                                </select></td>
                            <td>&nbsp;</td>
                            <td style="color: whitesmoke">Order Date&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="date" id="date" style="width: 100%;"  class=numbers disabled/><br></td>
                        </tr>

                    </table>
                </div>

                <hr style="border-top: 10px solid orange;width: 100%;" />

                <div style="padding: 40px;">
                    <table>

                        <tr>
                        <p style="clear:both;font-weight: bold;font-size: 30pt; color: orange; text-align: center;">Basketball Product</p>
                        </tr>

                        <tr>
                            <td style="width:30%" > 
                                <a target="_blank" href="img/Los_Angeles_Lakers.jpg" ><img class="imgClass" src="img/Los_Angeles_Lakers.jpg" alt="Los Angeles Lakers"/></a>
                            </td>
                            <td style="padding: 40px; color: orange;"><span class="title">Los Angeles Lakers</span>
                                <br>
                                <br>COLOR: BLACK
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 5596)
                                <br>
                                <br>&#9733; &#9733; &#9733; &#9733; &#9733;
                                <br>RM 445.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOFLosAnglesLakers" name="quantity" min="0" max="10">             
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>                   
                            <td style="width:30%"> 
                                <a target="_blank" href="img/Golden_State_Warriors.jpg" ><img class="imgClass" src="img/Golden_State_Warriors.jpg" alt="Golden State Warriors"/></a>
                            </td>
                            <td style="padding: 40px; color: orange;"><span class="title">Golden State Warriors</span>
                                <br>
                                <br>COLOR: White
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 0111)
                                <br>
                                <br>&#9733; &#9733; &#9733; &#9733;
                                <br>RM 528.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOfGoldenStateWarriors" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td style="width:30%">
                                <a target="_blank" href="img/Boston_Celtics.jpg" ><img class="imgClass" src="img/Boston_Celtics.jpg" alt="Boston Celtics"/></a>
                            </td>
                            <td style="padding: 20px; color: orange;"><span class="title">Boston Celtics</span>
                                <br>
                                <br>COLOR: Black
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 0359)
                                <br>
                                <br>&#9733; &#9733; &#9733; &#9733;
                                <br>RM 570.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOfBostonCeltics" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td style="width:30%">
                                <a target="_blank" href="img/Chicago_Bulls.jpg" ><img class="imgClass" src="img/Chicago_Bulls.jpg" alt="Chicago Bulls"/></a>
                            </td>
                            <td style="padding: 20px; color: orange;"><span class="title">Chicago Bulls</span>
                                <br>
                                <br>COLOR: Black
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 2234)
                                <br>
                                <br>&#9733; &#9733; &#9733;
                                <br>RM 445.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOfChicagoBulls" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>

                            <td style="width:30%">
                                <a target="_blank" href="img/Cleveland_Cavaliers.jpg" ><img class="imgClass" src="img/Cleveland_Cavaliers.jpg" alt="Cleveland Cavaliers"/></a>
                            </td>
                            <td style="padding: 20px; color: orange;"><span class="title">Cleveland Cavaliers</span>
                                <br>
                                <br>COLOR: Red
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 4156)
                                <br>
                                <br>&#9733; &#9733; &#9733; &#9733;
                                <br>RM 422.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOfClevelandCavaliers" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>                
                            <td style="width:30%">
                                <a target="_blank" href="img/Detroit_Pistons.jpg" ><img class="imgClass" src="img/Detroit_Pistons.jpg" alt="Detroit Pistons"/></a>
                            </td>
                            <td style="padding: 20px; color: orange;"><span class="title">Detroit Pistons</span>
                                <br>
                                <br>COLOR: Blue
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 5671)
                                <br>
                                <br>&#9733; &#9733; &#9733; &#9733; &#9733;
                                <br>RM 401.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  onClick="calculate()" type="number" id="quantityDetroitPistons" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td style="width:30%">
                                <a target="_blank" href="img/Miami_Heat.jpg" ><img class="imgClass" src="img/Miami_Heat.jpg" alt="Miami Heat"/></a>
                            </td>
                            <td style="padding: 20px; color: orange;"><span class="title">Miami Heat</span>
                                <br>
                                <br>COLOR: White
                                <br>Brand: Nike
                                <br>Material: 100% Polyester
                                <br>SIZE: M
                                <br>(Product ID: 0222)
                                <br>
                                <br>&#9733; &#9733; &#9733;
                                <br>RM 570.00
                                <br>
                                <label for="quantity">Quantity (between 1 and 10):</label>
                                <input value="0"  onKeyUp="calculate()" onClick="calculate()"  type="number" id="quantityOfMiamiHeat" name="quantity" min="0" max="10">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr><td colspan="4"><hr width="100%" style="border-top: 2px dashed orange;" /></td></tr>
                        <tr>
                            <td align=right width=360 colspan=3 class="title" style="color: orange;" >Total Amount: &nbsp;&nbsp;</td>
                            <td width=85><input type="text" name="totalAmount" id="totalAmount" size="10"   value="0.00"  disabled/></td>
                        </tr>               
                    </table>

                    <hr width="100%" style="border-top: 2px dashed orange;"/>
                    <div style="text-align:center;">
                        <input style="background-color: whitesmoke;" type="Submit" value="Submit" />
                        &nbsp;&nbsp;

                        <input style="background-color: whitesmoke;" type="button" value="Cancel Order" onclick="cancelorder()"  />
                        &nbsp;
                    </div>
            </form>
        </header>
    </div>
</body>
</html>

<script type="text/javascript" src="payment.js" defer></script>
<script type="text/javascript">

                            var LosAnglesLakersPrice = 445.00;
                            var GoldenStateWarriorsPrice = 528.00;
                            var BostonCelticsPrice = 570.00;
                            var ChicagoBullsPrice = 445.00;
                            var ClevelandCavaliersPrice = 422.00;
                            var DetroitPistonsPrice = 401.00;
                            var MiamiHeatPrice = 401.00;

                            function calculate() {
                                console.log("gg")
                                var total = 0;
                                var LosAnglesLakersTotalPrice = 0;
                                var GoldenStateWarriorsTotalPrice = 0;
                                var BostonCelticsTotalPrice = 0;
                                var ChicagoBullsTotalPrice = 0;
                                var ClevelandCavaliersTotalPrice = 0;
                                var DetroitPistonsTotalPrice = 0;
                                var MiamiHeatTotalPrice = 0;

                                LosAnglesLakersTotalPrice = document.getElementById('quantityOFLosAnglesLakers').value * LosAnglesLakersPrice;
                                GoldenStateWarriorsTotalPrice = document.getElementById('quantityOfGoldenStateWarriors').value * GoldenStateWarriorsPrice;
                                BostonCelticsTotalPrice = document.getElementById('quantityOfBostonCeltics').value * BostonCelticsPrice;
                                ChicagoBullsTotalPrice = document.getElementById('quantityOfChicagoBulls').value * ChicagoBullsPrice;
                                ClevelandCavaliersTotalPrice = document.getElementById('quantityOfClevelandCavaliers').value * ClevelandCavaliersPrice;
                                DetroitPistonsTotalPrice = document.getElementById('quantityDetroitPistons').value * DetroitPistonsPrice;
                                MiamiHeatTotalPrice = document.getElementById('quantityOfMiamiHeat').value * MiamiHeatPrice;

                                total = LosAnglesLakersTotalPrice + GoldenStateWarriorsTotalPrice + BostonCelticsTotalPrice + ChicagoBullsTotalPrice + ClevelandCavaliersTotalPrice + DetroitPistonsTotalPrice + MiamiHeatTotalPrice;

                                document.getElementById('totalAmount').value = total.toFixed(2);
                            }

</script>
</html>
