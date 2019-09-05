<?php
$arrNilai = array ("Ani" => 80, "Otim" => 90, "Sri" => 75,
"Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<prev>";
print_r($arrNilai);
echo "</prev>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<prev>";
print_r($arrNilai);
echo "</prev>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<prev>";
print_r($arrNilai);
echo "</pre>";
?>
