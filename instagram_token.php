<?php
if(is_user_logged_in()){
    if(isset($_POST['btnSubmit'])){
        $token = $_POST['instagram_token'];
        
        update_user_meta( get_current_user_id(), 'instagram_token', $token);
    }  
}




// $token = 
$token = get_user_meta( get_current_user_id(), 'instagram_token', true);



?>

                  <div id="maindiv">
				  
						
                    <div id="formdiv">
                      <h2>Here You can Insert Instagram Access Token </h2>
                      <div class="formdivCust">
                        <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
                               <input type="text" name="instagram_token" id="instagram_token" placeholder="Insert Access Token" value="<?php echo $token; ?>"> 
                               <button type="submit" name="btnSubmit"id="insta-save">SAVE</button>
                               <h3><a href="http://instagram.pixelunion.net/" target="_blank">Generate Access Token</a></h3>
                        </form>
                      </div>
                      <!------- Including PHP Script here ------>
                      
                      <?php
