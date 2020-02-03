<?php
$array = array("");
$vraag1 = readLine("Hoe veel activiteiten wil je toevoegen? ");


if (is_numeric($vraag1)) {
} else {
    echo "'$vraag1' is geen getal, probeer het opnieuw";
    exit;
}


for ($i = 1; $i <= $vraag1; $i ++) {
    $vragen = readLine("Wat wil jij toevoegen aan jouw bucket list ? ");
    array_push($array, $vragen);

    if (is_numeric($vragen)) {
        echo "'$vragen' is geen letter";
        exit;
    } else {
    }
}
echo("Op jouw bucket list staat: ");
for ($u = 0; $u < count($array); $u ++) {
    $uitkomst = $array[$u];
    echo($uitkomst . PHP_EOL);
}
