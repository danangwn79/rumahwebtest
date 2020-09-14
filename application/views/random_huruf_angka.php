<html>
<head>
	<title>Random Huruf dan angka</title>
</head>
<body>
	<hr/>
	Jawaban Nomor 2 : Random Huruf dan angka <?php echo $random_help; ?>
	<hr/>
	Jawaban Nomor 3 : Random Huruf dan angka <?php echo $random_lib; ?>
	<hr/>
	Jawaban nomor 4a : <div id='nomor4a'></div>
	Jawaban nomor 4b : <div id='nomor4b'></div>
</body>
</html>

<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script type="text/javascript">
$.getJSON( "https://reqres.in/api/users?page=2", function( data ) {
	let items = [];
	$.each( data['data'], function( key, val ) {
		items.push( "<li id='" + key['id'] + "'>" + val['first_name'] +" "+val['first_name']+ "</li>" );
	});

	$( "<ul/>", {
		"class": "my-new-list",
		html: items.join( "" )
	}).appendTo( "#nomor4a" );
});

$.getJSON( "https://reqres.in/api/users/2", function( data ) {	
	let html_view = "<pre>";
	html_view += "email : "+data['data']['email']+"\n";
	html_view += "First Name : "+data['data']['first_name']+"\n";
	html_view += "Last Name : "+data['data']['last_name']+"\n";
	html_view += "Link Avatar : "+data['data']['avatar']+"\n";
	html_view += "Company : "+data['ad']['company']+"\n";
	html_view += "Url : "+data['ad']['url']+"\n";
	html_view += "Text : "+data['ad']['text']+"\n";
	html_view += "<pre>"; 	
	$(html_view).appendTo( "#nomor4b" );
});
</script>