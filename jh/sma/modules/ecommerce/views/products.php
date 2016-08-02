

<!-- <iframe src="http://nosora/ecommerce"></iframe> -->
<?php

echo '<table border="1">';
			echo '<tr>';
			foreach($query->result() as $row) {
			//echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $row->image .'" height="100%" width="100%" style=" display: inline;"></td>';
			echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $row->image .'" style=" display: inline;"><br>' . $row->name . '<br>PHP: ' . $row->price . '<br>Code: ' . $row->code . '<br>Manufacturer: ' . $row->unit . '</td>';
			echo '<button>'
			} 
			echo '</tr>';
			echo '</table>';

?>
</body>
</html>