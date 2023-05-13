

    <?php

        include 'header.php';

        $code = $_POST['code'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $section = $_POST['section'];
        $date = $_POST['date'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];


        $sql = "INSERT INTO books (book_code, book_title, category, publication_date, author, publisher, stat, section) VALUES ('$code', '$title', '$category', '$date', '$author', '$publisher', 'Available', '$section');";
        mysqli_query($conn, $sql);
    
        header("Location: index.php?signup=sucess");
