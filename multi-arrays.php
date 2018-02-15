<?php
	$pricing = array(
		array("planA", 1,9.99,15.00),
		array("planB", 2,15.99,25.00),
		array("planC", 3,24.99,30.00),
		array("planD", 4,29.99,40.00)	
	);

	$plants = array(
		array("shade01","Lily-of-the-Valley"),
		array("shade02","Gibraltar Azalea"),
		array("shade03","Hydrangea"),
		array("shade04","Japanese Painted Fern"),
		array("shade05","Silver Gem Appalacian Blue Violet"),
		array("shade06","Snowbelle Mockorange"),
		array("sun01","Jewel of Desert Peridot Ice Plant"),
		array("sun02","Rose"),
		array("sun03","Hollyhock"),
		array("sun04","Peony"),
		array("sun05","Tutti Fruitti Hummingbird Mint"),
		array("sun06","Bergenia Dragonfly 'Sakura'"),
		array("sun07","Indian Summer Peruvian Lily"),
		array("sun08","Kaleidoscope Butterfly Bush")
	);

echo <<<END
	<hr><h1 style='font-family:batang, calibri, cambria, serif; color:green'>Quantity and Pricing</h1>
	<h2 style='font-family:batang, calibri, cambria, serif; color:darkgoldenrod'>Plants in Stock</h2>
END;
	printf("<pre>%-15s %-40s<br>", "Product Code", "Plant Name");
	printf("=====================================================<br>");

	foreach ($plants as $pl) {
		printf("%-15s %-40s<br>", $pl[0], $pl[1]);
	}
	printf("</pre>");

	echo "<h2 style='font-family:batang,calibri, cambria, serif;color:darkgoldenrod'>Price Plans</h2>";
	foreach ($pricing as $p) {
		printf("For %s, the quantity is %d, the regular price is %4.2f and the sale price is %4.2f<br>", $p[0], $p[1], $p[2], $p[3]);
	}
	echo "<hr>"

	

		
	
?>
