
    <title>Payment</title>
    <center style="background-color:#000000;">
    <link href="/hiba/bootstrap/css/bootstrap.css" rel="stylesheet">

   <embed width="800" height="300" src="images.jpg">
    </center>

        
  

<body>


<table>


<div>

			<tr>
				<td style="background-color:#D6CC94; height:50px;">


							

						<embed width="300" height="200" src="https://www.suninnshotel.com.my/images/kepong_map.jpg"><br>
										
						<embed width="300" height="200" src="http://media.expedia.com/hotels/8000000/7420000/7414500/7414420/7414420_69_b.jpg"><br>
						<embed width="300" height="200" src="http://1.bp.blogspot.com/-uwDxpXa1JSY/Tw-awaWe4oI/AAAAAAAAAHg/zNHupFjXLgM/s1600/IMG_0661.JPG"><br>
				            	
				
				</td>


				<td style="background-color:#D6CC94; height:50px; width:2000px;">
				<div>
				
					<center>

					<form method="post" action="checking_pay.php">

					<input type = "hidden" id = "room_id" name = "room_id" value = "<?php echo $_GET["room_id"] ;?>"> 
					<input type="hidden" id = "booking_id" name="booking_id" value="<?php echo $_GET["book"] ;?>">
					<input type = "hidden" id = "room" name = "room" value = "<?php echo $_GET["room"] ;?>">
					<input type = "hidden" id = "check_in" name = "check_in" value = "<?php echo date('d/m/Y', $_GET["date_start"]) ;?>">
					<input type = "hidden" id = "check_out" name = "check_out" value = "<?php echo date('d/m/Y',$_GET["date_end"]);?>">
					<fieldset>

					<!-- Form Name -->
					<h1>Payment</h1>

					<!-- Text input-->
					
					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="textinput">Card Number</label>
					  <div class="controls">
					    <input id="textinput" name="card" type="text" placeholder="" required="">
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="control-group">
					  <label class="control-label" for="month">Card Expiry Date</label>
					  <div class="controls">
					    <select id="month" name="month" required>
					     
					      <option>Jan (01)</option>
					      <option>Feb (02)</option>
					      <option>Mar (03)</option>
					      <option>Apr (04)</option>
					      <option>May (05)</option>
					      <option>June (06)</option>
					      <option>July (07)</option>
					      <option>Aug (08)</option>
					      <option>Sep (09)</option>
					      <option>Oct (10)</option>
					      <option>Nov (11)</option>
					      <option>Dec (12)</option>
					    </select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="control-group">
					  <label class="control-label" for="year">Year</label>
					  <div class="controls">
					    <select id="year" name="year" required>
					  
					      <option>2014</option>
					      <option>2015</option>
					      <option>2016</option>
					      <option>2017</option>
					      <option>2018</option>
					      <option>2019</option>
					      <option>2020</option>
					      <option>2021</option>
					      <option>2022</option>
					      <option>2023</option>
					      <option>2024</option>
					    </select>
					  </div>
					</div>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="textinput">Card CVV Number</label>
					  <div class="controls">
					    <input id="textinput" name="cvv" type="text" placeholder="" required="">
					    
					  </div>
					</div>

					<div class="cotrol-group">
						<label>Price(RM)</label>
						<div class="controls">
						<center>
						<input type="text" id="price" name="price" readonly style="text-align: center" value="<?php echo $_GET["price"] ;?>" >
						</center>
						</div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="singlebutton"></label>
					  <div class="controls">
					    <button id="singlebutton" name="pay" class="btn btn-success">Save<a href="?option=pay"></a></button>
					  </div>
					</div>
					<br>
						 <a href="http://www.cvvnumber.com/cvv.html" target="_blank" style="font-size:11px">What is my CVV code?</a>
					</fieldset>
					</form>
					</center>
		
				</div>
				</td>
				

			</tr>



			<tr>
				<td colspan="2" style="background-color:#796541;text-align:center;"> Copyright by amtis.com </td>
			
			</tr>
</table>

</body>



