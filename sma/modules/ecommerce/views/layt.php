<!DOCTYPE html >
<html>
    
    <head>
        <title> </title>
        
        <style>
            
            button {
                position: relative;
                alignment-adjust: right;
            }
            
        </style>
    </head>
    
    <body style=" margin: 0 auto; display: fixed;">
        <header class="header" style="background-color: #222;">
            
            <div>
                <button class="button">Cart</button>
                <button class="button">Login</button>
            </div>
            
        </header>
        
        <section class="section">
            <?php
                $this->load->model('mdl_perfectcontroller');
               $category = $this->mdl_perfectcontroller->_custom_query('SELECT * FROM categories');
               
               foreach($category->result() as $ro){
                   echo '<button>' . $ro->name . '<button>';
               }
            
               //$this->load->model('mdl_perfectcontroller');
               $subcategory = $this->mdl_perfectcontroller->_custom_query('SELECT * FROM subcategories');
               echo '<br><br>';
               foreach($subcategory->result() as $row){
                   echo '<button>' . $row->name . '<button>';
               }
               
              
               
            ?>
        </section>
        
        <footer class="footer" style="background-color: #333;">
            
            asd
            
        </footer>
    </body>
    
</html>