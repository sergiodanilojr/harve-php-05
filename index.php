<?php
$pupils = require __DIR__ . DIRECTORY_SEPARATOR . "pupils.php";

$price = 90.0;
$installments = 10;

for($i=$installments; $i>=1; $i--){
    $installmentPrice = number_format($price /  $installments, 2,",");
    echo "Parcela {$i} é de R$ ". ($installmentPrice)."<br/>";
}



die;


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>
    <style>
        * {
            font-family: 'sans-serif';
            margin: 0;
        }

        body {
            background-color: rgba(0, 0, 0, .1);
        }

        .card {
            flex-basis: 100%;
            padding: 6px;
            border-radius: 4px;
            margin-bottom: 6px;
            border: 1px solid rgba(0, 0, 0, .2);
            background-color: #FFF;
        }

        .section {
            display: flex;
            flex-wrap: wrap;
            flex-basis: 90%;
            margin: 0 auto;
            padding: 16px;
        }
    </style>
</head>

<body>
    <main>
        <section class="section">
            <?php foreach ($pupils as $key=>$pupil) : ?>
                <article class="card">
                    <span class="">Aluno <?=$key + 1;?></span>
                    <h2><?= $pupil['name']; ?></h2>
                    <p class="">Idade: <?= $pupil['age']; ?></p>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>