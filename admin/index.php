<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Console</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
	<style>
	br {
    display: none;
	}
	.modal-dialog {
    width: 800px!important;
	}
	.navbar {
		margin-bottom: 0px;
		border-radius: 0;
	}
	#logo{
		background-image: url('../logo.png');
		background-repeat: no-repeat;
		background-position: center;
		margin: 0;
		padding: 0;
		height: 120px;
		width: 100%;
		background-color: #000000;
	}
	.navbar{}
	.navbar li{
		font-size: 1.2em;
		padding-top: 2px;
		padding-left:10px;
	}
	#searchbox{
		position: absolute;
		top:12px;
		left: 350px;
	}
		.largetext{
			padding: 0;
			font-size: 2.5em;
		}
		#col{
			padding-top: 20px;
			background-color: rgba(255, 255, 255, 0.8);
		}
		textarea{
			resize: none;
		}
		#forgot{
			padding-top: 9px;
			margin-bottom: 10px;
		}

		#background{
			background-image: url('loginbg1234.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			height: 600px;
		}
		#content{
			padding-top: 150px;
		}
		h1{
			/* color: black; */
		}
	</style>
</head>
<body>

  <div class="text-center" id="logo">
	</div>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Admin Console</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="./index.php">Customer</a></li>
				<li><a href="./product.php">Product</a></li>
	      <li><a href="./order.php">Order List</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container" style="margin-bottom:30px; margin-top:30px;">
			<div class="row">
				<div class="col-sm-3">
					<button type="button" class="btn btn-info" onclick='addNewRecord()'>Add new record</button>
				</div>
			</div>
      <div class="row">
				<h1></h1>
        <div class="col-sm-12">
					<table class="table table-condensed table-hover table-striped" width="60%" cellspacing="0">
						<thead>
							<tr>
								<th style='width:60px;'>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Phone</th>
								<th>User Name</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody id="employee_grid">
						</tbody>
					</table>
				</div>
      </div>
    </div>
</body>
</html>
<script type="text/javascript">
$( document ).ready(function() {
	function getShoppingCart(page = 0) {
		$.ajax({
		  type: "GET",
		  url: "response.php?page=" + page,
		  dataType: "json",
		  success: function(response)
		  {
			for (var i = 0; i < response.length; i++) {
				 $('#employee_grid').append("<tr><td>" + response[i].cID + "</td><td data-name='cFName' class='cFName' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].cFName + "</td><td data-name='cLName' class='cLName' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].cLName + "</td><td data-name='phoneNumber' class='phoneNumber' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].phoneNumber + "</td><td data-name='userName' class='userName' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].userName + "</td><td data-name='email' class='email' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].email + "</td></tr>");
			 }
		  },
		 error: function(jqXHR, textStatus, errorThrown) {
			 alert("loading error data " + errorThrown);
		 }
		});
	}

	function make_editable_col(table_selector,column_selector,ajax_url,title) {
		$(table_selector).editable({
			selector: column_selector,
			url: ajax_url,
			title: title,
			type: "POST",
			dataType: 'json'
		  });
		  $.fn.editable.defaults.mode = 'inline';
		}

	getShoppingCart();

	make_editable_col('#employee_grid','td.cFName','response.php?action=edit','Customer First Name');
	make_editable_col('#employee_grid','td.cLName','response.php?action=edit','Last Name');
	make_editable_col('#employee_grid','td.email','response.php?action=edit','Email');
	make_editable_col('#employee_grid','td.userName','response.php?action=edit','User Name');
	make_editable_col('#employee_grid','td.phoneNumber','response.php?action=edit','Phone Number');

	function ajaxAction(action) {
		data = $("#frm_"+action).serializeArray();
		$.ajax({
		  type: "POST",
		  url: "response.php",
		  data: data,
		  dataType: "json",
		  success: function(response)
		  {
			$('#'+action+'_model').modal('hide');
			$("#employee_grid").bootgrid('reload');
		  }
		});
	}
});

const newRecordForm = `<div class="row">
	<div class="col-sm-12 col-sm-offset-0">
    <form role="form" id="newDataForm" data-toggle="validator" class="shake">
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="cFName" class="h4">First name</label>
                <input type="text" class="form-control" id="cFName" placeholder="Enter first name" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="cLName" class="h4">Last name</label>
                <input type="cLName" class="form-control" id="cLName" placeholder="Enter last name" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="phoneNumber" class="h4">Phone</label>
                <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="userName" class="h4">User name</label>
                <input type="text" class="form-control" id="userName" placeholder="Enter user name" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
                <label for="password" class="h4">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </form>
	</div>
</div>`

function submitNewData(dialog) {
	const inputs = $('#newDataForm').find('.form-control');
	const outputs = inputs.map((index, item)=>({ name: item.getAttribute('id'), value: item.value })).toArray();

	$.ajax({
	  type: "POST",
	  url: "response.php?action=add",
	  data: { data: outputs },
	  dataType: "json",
		success: function(response)
		{
			dialog.close();
      BootstrapDialog.show({
          title: 'Status',
          message: 'Successfully',
					buttons: [{
            label: 'Close',
            action: function(dialog) {
              dialog.close();
							location.reload();
						}
          }]
      });
		},
		 error: function(jqXHR, textStatus, errorThrown) {
			 alert("loading error data " + errorThrown);
		 }
	});
}

function addNewRecord() {
  BootstrapDialog.show({
		size: BootstrapDialog.SIZE_LARGE,
    title: 'New Record',
    message: newRecordForm,
    buttons: [{
      label: 'Sumbit',
			cssClass: 'btn-success',
      action: function(dialog) {
				submitNewData(dialog);
      }
    }, {
      label: 'Close',
			cssClass: 'btn-warning',
      action: function(dialog) {
        dialog.close();
      }
    }]
  });
}
</script>
