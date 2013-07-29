<?php include "head.php" ?>
<div class="container" id="give-top" >
	<section id="donate">
		
		<section id="form">
			<form>
			<p class="required"><b>Required*</b></p>
				<section>			
					<h2>Donation Information</h2>
					
					<div>
						<label>I would like to donate:</label>
						<input type="radio" name="amount" value="1000">$1,000<br>
						<input type="radio" name="amount" value="500">$500<br>
						<input type="radio" name="amount" value="250">$250<br>
						<input type="radio" name="amount" value="100">$100<br>
						<input type="radio" name="amount" value="50">$50<br>
						<input type="radio" name="amount" value="other"><input type="text" /><br>
						<p/>
						<label>I would like my donation to support:</label>
						<select name="designation">
							<option value="CCHC">Cape Cod Healthcare</option>
							<option value="CCH">Cape Cod Hospital</option>
							<option value="FH">Falmouth Hospital Hospital</option>
							<option value="VNA">VNA of Cape Cod</option>
							<option value="HOSPICE">VNA of Cape Cod's Hospice Program</option>					
						</select>
					</div>
					</section>
			
					<section>
						<h4><input type="checkbox" name="recurring" value="yes"> This donation is in honor or memory of someone.</h4>
						<div class="hidden">
							<div class="column">
							<label>I am making this donation:</label>
							<select name="tribute">
								<option value="CCHC">On behalf of:</option>
								<option value="CCH">In memory of:</option>
								<option value="FH">In appreciation of:</option>
								<option value="VNA">In honor of:</option>
								<option value="HOSPICE">VNA of Cape Cod's Hospice Program</option>			
							</select>
							</div>

							<div class="column">
							<label>Name</label>
							<input type="text" />
							</div>
								
						</div>
		
					</section>					
					<section>
						<h4><input type="checkbox" name="recurring" value="yes"> This donation is on behalf of a company.</h4>
						
						<div class="hidden">

							<div class="column">
							<label>Company Name</label>
							<input type="text" />
							</div>
								
						</div>
	
						
					</section>

			<input type="submit" value="Next"/>
			</form>
		</section>
		
		<section id="donate-sidebar">
			
		</section>
	</section>
</div>


<?php include "footer.php" ?>
