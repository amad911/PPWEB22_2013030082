<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
	<h2>ajax</h2>
	Input ID <input type="text" name="id" id="id">
	<br>Output: <span id="output"></span>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#id').keyup(function(){
			proses_data();
		})
		
		function proses_data(){
			var id = $('#id').val();
			$.ajax({
			      type  : "POST",
			      url   : "get_mhs.php",
			      data  : 'id='+id,
			      success : function(res){
			                  $('#output').html(res);
							}
			})
		}
	});
</script>