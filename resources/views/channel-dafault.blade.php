<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Channel</title>
</head>
<body>

	<h1>Dokumentasi API Channel</h1>

	<ul>
		<li>Gunakan endpoint ini untuk melihat semua data : <a  href="http://localhost:8000/api/channels">http://localhost:8000/api/channels</a></li>
		<li>
			Gunakan endpoint ini untuk melihat detail data yang berhasi dan gagal :
			<ol>
				<li>Data berhasil : <a  href="http://localhost:8000/api/channels/1?API_KEY_TEST=12345667890X">http://localhost:8000/api/channels/1?API_KEY_TEST=12345667890X</a></li>
				<li>Data Gagal : <a  href="http://localhost:8000/api/channels/2?API_KEY_TEST=12345667890X">http://localhost:8000/api/channels/2?API_KEY_TEST=12345667890X</a></li>
			</ol> 
		</li>
		<li>
			Gunakan endpoint ini untuk melihat detail data tanpa API KEY atau API KEY salah
			<ol>
				<li><a href="http://localhost:8000/api/channels/1?API_KEY_TEST=12345667890">http://localhost:8000/api/channels/1?API_KEY_TEST=12345667890X</a></li>
				<li><a href="http://localhost:8000/api/channels/1">http://localhost:8000/api/channels/1</a></li>
			</ol>
		</li>
	</ul>
</body>
</html>