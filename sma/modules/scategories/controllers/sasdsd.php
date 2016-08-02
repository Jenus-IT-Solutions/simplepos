$data['prodsubcat'] = $this->_custom_query("SELECT * from subcategories WHERE category_id = $cid ORDER BY name");

		if($data['prodsubcat']->result() != ""){
			echo '<table id="tbsubcat" border="1" style="margin: 0 auto;">';
			echo '<tr>';
			foreach ($data['prodsubcat']->result() as $resy) {
				echo '<td >'. 
                    '<input type="hidden" value="' . $resy->id . '" id="scat' . $resy->id . '">'.
                    '<br><button class="btnsubcat" id="' . $resy->id . '">'. $resy->name .'</button></td>';
                echo '<script>'.
                	'jQuery(".btnsubcat").click(function() {'.
                		'var scid = jQuery(this).attr("id");'.
                		'jQuery.get("scategories/showBySubCat", { scid: scid }, function(data) {'.
                			'jQuery("#showsubcat").html(data);'.
       					 '});'.
                	'});</script>';
			}
			echo '</tr>';
			echo '</table>';
		}else {
			echo '<stye>#tbsubcat { display: none;}</style>';
		}


