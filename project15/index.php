<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h4 class="ms-5">Bộ NN& PTNT</h4>
    <h3>Trường đại học thủy lợi</h3>
    <h2 class="ms-5 container">DANH SÁCH TỔNG HỢP KẾT QUẢ THI CỦA THÍ SINH</h2>
    <table class="table container">
  <thead>
    <tr>
      <th scope="col">Số thứ tự </th>
      <th scope="col">Số báo danh</th>
      <th scope="col">Mã bài thi</th>
      <th scope="col">Ngày thi </th>
      <th scope="col">Giờ nộp bài  </th>
      <th scope="col">Điểm thi </th>
      <th scope="col">Tập kết quả </th>
      <th scope="col">Kí Tên</th>
    <tr>
</thead>
<tbody>
     <?php
     $dir = 'C:\xampp\htdocs\project15\result';
     $files = array_slice(scandir($dir),3);
     for($i =0; $i< count($files);++$i){
         echo "<tr>";
         echo"     <td>".$i."</td>";
         echo"     <th>".explode("_",$files[$i])[3]."</th>";
         echo"     <th>".explode("_",$files[$i])[2]."</th>";
         echo"     <th>".explode("_",$files[$i])[4]."</th>";
         echo"     <th>".explode("_",$files[$i])[5]."</th>";
         echo"     <th>".explode("_",$files[$i])[6]."</th>";
         echo"     <td>".$files[$i]."</td>";
         echo"     <td></td>";
        echo"</tr>";
     } 
     ?>
  </tbody>
</table>
  </body>
</html>