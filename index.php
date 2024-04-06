<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Google Search</title>
</head>

<body>
    <div class="container">
        <h1>Search in </h1>
        <img src="./google.png" alt="Google" width="200px" height="100px">
        <form action="server.php" method="GET">
            <span>🔍</span>
            <input type="text" id="KeywordsInput" placeholder="Search" name="keywords" required autocomplete="off">
            <button type="submit" onclick="validate()" name="submit">Search</button>
        </form>
    </div>

    <script>
        function validate() {    
            KeywordsInput.value = inputValue.replace(/^\s+|\s+$/gm, '');
        }
    </script>
</body>

</html>