<?php
        if(isset($_GET['msg'])){
          switch($_GET['msg']){
            case 1: 
              echo "<script>
                      var myModal = new bootstrap.Modal(document.getElementById('warning'), {
                        keyboard: false
                      })
                        $('#warningText').append('O código de professor que tentou inserir está incorreto. Por favor tente novamente.');
                        myModal.show();
                    </script>";
            break;
          }
        }
?>