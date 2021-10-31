<?php
/*
 $path = getcwd();
 echo $path;
   
 $item = scandir($path);//$item là một array
  echo'<pre>';
  echo print_r($item);
  echo '</pre>';
  $items2 = scandir('C:\xampp\htdocs\project12');//$item là 1 array

  echo'<pre>';
  echo print_r($item2);
  echo '</pre>';
  //Truy cập 1 giá trị cụ thể
  echo $items2[2].'<br>';
  $item_path = $path.DIRECTORY_SEPARATOR.$items2[2];

  echo $item_path.'<br>';
  if(is_dir($path)){
      echo "Đúng là Thư mục".'<br>';

  }else{
      echo "Không p thư mục".'<br>';
  }

  if(is_file('C:\xampp\htdocs\project12\activation.php')){
    echo "Đúng là File".'<br>';

}else{
    echo "Không p File".'<br>';
}*/
  $test= file('user.txt');
  echo'<pre>';
  echo print_r($test);
  echo '</pre>';
 $String = "\n 58 16543, Phạm Hồng tháng \n";
 file_put_contents('user.txt',$String, FILE_APPEND);
 $String2 ="\n59, 52432267, Nguyễn Tuấn Anh \n";
 file_put_contents('user.txt',$String2, FILE_APPEND);
 $text5 = file_get_contents('user.txt');
 echo $text5;
