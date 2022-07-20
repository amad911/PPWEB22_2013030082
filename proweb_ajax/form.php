<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
</head>
<body>
	<h2>ajax</h2>
	Input 1 <input type="text" name="nama" id="nama">
		Input 2 <input type="text" name="nama2" id="nama2">
	<br>Output: <span id="output"></span>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$('#nama').keyup(function(){
			get_data();
		})
		$('#nama2').keyup(function(){
			get_data();
		})
		function get_data(){
			var nama = $('#nama').val();
			var nama2 = $('#nama2').val();
			$.ajax({
			      type  : "POST",
			      url   : "proses.php",
			      data  : 'nama='+nama+'&nama2='+nama2,
			      success : function(res){
			                  $('#output').html(res);
							}
			})
		}	
	});
</script>