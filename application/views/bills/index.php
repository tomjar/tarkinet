<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.2.0/css/colReorder.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.0.1/css/select.dataTables.min.css"/>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.2.0/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.0.1/js/dataTables.select.min.js"></script>

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
 
 
$("#billTable").DataTable({
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
			title: "exampletable_" + getTodaysTimeStamp(),
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
<table id="billTable" class="">
	<thead>
		<tr>
			<th>Bill Name</th>
			<th>Bill Cost</th>
			<th>Bill Due Date</th>
			<th>Bill Auto Renews?</th>
			<th>Is Bill Payed?</th>
			<th>Bill Payed Date</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($Bills as $bill_item): ?>
			<tr>
				<td>
					<?php echo $bill_item['BillName']; ?>
				</td>
				<td>
						<?php echo $bill_item['BillCost']; ?>
				</td>
				<td>
						<?php echo $bill_item['BillDueDate']; ?>
				</td>
				<td>
						<?php echo $bill_item['IsBillAutoPayment']; ?>
				</td>
				<td>
						<?php echo $bill_item['IsBillPayed']; ?>
				</td>
				<td>
						<?php echo $bill_item['BillPayedDate']; ?>
				</td>
				<td>
					<p>
					<a href="<?php echo site_url('companies/'.$bill_item['CompanyID']); ?>">View Company</a></p>
				</td>
	<?php endforeach; ?>
	</tbody>
</table
</div>

