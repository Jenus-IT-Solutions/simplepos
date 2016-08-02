
<div style="margin: 0 auto">
<?php

    echo '<table border="1" style="margin: 0 auto;">';
			echo '<tr>';
			foreach($query->result() as $row) {
                            echo '<td><img src="'. base_url() . 'assets/uploads/thumbs/'. $row->image .
                            '" style=" display: inline;"><br>' . $row->name . '<br>PHP: ' . $row->price . 
                            '<br>Code: ' . $row->code . '<br>Manufacturer: ' . $row->unit . 
                            '<br><button>Add to Cart</button></td>';
			} 
			echo '</tr>';
			echo '</table>';
                        
?>
</div>