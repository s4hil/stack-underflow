<?php

// DB connection
require_once 'config.php';

// Clean String
function clean($str)
{
    return preg_replace('/[^\.\@\,\-\_\!\$\&A-Za-z0-9 ]/', '', $str);
}

function validateRollNumber($rollNumber)
{
    if (strlen($rollNumber) == 8 && ctype_digit($rollNumber)) {
        return true;
    }
    else {
        return false;
    }
}
function getNameByRollNumber($rollNumber)
{
    global $conn;

    $rollNumber = clean($rollNumber);

    $sql = "SELECT * FROM `_students` WHERE `roll_no` = '$rollNumber' LIMIT 1";
    $res = mysqli_query($conn, $sql);
    $result = array();
    if (mysqli_num_rows($res) > 0) {
        $student = mysqli_fetch_array($res);
        $name = ucwords(strtolower($student['student_name']));
        return $name;
    }
    else {
        return false;
    }
}
function checkDuplicateUser($rollNumber)
{
    global $conn;
    $sql = "SELECT * FROM `_users` WHERE `roll_no` = '$rollNumber'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) == 0) {
        return true;
    }
    else {
        return false;
    }
}

// get Date from timestamp
function getDateFromStamp($stamp)
{
    $dateArray = explode(' ', $stamp);
    $date = $dateArray[0];
    return $date;
}

// Get like count with discussion id
function getLikeCount($id)
{
    global $conn;
    $sql = "SELECT * FROM `_likes` WHERE `d_id` = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $likes = mysqli_num_rows($res);
    }
    else {
        $likes = 0;
    }
    return $likes;
}
// Fetch user name from users tbl
function getUserName($id)
{
    global $conn;
    $sql = "SELECT * FROM `_users` WHERE `user_id` = $id LIMIT 1";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $user = mysqli_fetch_array($res);
        return $user['full_name'];
    }
    else {
        return "Err!";
    }
}

// Fetch comment count
function getCommentCount($id)
{
    global $conn;
    $sql = "SELECT * FROM `_comments` WHERE `d_id` = $id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        return mysqli_num_rows($res);
    }
    else {
        return 0;
    }
}

// Fetch user img name
function getUserImg($id)
{
    global $conn;
    $sql = "SELECT * FROM `_users` WHERE `user_id` = $id LIMIT 1";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $user = mysqli_fetch_array($res);
        return $user['user_img'];
    }
    else {
        return "";
    }
}

// Limit Text Length
function limitText($str, $len)
{
    return substr($str, 0, $len)."...";
}

// Uploading image
function uploadImg($img_name, $img_size, $tmp_name)
{
    $result = array();
    $imgNameArr = explode('.', $img_name);
    $img_ext = strtolower(end($imgNameArr));
    $location = '../../uploads/discussions/'.rand(100,999).$img_name;

    $max_size = 513000;
    if ($img_size<$max_size && ($img_ext == "jpg" || $img_ext == "jpeg" || $img_ext == "png")){
            
        if (move_uploaded_file($tmp_name, $location)) {
            $result['status'] = true;
        }
        else {
            $result['status'] = false;
            $result['msg'] = "Error uploading file!";
        }
    }
    else {
        $result['status'] = false;
        $result['msg'] = "Max image size is 500kb & allowed formats are jpg &png.";
    }
    return $result;
}

// fetch username by discussion id
function fetcUserByDid($id)
{
    global $conn;
    $sql = "SELECT * FROM `_discussions` WHERE `d_id` = $id LIMIT 1";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $dis = mysqli_fetch_array($res);
        $userID = $dis['user_id'];
        $sql2 = "SELECT * FROM `_users` WHERE `user_id` = $userID";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2) {
            $user = mysqli_fetch_array($res2);
            return $user;
        }
    }    
}


?>