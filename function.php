<?php
require_once "dbconnect.php";
date_default_timezone_set("Asia/Bangkok");

function add($query)
{
    global $conn;
    $dates = $query['dates'];
    $category = $query['category'];
    $amount = $query['amount'];

    $sql = "INSERT INTO records (dates, category, amount) VALUES ('$dates', '$category', '$amount')";
    if (mysqli_query($conn, $sql)) {
        return true;
        echo "Record has been added.";
    } else {
        return false;
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

function update($query)
{
    global $conn;
    $id = $query['id'];
    $dates = $query['dates'];
    $category = $query['category'];
    $amount = $query['amount'];

    $sql = "UPDATE records SET dates='$dates', category='$category', amount='$amount' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        return true;
        echo "Record has been updated.";
    } else {
        return false;
        echo "Oops! Something went wrong. Please try again later.";
    }
}
