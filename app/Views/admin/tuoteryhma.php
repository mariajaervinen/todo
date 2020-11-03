<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $otsikko ?></title>
</head>
<body>
    <h3><?= $otsikko ?></h3>
    <select>
    <?php foreach($tuoteryhmat as $tuoteryhma); ?>
        <option><?= $tuoteryhma['nimi'] ?></option>
    <?php T_ENDFOREACH; ?>
    </select>
    <?= anchor('admin/tallenna', 'Lisää uusi'); ?>
</body>
</html> 