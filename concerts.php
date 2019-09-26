<h1 class="titlebig">Concerts à venir</h1>
<?php
    $groups = [
        'Taxi '  =>
            '<h2> Taxi </h2>',
                '<p> du 1/11/2019 au 06/11/2019</p>',
                '<img src="pictures/taxi.jpg" class="artistpictures" alt="notes de musiques">',
                '<p>Taxi est un groupe de musique australien, composé de 4 jeunes adolescents. Il a été formé en 2015 dans le quartiers de springfield 
                    pour reprendre « les plus belles chansons célébrant la joie de vivre et l\'insouciance». En mai 2018, le groupe a commencé une 
                    tournée internationale. Ils seront sur la scene du cailloux durant la premiere semaine du mois de novembre.</p>',

        'Crazy goats ' =>
            '<h2> Crazy goats </h2>',
            '<p>12/11/2019</p>',
            '<img src="pictures/crazygoats.jpg" class="artistpictures" alt="notes de musiques">',
            '<p>Les Crazy goats sont de passage dans la region pour une representation unique reservez
                    vite vos places il n\'y en aura pas pour tout le monde</p>',

        ' Amstrong\'s sisters ' =>
            '<h2> Amstrong\'s sisters </h2>',
            '<p>25/12/2019</p>',
            '<img src="pictures/amstrongssisters2.jpg" class="artistpictures" alt="notes de musiques">',
            '<p>Les jazzy nonnes nous font l\'honneur de leur presence au caillou pensez a prendre vos chaussures
                       les plus confortables elles vont comme a leur habitude vous faire danser
                       toute la nuit.</p>',

         'Echo ' =>
             '<h2> Echo </h2>',
             '<p>du 12/03/2020 14/03/2020</p>',
             '<img src="pictures/echo.jpg" class="artistpictures" alt="notes de musiques">',
             '<p>Pas besoin de presenter Echo. Le trio viendra au caillou pour 3 representations exeptionnelles les 12 ,13 et 14 mars prochain</p>',

        ];

foreach ($groups as $group => $description  ) {
    echo '<br>';
    echo $description;
}
?>
</div>
</section>