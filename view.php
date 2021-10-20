<?php
include 'header.php';
$filename = $_GET['file'];
$fp = fopen($filename, "r"); //mở file ở chế độ đọc
$contents = fread($fp, filesize($filename)); //toàn bộ nội dung của file

$list = explode("\n\n", $contents); //cắt từng đoạn cách nhau bởi dấu xuống dòng
// echo $list[0].'<br>';
$items = explode("\n", $list[0]); // lấy từng dòng trong list[0]
// echo  $items[7];
$name = explode(',', explode(':', $items[1])[1]); //Cắt lấy phần họ và tên
// echo $name[1];
$mark = explode(':', $items[4])[1]; // lấy phần điểm trong list
// echo $mark;

$info = explode('_', $filename); //cắt tên file txt thành cách đoạn cách nhau bởi dấu "_"
$id = $info[3]; //? lấy số báo danh
$date = explode('-', $info[4]); // cắt lấy ngày tháng năm
$time = $info[5];
?>
<main>
    <h3 class="text-center">KẾT QUẢ BÀI THI ỨNG DỤNG CÔNG NGHỆ THÔNG TIN</h3>
    <div class="d-flex mb-2">
        <p class="pe-5">Số báo danh: <?php echo $id; ?></p>
        <p class="pe-5">Họ và tên: <?php echo $name[1] . $name[0]; ?></p>
        <p class="pe-5">Điểm thi: <?php echo $mark; ?></p>
    </div>
    <p class="mb-3">Mã tập tin làm bài: <?php echo $filename; ?></p>
    <div class="d-flex">
        <p class="pe-5">Ngày thi: <?php echo  $date[2] . '-' . $date[1] . '-' . $date[0]; ?></p>
        <p class="">Giờ nộp bài: <?php echo $time; ?></p>
    </div>
    <div class="container">
        <div class="row align-items-start text-center">
            <div class="col border border-dark pb-5">
                <p>Thí sinh</p>
            </div>
            <div class="col border border-dark pb-5">
                <p>Giám thị 1</p>
            </div>
            <div class="col border border-dark pb-5">
                <p>Giám thị 2</p>
            </div>
        </div>
    </div>
    <table class="table table-bordered border-dark mt-3">
        <thead>
            <tr class="text-center table-dark">
                <th class="col" scope="col">Stt</th>
                <th class="col-6" scope="col">Nội dung câu hỏi</th>
                <th class="col-1" scope="col">Điểm đạt</th>
                <th class="col-6" scope="col">Đáp án đã chọn</th>
            </tr>
        </thead>

        <tbody>
            <?php
            for ($i = 1; $i < count($list) - 1; $i++) {
                $items = explode("\n", $list[$i]); // lấy từng dòng của tất cả các list

                $mark = explode(":", $items[1])[1]; // chia awarded points làm 2 và gán mark = giá trị sau dấu :

                $response = explode(":", $items[3])[1]; // chia đáp án làm 2 và gán response = giá trị sau dấu :

                echo "<tr>";
                echo '<td class="text-center">' . $i . '</td>';
                echo "<td>$items[0]</td>"; //? items[0] = dòng câu hỏi trong các list
                echo '<td class="text-center">' . $mark . '</td>';
                echo "<td>$response</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</main>
<?php
include 'footer.php';
?>