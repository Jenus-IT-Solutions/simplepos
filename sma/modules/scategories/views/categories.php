<div style="float: right;">
Cart: <input type="hidden" id="valuer" value="0"><b id="cart"></b>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" id="searchbox"><button id="btnsearch">Search</button><br><br>
<span id="result"></span>
<script>
    
</script>
</div>
<?php

    echo '<table border="1" style="margin: 0 auto;">';
    $ctr = 0;
    //foreach($result as $row){
       
            echo '<tr>';
        	foreach($result->result() as $row) {
                    
                    echo '<td >'. 
                    '<input type="hidden" value="' . $row->id . '" id="cat' . $row->id . '">'.
                    '<br><button class="btncat" id="' . $row->id . '">'. $row->name .'</button></td>';
        	} 
            echo '</tr>';
	
    //}
    echo '</table>';
    
?>
<br><br>
<div id="showsubcat"></div><br>
<div id="showbycat">

</div>
<?php
    // $data = "a=asd&b=asd";
    // // $a = array_map(trim, $data);
    // // var_dump($a);
    // // exit();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    


    jQuery('#btnsearch').click(function() {
        var input = jQuery('#searchbox').val();
        console.log(input);
        if(input != ""){
            jQuery.get('<?php base_url();?>sproducts/search', { input: input }, function(data) {
                //alert(data);
                // console.log(data);
               // console.log(data)
                if(data != ""){
                    jQuery('#showbycat').html(data);
                }else {
                    jQuery('#showbycat').html('<p style="color: red;">No record found</p>');
                }
            });
        }else {
            alert('Input Empty !');
        }
    });

    jQuery('.btncat').click(function() {
        var cid = jQuery(this).attr('id');
        console.log(cid);

        jQuery.get('<?php base_url(); ?>scategories/showByCat', { cid: cid }, function(data) {
                jQuery('#showbycat').html(data);
        });

    });

function adder() {
    jQuery('.btnaddcart').click(function() {
        var valcart = jQuery('#valuer').val();
        console.log(valcart);
//alert(valcart);
        // val += valcart + 1;

        // jQuery('#cart').html(val);
    });
    }

    // jQuery('.btnaddcart').click(function() {
    //     console.log('IM WORKING');
    // })

    jQuery(document).ready(function() {
        adder();
        jQuery('#searchbox').keypress(function(e) {
            if (e.which == 13) {
                //alert('login pressed');
                jQuery('#btnsearch').click();
            }
        });
    });
</script>