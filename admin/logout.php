<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Console</title>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>

  <script type="text/javascript">

  $(document).ready(function(){
    BootstrapDialog.show({
      title: 'Logout',
        message: 'Logout from admin onsole',
        buttons: [{
          label: 'Close',
            action: function(dialog) {
              dialog.close();
            }
        }]
      });
  });
  </script>
</head>
<body>
  <div class="container">Logout</div>
</body>
