<?php
    try{
        $numerador = 1;
        $denominador = 0;
        
        
        if ($denominador === 0) {
            throw new Exception("No permitido.");
        }
    }catch(Exception $e){
        echo "error ".$e->getMessage();
    }finally{
        echo "Y la vida sigue";
    }
    
    echo "Pero quiero que mi programa continúe";
?>
