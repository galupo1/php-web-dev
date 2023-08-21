$query = "INSERT INTO blog_system(title, content, author, publication_date)
        VALUES(?, ?, ?, ?,)";
$stmt = mysqli_prepare($dbconnect, $query);
mysqli_stmt_bind_param($stmt, "ssss", $title, $content, $author, $p_date);





<!-- frm gpt -->
if (!$stmt) {
    die('Preparation of statement failed: ' . mysqli_error($dbconnect));
}



if (mysqli_stmt_execute($stmt)) {
    echo "Data submitted successfully";
} else {
    die('Execution of statement failed: ' . mysqli_error($dbconnect));
}