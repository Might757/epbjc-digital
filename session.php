
<?php
    function changeHref($a){
        if(!isset($_SESSION['id'])){
            echo "<script>window.location='$a'</script>";
        }
        
       

    }
    session_start();
    
    
    $da = new dataAccess(); 
?>

