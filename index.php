<?php
include 'header.php';
?>
<main class="container">
    <h4 class="text-center">DANH SÁCH TỔNG HỢP KẾT QUẢ THI CỦA THÍ SINH</h4>
    <table class="table border border-dark ">
        <thead>
            <tr class="table-dark">
                <th scope="col">Số thứ tự</th>
                <th scope="col">Số báo danh</th>
                <th scope="col">Mã bài thi</th>
                <th scope="col">Ngày thi</th>
                <th scope="col">Giờ nộp bài</th>
                <th scope="col">Điểm thi</th>
                <th scope="col">Tệp kết quả</th>
                <th scope="col">Ký tên</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $files = scandir('./result');
            foreach($files as $file){              
            }
            for($i = 3 ; $i < count($files) ; $i ++){
                echo '<tr>';
                echo '<th scope="row border border-dark">'.($i-2).'</th>';
                echo '<td class = "border border-dark">'.explode('_',$files[$i])[3].'</td>';
                echo '<td class = "border border-dark">'.explode('_',$files[$i])[2].'</td>';
                echo '<td class = "border border-dark">'.explode('_',$files[$i])[4].'</td>';
                echo '<td class = "border border-dark">'.explode('_',$files[$i])[5].'</td>';
                echo '<td class = "border border-dark">'.explode('.',explode('_',$files[$i])[6])[0].'</td>';
                echo '<td class = "border border-dark"><a href="http://localhost/project13/view.php?file=result/' .$files[$i]. '">result/'.$files[$i].'</a></td>';
                echo '<td class = "border border-dark"></td>';
            }        
            ?>
        </tbody>
    </table>
    <table class="table border border-dark">
  <thead>
    <tr>
      <th scope="col" class="border border-dark">Giám thị 01</th>
      <th scope="col" class="border border-dark">Giám thị 02</th>
      <th scope="col" class="border border-dark">Trưởng ban coi thi</th>
      
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

</main>


<?php
include 'footer.php'
?>