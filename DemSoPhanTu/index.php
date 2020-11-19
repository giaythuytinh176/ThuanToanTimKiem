<?php

//Trong phần này, chúng ta sẽ viết một thuật toán để
// đếm số lần xuất hiện của một phần tử ở trong một mảng cho trước.
//
//Hàm của của chúng ta sẽ nhận vào 2 tham số:
//
//$numbers - mảng các số nguyên
//$value - giá trị muốn đếm số lần xuất hiện
//Hàm sẽ trả về số lần xuất hiện của giá trị $value trong mảng $numbers.

$numbers = [1, 2, 3, 10, 22, 1, 5, 111, 22, 33, 12];

$value = 1;

$count = 0;
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $value) {
        $count++;
    }
}
echo "So lan xuat hien cua $value la: " . $count;