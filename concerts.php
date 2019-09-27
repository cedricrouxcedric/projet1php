<h1 class="titlebig">Concerts à venir</h1>
<?php
    $groups = [
        'Taxi '  => [
                'du 1/11/2019 au 06/11/2019',
                'pictures/taxi.jpg',
                'Taxi le groupe phenome australien a commencé une 
                    tournée internationale. Ils seront sur la scene du cailloux durant la premiere semaine du mois de novembre.',
                ],
        'Crazy goats ' => [
                '12/11/2019 ',
                'pictures/crazygoats.jpg',
                'Les Crazy goats sont de passage dans la region pour une representation unique reservez
                 vite vos places il n\'y en aura pas pour tout le monde',
        ],
        ' Amstrong\'s sisters ' => [
                '25/12/2019',
                'pictures/amstrongssisters2.jpg',
                'Les jazzy nonnes nous font l\'honneur de leur presence au caillou pensez a prendre vos chaussures
                               les plus confortables elles vont comme a leur habitude vous faire danser
                               toute la nuit.',
        ],
         'Echo ' => [
             'du 12/03/2020 14/03/2020',
             'pictures/echo.jpg',
             'Pas besoin de presenter Echo. Le trio viendra au caillou pour 3 representations exeptionnelles les 12 ,13 et 14 mars prochain',
        ],
    ];



foreach ($groups as $group => $data  ) {
    echo '<h2>' . $group . '</h2>';
    echo '<br>';
    echo '<p>' . $data[0] . '</p>';
    echo '<br>';
    echo '<img src="' . $data[1] . '" class="artistpictures" alt="photo groupe de musique">';
    echo '<br>';
    echo '<p>' . $data[2] . '</p>';
    echo '<br>';

}
?>
</div>
</section>