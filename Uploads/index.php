<?php 
    session_start();
    if(!isset($_SESSION['officer_id'])  || !isset($_SESSION['master_user']) || $_SESSION['master_user'] == false) {
        die("No Such URL");
    }

    $dir = "/xampp/htdocs/project/uploads";

    if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            if($file == 'index.php') {
                continue;
            }
    ?>
        <a href="<?php echo $file;?>"><?php echo $file;?></a><br>
<?php
        
        
        }
        closedir($dh);
    }
    }
?>