<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2</title>
</head>
<body>
<?php
    $string = "Dao Thu Huong";
    // Bai 1
    echo "1.Số ký tự trong chuỗi là: " . strlen($string).'</br>';

    // Bai 2
    echo "2.Số từ trong chuỗi là: " . str_word_count($string).'</br>';

    // Bai 3
    echo "3.Chuỗi đảo ngược là: " . strrev($string).'</br>';

    // Bai 4
    $substring = "Dao";
    $position = strpos($string, $substring);

    if ($position !== false) {
        echo "4.Chuỗi con '$substring' được tìm thấy tại vị trí: " . $position.'</br>';
    } else {
        echo "4.Chuỗi con '$substring' không được tìm thấy.".'</br>';
    }
    // Bai 5
    $search = "Dao";
    $replace = "Hello";
    $newString = str_replace($search, $replace, $string);

    echo "5.Chuỗi sau khi thay thế là: " . $newString.'</br>';

    // Bai 6
    if (strncmp($string, $substring, strlen($substring)) === 0) {
        echo "6.Chuỗi '$string' bắt đầu bằng '$substring'".'</br>';
    } else {
        echo "6.Chuỗi '$string' không bắt đầu bằng '$substring'".'</br>';
    }

    // Bai 7
    echo "7.Chuỗi chữ hoa là: " . strtoupper($string).'</br>';

    // Bai 8
    echo "8.Chuỗi chữ thường là: " . strtolower($string).'</br>';

    // Bai 9
    $string_1 = "dao thu huong";
    echo "9.Chuỗi với chữ cái đầu in hoa: " . ucwords($string_1).'</br>';

    // Bai 10
    $string_2 = " DaoThuHuong ";
    echo "10.Chuỗi sau khi loại bỏ khoảng trắng: '" . trim($string_2) . "'".'</br>';

    // Bai 11
    $string_3 = "/DaoThuHuong/";
    echo "11.Chuỗi sau khi loại bỏ ký tự đầu tiên: '" . ltrim($string_3, '/') . "'".'</br>';

    // Bai 12
    echo "12.Chuỗi sau khi loại bỏ ký tự cuối cùng: '" . rtrim($string_3, '/') . "'".'</br>';

    // Bai 13
    $string_4 = "Dao,Thu,Huong";
    $array = explode(",", $string_4);
    echo "13."; print_r($array).'</br>';
    echo '</br>';

    // Bai 14
    $array_1 = ["Dao", "Thu", "Huong"];
    $string_5 = implode(" ", $array_1);
    echo "14.Chuỗi sau khi nối là: " . $string_5.'</br>';

    // Bai 15
    $paddedString = str_pad($string, 20, "*", STR_PAD_BOTH); // Thêm ký tự '*' vào đầu và cuối chuỗi
    echo "15.Chuỗi sau khi thêm ký tự: " . $paddedString.'</br>';

    // Bai 16
    $endstring = "hihi";
    if (strrchr($string, $substring) === $endstring) {
        echo "16.Chuỗi '$string' kết thúc bằng '$substring'".'</br>';
    } else {
        echo "16.Chuỗi '$string' không kết thúc bằng '$endstring'".'</br>';
    }

    // Bai 17
    if (strstr($string, $endstring) !== false) {
        echo "17.Chuỗi '$string' chứa '$endstring'".'</br>';
    } else {
        echo "17.Chuỗi '$string' không chứa '$endstring'".'</br>';
    }

    // Bai 18
    $string_6 = "Dao@Thu#Huong!";
    $cleanString = preg_replace("/[^a-zA-Z0-9]/", "*", $string_6);
    echo "18.huỗi sau khi thay thế ký tự: " . $cleanString.'</br>';

    // Bai 19
    $string_number = "123456789";
    $number = (int)$string_number; // Chuyển chuỗi thành số nguyên

    if (is_int($number)) {
        echo "19.'$string_number' là một số nguyên.".'</br>';
    } else {
        echo "19.'$string_number' không phải là một số nguyên.".'</br>';
    }
    // Bai 20
    $email = "huong@2111.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "20.'$email' là một email hợp lệ.".'</br>';
    } else {
        echo "20.'$email' không phải là một email hợp lệ.".'</br>';
    }
    echo "Chuỗi với chữ cái đầu in hoa: " . mb_convert_case('đào thu hường', MB_CASE_TITLE, "UTF-8").'</br>';
?>
</body>
</html>