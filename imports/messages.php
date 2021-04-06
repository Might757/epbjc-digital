<?php
      if(isset($_GET['msg'])){
        switch($_GET['msg']){
          case 1: 
              echo "<script>
                        $('#warningText').append('O código de professor que tentou inserir está incorreto. Por favor tente novamente.');
                        $('#warning').modal('show');
                    </script>";
          break;
      }
?>