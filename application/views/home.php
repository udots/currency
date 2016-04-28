<html>
<head>
<title>rCurrency</title>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">

function getData() {
	
	var url = "<?php echo $url; ?>";
	
	$.ajax({
		url: url,
		dataType: "json",
		success: function(data){
			var id = data["query"]["results"]["rate"]["id"];
			var name = data["query"]["results"]["rate"]["Name"];
			var rate = data["query"]["results"]["rate"]["Rate"];
			var date = data["query"]["results"]["rate"]["Date"];
			var time = data["query"]["results"]["rate"]["Time"];
			var ask = data["query"]["results"]["rate"]["Ask"];
			var bid = data["query"]["results"]["rate"]["Bid"];
			
			$("#contents").html(
				'id: '+id+'<br>'+
				'Name: '+name+'<br>'+
				'Rate: '+rate+'<br>'+
				'Date: '+date+'<br>'+
				'Time: '+time+'<br>'+
				'Ask: '+ask+'<br>'+
				'Bid: '+bid+'<br>'
			)
		},
	});

}

</script>
</head>
<body onload="getData()">
<div id="contents"></div>
</body>
</html>