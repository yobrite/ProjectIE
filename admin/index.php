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
	<style>
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
			color: white;
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
	      <li class="active"><a href="#">Customer</a></li>
				<li><a href="#">Product</a></li>
	      <li><a href="#">Order List</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	  </div>
	</nav>

	<div class="container">
      <div class="">
        <h1>Admin Console</h1>
        <div class="col-sm-12">
			<table class="table table-condensed table-hover table-striped" width="60%" cellspacing="0">
				<thead>
					<tr>
						<th style='width:60px;'>ID</th>
						<th>First Name</th>
						<th>Phone</th>
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
				 $('#employee_grid').append("<tr><td>" + response[i].cID + "</td><td data-name='cFName' class='cFName' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].cFName + "</td><td data-name='phoneNumber' class='phoneNumber' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].phoneNumber + "</td><td data-name='email' class='email' data-type='text' data-pk='"+response[i].cID+"'>" + response[i].email + "</td></tr>");
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
	make_editable_col('#employee_grid','td.email','response.php?action=edit','Email');
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
</script>
