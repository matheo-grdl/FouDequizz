<?php
include('db/connection.php');

// Connection à la base de données
$base = db();


$SQL = "SELECT idQuestion,Categorie,Question,choix1,choix2,choix3,Reponse" .
    "  FROM Question";
$statement = $base->prepare($SQL);
$params = array();
$success1 = $statement->execute($params);

// Exécution de la recherche
$quizz = $statement->fetchAll(PDO::FETCH_OBJ);

$nbrQuestion = count($quizz);

function nbrAleoatoire($max)
{
    return  mt_rand(1, $max);
}
function FindQuestion($nbrQuestion1)
{
    $Qeust =  nbrAleoatoire($nbrQuestion1);

    $id = $Qeust;

    // prepare a query with a variable in the WHERE clause
    $sql = "SELECT * FROM Question WHERE idQuestion = :id";
    $stmt = db()->prepare($sql);

    // bind parameters
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // execute the query
    $stmt->execute();

    // fetch the result set
    $results = $stmt->fetchAll();

    return $results;
    //return $Quizz ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
    <link rel="stylesheet" href="style.css" class="css">
</head>

<body>
    <header></header>
    <nav>
        <ul class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#">Start Quizz</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <main>
        <h2>Quizz</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam temporibus nemo itaque, magni rerum delectus. Dolore quibusdam vitae possimus dolor! Ullam hic quaerat quia aliquid fugit corrupti quisquam veritatis sequi?
            Illo sapiente est nesciunt, magni modi porro ab nostrum ipsa cupiditate consequatur recusandae, doloremque repellendus? Fugiat in impedit quo tenetur dignissimos, quae necessitatibus, aliquam dolore similique eius officiis! Modi, mollitia!
            Mollitia possimus corporis, totam voluptatum deserunt suscipit quis pariatur accusantium voluptatem tempora impedit veniam sapiente sed quae eveniet fugit ipsa vero at quisquam perspiciatis cum similique maiores. Impedit, culpa nulla.
            Pariatur, vitae libero explicabo delectus voluptates fuga eum odit expedita. Dignissimos sed omnis, ratione saepe sequi vitae asperiores deleniti culpa exercitationem temporibus beatae dicta modi, accusantium ipsum numquam esse dolorum!
            Possimus quos fugit sed! Reprehenderit, dolorum unde. Dolor nobis eius reprehenderit, cum quia illo necessitatibus incidunt id voluptas laudantium. Unde placeat ea voluptates voluptatum? Quae vitae in id necessitatibus quis.</p>
        <input type="button" value="Commencer">
        <div id="Quizz">
            <fieldset>
                <?php
                $questionenquestion = FindQuestion($nbrQuestion);
                var_dump($questionenquestion);
                ?>
                <h2>Question n<span>1</span></h2>
                <?php foreach ($questionenquestion as $questiom) { ?>

                    <p><?php echo $questiom['Question'] ?></p>

                    <label for="rep1"> <input type="radio" id="rep1" name="reponse "> <?php echo $questiom['choix1']; ?></label>
                    <label for="rep2"> <input type="radio" id="rep2" name="reponse "> <?php echo $questiom['choix2']; ?></label>
                    <label for="rep3"> <input type="radio" id="rep3" name="reponse "> <?php echo $questiom['choix3']; ?></label>


                <?php } ?>

                <h3></h3>
            </fieldset>

            <fieldset>
                <?php
                $questionenquestion = FindQuestion($nbrQuestion);
                var_dump($questionenquestion);
                ?>
                <h2>Question n<span>2</span></h2>
                <?php foreach ($questionenquestion as $questiom) { ?>

                    <p><?php echo $questiom['Question'] ?></p>

                    <label for="rep12"> <input type="radio" id="rep12" name="reponse2 "> <?php echo $questiom['choix1']; ?></label>
                    <label for="rep22"> <input type="radio" id="rep22" name="reponse2 "> <?php echo $questiom['choix2']; ?></label>
                    <label for="rep32"> <input type="radio" id="rep32" name="reponse2 "> <?php echo $questiom['choix3']; ?></label>


                <?php } ?>

                <h3></h3>
            </fieldset>

            <fieldset>
                <?php
                $questionenquestion = FindQuestion($nbrQuestion);
                var_dump($questionenquestion);
                ?>
                <h2>Question n<span>3</span></h2>
                <?php foreach ($questionenquestion as $questiom) { ?>

                    <p><?php echo $questiom['Question'] ?></p>

                    <label for="rep12"> <input type="radio" id="rep12" name="reponse2 "> <?php echo $questiom['choix1']; ?></label>
                    <label for="rep22"> <input type="radio" id="rep22" name="reponse2 "> <?php echo $questiom['choix2']; ?></label>
                    <label for="rep32"> <input type="radio" id="rep32" name="reponse2 "> <?php echo $questiom['choix3']; ?></label>


                <?php } ?>

                <h3></h3>
            </fieldset>

            <fieldset>
                <?php
                $questionenquestion = FindQuestion($nbrQuestion);
                var_dump($questionenquestion);
                ?>
                <h2>Question n<span>4</span></h2>
                <?php foreach ($questionenquestion as $questiom) { ?>

                    <p><?php echo $questiom['Question'] ?></p>

                    <label for="rep12"> <input type="radio" id="rep12" name="reponse2 "> <?php echo $questiom['choix1']; ?></label>
                    <label for="rep22"> <input type="radio" id="rep22" name="reponse2 "> <?php echo $questiom['choix2']; ?></label>
                    <label for="rep32"> <input type="radio" id="rep32" name="reponse2 "> <?php echo $questiom['choix3']; ?></label>


                <?php } ?>

                <h3></h3>
            </fieldset>
        </div>
    </main>
    <footer></footer>
</body>

</html>