<?php
$array = array('saya <br>', 10);
$aso = [
	[
		'Judul' => '<h1>Belajar PHP & MySQL untuk pemula',
		'Penulis' => '<h3>Admin SMK',
	],
	[
		'Judul' => '<h1>Tutorial PHP dari nol hingga akhir',
		'Penulis' => '<h3>Admin SMK',
	],
	[
		'Judul' => '<h1>Membuat Aplikasi Web dengan PHP',
		'Penulis' => '<h3>SMK Assalaam'
	]
];
foreach ($aso as $value) {
	echo $value["Judul"] . "<br>";
	echo $value["Penulis"] . "<br>";
	echo "<hr>";
}
?>