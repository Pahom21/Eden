<?php
    require_once "constants/constants.php";

    function ClassAutoLoad($ClassName){
        $folders=array("mailsjob");
        foreach($folders AS $folder){
            $filename=dirname(__FILE__) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $ClassName . ".php";
            if(is_readable($filename))
            {
                require $filename;
            }
        }

    }
    spl_autoload_register('ClassAutoLoad',true,true);

    //Instantiating the class(es)
    $OBJ_Mails = NEW SendMail();


?>