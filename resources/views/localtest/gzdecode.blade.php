<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Fomatter</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="flatUI/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="flatUI/css/flat-ui.css" rel="stylesheet">
<link href="flatUI/css/demo.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.ico">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <style>
    .demo-col{
        margin-top:30px;
    }
    [result]{
        font-size:20px;
        font-weight:25px;
    }
    </style>
</head>
<body>
	<div class="container">
		<form action="" method="post" id="form-01">
		       <input type="submit" value="GZ-SUBMIT" class="btn  btn-primary">
		       <a onclick="$('#result-field').format({method: 'xml'});" class="btn  btn-primary">XML-FORMAT</a>
		       <a onclick="$('#result-field').format({method: 'json'});" class="btn  btn-primary">JSON-FORMAT</a>
				<textarea rows="33" result=1  spellcheck="false"  id="result-field"  name="content"  placeholder="" class="form-control">{{$result}}</textarea>
		</form>
	</div>
	<!-- /.container -->
	<!-- Load JS here for greater good =============================-->
	<script src="flatUI/js/jquery-1.8.3.min.js"></script>
	<script src="flatUI/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="flatUI/js/jquery.ui.touch-punch.min.js"></script>
	<script src="flatUI/js/bootstrap.min.js"></script>
	<script src="flatUI/js/bootstrap-select.js"></script>
	<script src="flatUI/js/bootstrap-switch.js"></script>
	<script src="flatUI/js/flatui-checkbox.js"></script>
	<script src="flatUI/js/flatui-radio.js"></script>
	<script src="flatUI/js/jquery.tagsinput.js"></script>
	<script src="flatUI/js/jquery.placeholder.js"></script>
	<script src="flatUI/js/jquery.format.js"></script>
	
	<script>

	
    $(function(){
        
    	@if($result)
    	    $('#result-field').format({method: 'xml'});
        @endif
    		   
    	
    })
	</script>
	
	
</body>
</html>