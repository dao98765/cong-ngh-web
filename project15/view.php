<?php
 $file= $_GET['result'];
 echo $file;
 //Đọc nội dung tệp tin
 $contents = file($file);

 foreach($contents as $line){
    echo $line.'<br>';
 }
 
