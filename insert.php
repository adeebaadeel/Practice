<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="myform">
<div>
ID
<input type="text" id="id" name="id"/>
</div>

<div>
Name
<input type="text" id="name" name="name"/>
</div>

<div>
City
<input type="text" id="city" name="city"/>
</div>

<input type="submit" value="insert" id="btn" name="btn"/>

</form>


<script>

$(document).ready(function(e) {
    
	$('#btn').click(function(r){
		
		r.preventDefault();
		
		var data=$('#myform').serialize();
		
		$.post('insertQueryForm.php',data,function(data){
			
			alert(data);
			});
		
		
		
		
		});
	
});

</script>


</body>
</html>