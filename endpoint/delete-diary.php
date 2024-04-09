<?php
include("../conn/conn.php");

if (isset($_GET['diary'])) {
    $diaryID = $_GET['diary'];

    try {
        $stmt = $conn->prepare("DELETE FROM tbl_diary WHERE tbl_diary_id = :tbl_diary_id");
        $stmt->bindParam(':tbl_diary_id', $diaryID, PDO::PARAM_INT);
        
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: http://localhost/my-e-diary/read-diary.php?success=1");
            exit();
        } else {
            header("Location: http://localhost/my-e-diary/read-diary.php?error=1");
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    header("Location: http://localhost/my-e-diary/read-diary.php?error=1");
    exit();
}
?>
