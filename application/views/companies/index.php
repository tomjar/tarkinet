<script type="text/javascript">
$(document).ready(function () {
	
// This function gets todays date, this is used when exporting the table info
function getTodaysTimeStamp() {
	var now = new Date();
	var year = now.getFullYear();
	var month = now.getMonth() + 1;
	var day = now.getDate();
	var hour = now.getHours();
	var minute = now.getMinutes();
	var second = now.getSeconds();
	if (month.toString().length == 1) {
		var month = '0' + month;
	}
	if (day.toString().length == 1) {
		var day = '0' + day;
	}
	if (hour.toString().length == 1) {
		var hour = '0' + hour;
	}
	if (minute.toString().length == 1) {
		var minute = '0' + minute;
	}
	if (second.toString().length == 1) {
		var second = '0' + second;
	}
		var dateTime = year + '-' + month + '-' + day + '_' + hour + '-' + minute + '-' + second;
	return dateTime;
}
 
 
$("#companyTable").DataTable({
		// this dom shows or hides certain items on the data table
		// for example "B" is show buttons
		dom: '<"top">Brflt<"bottom"ip><"clear">',
		//colReorder: true,
		//fixedHeader: true,
		buttons: ['colvis',
			// This is my custom button "Save to Excel"
		{
			extend: "excel",
			text: "Save to Excel",
			title: "exampletable_" + getTodaysTimeStamp(),
			header: true,
			exportOptions: {
			// Export only visible columns
				columns: ":visible"
			}
		},
		// This is my custom button "Save to PDF"
		{
			extend: "pdf",
			text: "Save to PDF",
			title: "companies_" + getTodaysTimeStamp(),
			header: true,
			exportOptions: {
				// Export only visible columns
				columns: ":visible"
			}
		},
		],
		// This hides columns by default
		"columnDefs": [{
			visible: false,
			// targets: [2, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]
		}],
		"order": [
		[0, "asc"]
		],
		"pageLength": 25,
			language: {
				"lengthMenu": "Display _MENU_ records per page"
			},
		"jQueryUI": false,
		"bAutoWidth": false,
		stateSave: true
	});
	
});
</script>
<div class="col-lg-12">

		<div class="col-lg-12">
	<!-- Trigger the modal with a button -->
	<a href="<?php echo site_url('companies/create'); ?>" class="btn btn-success btn-lg" style="float:right;">Add Company</a>
	</div>
	<div class="clearfix"></div>
	<div class="panel panel-default">
		<table id="companyTable">
			<thead>
				<tr>
					<th>Company Name</th>
					<th>Company Description</th>
					<th>Company Address</th>
					<th>Company Phone</th>
					<th>Company City</th>
					<th>Company State</th>
					<th>Company Zip Code</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($Companies as $company_item): ?>
					<tr>
						<td>
							<?php echo $company_item['CompanyName']; ?>
						</td>
						<td>
								<?php echo $company_item['CompanyDescription']; ?>
						</td>
									<td>
								<?php echo $company_item['CompanyAddress']; ?>
						</td>
									<td>
								<?php echo $company_item['CompanyPhone']; ?>
						</td>
									<td>
								<?php echo $company_item['CompanyCity']; ?>
						</td>
									<td>
								<?php echo $company_item['CompanyState']; ?>
						</td>
									<td>
								<?php echo $company_item['CompanyZipCode']; ?>
						</td>
						<td>
							<p>
							<a href="<?php echo site_url('companies/'.$company_item['CompanyID']); ?>">View Company</a></p>
						</td>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

