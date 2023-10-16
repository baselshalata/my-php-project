<html>

    <head>
        <title>Form for Book Details</title>
    </head>

    <body>
        <h1>Book Details Form</h1>
        <form method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label>Book Name: </label>
            <input type="text" name="book_name" required><br><br>
            <label>Price: </label>
            <input type="text" name="price" required><br><br>
            <label>Author: </label>
            <input type="text" name="author" required><br><br>
            <input type="submit" name="submit" value="Submit"><br><br>
        </form>
        <h2>Book Details</h2>
        <?php
    if (isset($_POST['submit'])) {
        $book_name = $_POST['book_name'];
        $price = $_POST['price'];
        $author = $_POST['author'];
        echo "<table>
				<tr>
					<th>Book Name</th>
					<th>Price</th>
					<th>Author</th>
				</tr>
				<tr>
					<td>$book_name</td>
					<td>$price</td>
					<td>$author</td>
				</tr>
			</table>";
    }
    ?>
    </body>

</html>