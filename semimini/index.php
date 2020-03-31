<!DOCTYPE html>
<html>
<head>
	<title>Cloud Downloader</title>
</head>
<body>

	<form action="#" method="get">
		<input type="url" name="url">
		<input type="submit" value="Download">
	</form>


	<script type="text/javascript">
		var form = document.querySelector('form');
		var input = document.querySelectorAll('input');
		//var saveBtn = document.querySelector('#save-btn');
		
        //saveBtn.style.display = 'none';
		form.addEventListener('submit', (e) =>  {
			e.preventDefault();
			form.style.display = 'none';
			let htmlContent = '<h1>Downloading..</h1>';

			document.querySelector('body').insertAdjacentHTML('afterbegin', htmlContent);


			const xhr = new XMLHttpRequest();

			xhr.onload = function () {
    
				document.querySelector('h1').style.display = 'none';
				document.querySelector('body').insertAdjacentHTML('afterbegin', '<h1>Download Successful</h1>');
                //saveBtn.style.display = 'block';
                var iframe = document.createElement('iframe');
                iframe.src = 'std.html';
                document.body.appendChild(iframe);
				input[0].value = "";
				
			}

			xhr.onerror = function () {
				alert('Error in Sending Request.');

			}

			xhr.open('GET', 'upload.php?url=' + input[0].value);
			xhr.send();

		});


	</script>


</body>
</html>
