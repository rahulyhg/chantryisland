<?php
    function single_edit($tbl, $col, $id) {
        $result = getSingle($tbl, $col, $id);
        $getResult = mysqli_fetch_array($result);
        
        echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
        
            echo "<input class=\"hide\" type=\"text\" name=\"tbl\" value=\"{$tbl}\"/>";
            echo "<input class=\"hide\" type=\"text\" name=\"col\" value=\"{$col}\"/>";
            echo "<input class=\"hide\" type=\"text\" name=\"id\" value=\"{$id}\"/>";
            for($i=0; $i<mysqli_num_fields($result); $i++)
            {
                
                $dataType = mysqli_fetch_field_direct($result, $i);
                $fieldName = $dataType->name;
                $fieldType = $dataType->type;
                //echo $fieldType."</br>"; /*2=intType, 253=varchar, 252=text*/
                
                if($fieldName != $col)
                {

                    echo "<div class=\"row\"><div class=\"col-sm-12 col-md-4 col-md-offset-1\">";
                      echo "<label>{$fieldName}</label></div>";
                        echo "<div class=\"col-sm-12 col-md-4 col-md-offset-1\"><textarea class=\"form-control\" name=\"$fieldName\">{$getResult[$i]}</textarea></div></div><br><br><br>";
                    
                }
            }
            //echo mysqli_num_fields($result);
            echo "<div class=\"row\"><div class=\"col-sm-12 col-md-4 col-md-offset-8\"><input type=\"submit\" value=\"Edit Content\"/ class=\"btn btn-default\"></div></div>";
        echo"</form><br><br><br><br>";
    }

?>