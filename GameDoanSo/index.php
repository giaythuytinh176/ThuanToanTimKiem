<?php

//Game đoán số được mô tả như sau:
//
//Người chơi nghĩ ra một số ngẫu nhiên nằm trong khoảng từ 1-100, có thể viết số đó ra giấy nếu cần thiết
//Máy tính sẽ lần lượt đoán các con số xem có phải là con số mà người chơi đã nghĩ ra hay không
//Đối với mỗi con số do máy đưa ra thì người chơi trả lời theo 3 lựa chọn:
//Chính xác, đó là con số tôi đã nghĩ: Trò chơi kết thúc
//Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số
//Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số

function binarySearch(array $numbers, int $needle)
{
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int)(($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
            echo "Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số $numbers[$mid] va mid la: {$mid}<br>";
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
            echo "Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số $numbers[$mid]va mid la: {$mid}<br>";
        } else {
            return "$mid Chính xác, đó là con số tôi đã nghĩ: Trò chơi kết thúc<br>";
        }
    }
    return "So nay may tinh ko the doan duoc";
}

$randPeople = rand(1, 200);
echo "people du doan: " . $randPeople . "<br>";

$arr = range(1, 200, 2);


print("<pre>" . print_r($arr, true) . "</pre>");


if ($aaa = binarySearch($arr, $randPeople)) {
    echo $aaa;
} else {
    echo "ko tim thay";
}







