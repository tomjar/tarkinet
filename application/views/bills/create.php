<script type="text/javascript">
/**
* @desc jquery function, called automatically when the page is ready
*/
$(document).ready(function () {
"use strict";
 
  // This makes all textboxes jquery ui calendar pickers
  $(".date").datepicker({
  changeMonth: true,
  changeYear: true,
  showButtonPanel: true
  });
 
});
</script>
	
	
	<!-- add a new bill -->
	<?php echo validation_errors(); ?>
	<?php echo form_open('bills/create'); ?>
		<div class="col-1g-12">
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- bill name  -->
					<label for="billname" class="control-label">Bill Name:</label>
					<input id="billname" name="billname" type="input" class="form-control" style="width:400px;"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- bill for company -->
					<label for="companyselect" class="control-label">Bill Cost:</label>
					<select id="companyselect" name="companyselect" class="form-control" style="width:400px;">
						<?php foreach ($Companies as $company_item): ?>
						<?php echo "<option value=\"" . $company_item['CompanyID']. "\">" . $company_item['CompanyName'] . " </option>"; ?>
						<?php endforeach; ?>
					</select> 
				</div>
			</div>			
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- bill cost -->
					<label for="billcost" class="control-label">Bill Cost:</label>
					<input id="billcost" name="billcost" type="input" class="form-control" style="width:400px;"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- bill due date -->
					<label for="billduedate" class="control-label">Bill Due Date:</label>
					<input id="billduedate" name="billduedate" type="input" class="form-control date" style="width:400px;"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- is bill auto payment -->
					<label for="isbillautopayment" class="control-label">Is Bill Auto Payment?:</label>
					<input id="isbillautopayment" name="isbillautopayment" type="checkbox" class="form-control" style="width:400px;"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- is bill payed -->
					<label for="isbillpayed" class="control-label">Is Bill Payed?:</label>
					<input id="isbillpayed" name="isbillpayed" type="checkbox" class="form-control" style="width:400px;"></input>
				</div>	
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- bill payed date -->
					<label for="billpayeddate" class="control-label">Bill Payed Date:</label>
					<input id="billpayeddate" name="billpayeddate" type="input" class="form-control date" style="width:400px;"></input>
				</div>	
			</div>
		
				<button type="submit" class="btn btn-default">Save</button>
				<button type="button" class="btn btn-default">Cancel</button>

		</div>
	</form>