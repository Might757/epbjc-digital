<?php
    include_once('dataAccess.php');
    $da = new dataAccess(); //novo objeto da classe dataAccess
    if(isset($_POST['profCode'])){
        //está a fazer login
        $code = $_POST['profCode'];       
        $result = $da->login($code);
        $url = 'professorPage.php';

        //se o código do professor não estiver correto   
        if($result == -1){
            echo "<script>console.log('errou');</script>";     
            echo "<script>window.location='../".$url."?msg=1'</script>";
        }else{
            session_start(); //iniciar sessão            
            $_SESSION['id'] = $result;
            echo "<script>window.location='../".$url."?msg=2'</script>";
            echo "<script>console.log('acertou miserávi');</script>"; 
        }

    } else if(isset($_GET['logout'])){
        session_start();
        session_destroy();
        echo "<script>window.location='../index.php';</script>";
    }
?>