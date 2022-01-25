<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */


$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <p>Voici nos programmes de la semaine</p>
                <table>
                    <tr>
                        <th>Jours</th>
                    </tr>
                    <tr>
                        <td>Lundi</td><td>Présentiel</td>
                    </tr>
                    <tr>
                        <td>Mardi</td><td>Présentiel</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td><td>Distanciel</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td><td>Présentiel</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td><td>Distanciel</td>
                    </tr>
                </table>
            </div>
        </body>
    </html>
';

$to =  'j.conan@fondationface.org , angelique.dehainaut59@gmail.com';

$subject = "Calendrier de présence sur la semaine";

$headers = [
//    'Reply-to' => 'dehainaut.angelique@orange.fr';
    'X-Mailer' => 'PHP/' . phpversion(),
    'Mine-Version' => "1.0",
    'Content-type' => 'test/html; charset=utf-8'
];

mail($to, $subject,$html,$headers,"-f dehainaut.angelique@orange.fr");
if (mail((string)$to, $subject, $html, $headers)) {
    echo "Email envoyé avec succès à $to ...";
} else {
    echo "Échec de l'envoi de l'email...";
}

