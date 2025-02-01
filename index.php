<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">
            
            <label for="lastname">lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="lastname...">
            
            <label for="favouritepet">Favorite pet</label>
            <select name="favouritepet" id="favouritepet">
                <option value='none'>none</option>
                <option value='dog'>dog</option>
                <option value='cat'>cat</option>
                <option value='bird'>bird</option>
            </select>

            <button type='submit'>Submit</button>
        </form>
    </main>

</body>
</html>