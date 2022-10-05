<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de workshop</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

    <h2>Formulaire d'inscription</h2>

    <form class="container" action="verification.php" method="POST">
        <p>
            <label for="firstname" class="form-label">Prénom : </label>
            <input type="text" name="firstname" id="firstname" class="form-control" required>
        </p>

        <p>
            <label for="lastname" class="form-label">Nom : </label>
            <input type="text" name="lastname" id="lastname" class="form-control">
        </p>

        <p>
            <label for="email" class="form-label">Email : </label>
            <input type="email" name="email" id="email" class="form-control">
        </p>

        <p>
            <label for="password" class="form-label">Mot de passe : </label>
            <input type="password" name="password" id="password" class="form-control">
        </p>

        <p>
            <input type="submit" value="OK" class="btn btn-primary">
        </p>
    </form>
    
</body>
</html>