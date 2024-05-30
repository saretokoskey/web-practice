<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Officer Dashboard</title>
</head>
<body>
    <h1>Officer Dashboard</h1>
    <form action="conn.php" method="POST">
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <button type="submit">Submit Report</button>
    </form>
</body>
</html>
