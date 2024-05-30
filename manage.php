<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Application</title>
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

        <?php
		
        if (isset($_POST) && $_POST):		
            $data = json_encode($_POST);
            $fp = fopen('search-results.json', 'w');
            fwrite($fp, $data);
            fclose($fp);
        endif;
		
		
		$filename = 'search-results.json';
        $location = '';
		$duration = '500';
		$is_redirect=false;
        if (file_exists($filename)):
            $data = file_get_contents($filename);
            if ($data):
                $data = json_decode($data);
					//print_r($data);			
                if ($data):
                    $location = $data->url;
					$duration = $data->duration;
					if(isset($data->is_redirect)){
						$is_redirect = true;
					}else{
						$is_redirect = false;
					}
                endif;

            endif;
        endif;
        ?>
    </head>
    <body>
        <div class="container">
            <h1>Manage</h1>
            <form method="post" action="">
             Enter of Redirect URL:-   <input type="text" name="url" value="<?=$location?>"  size="70"> (Start with http://)<br><br>
			 Enter of Redirect Time:-	<input type="text" name="duration" value="<?=$duration?>"  size="70"> (100 = 1sec)<br><br>
                
				<div class="form-check">
                <label class="form-check-label">
				<?php if($is_redirect){ ?>
               Are You want to redirect:-  <input type="checkbox" name="is_redirect" checked class="form-check-input" id="stay">  
				<?php }else{ ?>
				Are you want to redirect:-  <input type="checkbox" name="is_redirect" class="form-check-input" id="stay"> <br><br>
				<?php } ?>
                </label>
				<br>
				<input type="submit" value="Save">
            </div>
            </form>
        </div>

    </body>
</html>
