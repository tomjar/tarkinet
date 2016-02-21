	<!-- Modal popup for adding a new company -->
	<div class="alert alert-danger">
	<?php echo validation_errors(); ?>
	</div>
	<?php echo form_open('companies/create'); ?>
		<div class="col-1g-12">
			<div class="col-lg-12">
				<div class="col-1g-6">
					<!-- company name -->
					<label for="companyname" class="control-label">Company Name:</label>
					<input id="companyname" name="companyname" type="input" class="form-control"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
								<!-- company desc -->
					<label for="companydesc" class="control-label">Company Description:</label>
					<input id="companydesc" name="companydesc" type="input" class="form-control"></input>
				</div>
			</div>
			<div class="col-lg-12">
					<div class="col-1g-6">
								<!-- company address -->
					<label for="companyaddress" class="control-label">Company Address:</label>
					<textarea id="companyaddress" name="companyaddress" rows="4" cols="50" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-lg-12">
					<div class="col-1g-6">
								<!-- company phone -->
					<label for="companyphone" class="control-label">Company Phone:</label>
					<input id="companyphone" name="companyphone" type="input" class="form-control"></input>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
							<!-- company city -->
					<label for="companycity" class="control-label">Company City:</label>
					<input id="companycity" name="companycity" type="input" class="form-control"></input>
				</div>	
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
							<!-- company state -->
					<label for="companystate" class="control-label">Company State:</label>
					<input id="companystate" name="companystate" type="input" class="form-control"></input>
				</div>	
			</div>
			<div class="col-lg-12">
				<div class="col-1g-6">
							<!-- company zip code -->
					<label for="companyzipcode" class="control-label">Company Zip Code:</label>
					<input id="companyzipcode" name="companyzipcode" type="input" class="form-control"></input>
				</div>	
			</div>
		
				<button type="submit" class="btn btn-default">Save</button>
				<button type="button" class="btn btn-default">Close</button>

		</div>
	</form>