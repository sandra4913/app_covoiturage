<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Covoiturage</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Nom</p>
        <input type="text" name="nom" placeholder="Durand">
        <p>Prénom</p>
        <input type="text" name="prenom" placeholder="Paul">
        <p>Adresse e-mail</p>
        <input type="e-mail" name="email" placeholder="pauldurand@gmail.com">
        <p>Numéro de téléphone</p> <input type="tel" name="telephone" placeholder="0606060606">
        <div>
            <label>Ville de départ : </label>
            <select type="select" name="depart">
                <option value="Paris">Paris</option>
                <option value="Orléans">Orléans</option>
                <option value="Dublin">Dublin</option>
                <option value="Nice">Nice</option>
                <option value="Tours">Tours</option>
            </select>
        </div>
        <input type="submit" name="valider" value="Rechercher mon trajet">
    </form>
    <?php

    //tableau des voyages possibles

    $travels = [
        ['departure' => 'Paris', 'arrival' => 'Nantes', 'departureTime' => '11:00', 'arrivalTime' => '12:34', 'driver' => 'Thomas'],
        ['departure' => 'Orléans', 'arrival' => 'Nantes', 'departureTime' => '05:15', 'arrivalTime' => '09:32', 'driver' => 'Mathieu'],
        ['departure' => 'Dublin', 'arrival' => 'Tours', 'departureTime' => '07:23', 'arrivalTime' => '08:50', 'driver' => 'Nathanaël'],
        ['departure' => 'Paris', 'arrival' => 'Orléans', 'departureTime' => '03:00', 'arrivalTime' => '05:26', 'driver' => 'Clément'],
        ['departure' => 'Paris', 'arrival' => 'Nice', 'departureTime' => '10:00', 'arrivalTime' => '12:09', 'driver' => 'Audrey'],
        ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '10:40', 'arrivalTime' => '13:00', 'driver' => 'Pollux'],
        ['departure' => 'Nice', 'arrival' => 'Tours', 'departureTime' => '11:00', 'arrivalTime' => '16:10', 'driver' => 'Edouard'],
        ['departure' => 'Tours', 'arrival' => 'Amboise', 'departureTime' => '16:00', 'arrivalTime' => '18:40', 'driver' => 'Priscilla'],
        ['departure' => 'Nice', 'arrival' => 'Nantes', 'departureTime' => '12:00', 'arrivalTime' => '16:00', 'driver' => 'Charlotte'],
    ];

    // Validation du formulaire
    $valider = $_POST['valider'];

    // Conditions pour soumettre le formulaire
    if (isset($valider)) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $tel = $_POST['telephone'];

        //formulaire non valide
        if (empty($nom) or empty($prenom) or empty($email) or empty($tel)) {
            echo 'Merci de remplir tous les champs.';

            //formulaire valide
        } else {
            foreach ($travels as $travel) {
                if ($travel['departure'] === $_POST['depart']) {
                    echo "Trajet disponible au départ de " . $_POST['depart'] . " : <br><br></div>";
                    foreach ($travel as $key => $value) {
                        echo $key . ' => ' . $value . '<br>';
                    }
                    echo '<br>';
                }
            }
        }
    }
    ?>
</body>

</html>