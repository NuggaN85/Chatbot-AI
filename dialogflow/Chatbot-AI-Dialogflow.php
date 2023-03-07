<?php
// Fonction pour envoyer une requête API à Dialogflow et récupérer la réponse
function getBotResponse($message) {
    $api_key = "VOTRE_CLE_API_DIALOGFLOW";
    $project_id = "VOTRE_ID_PROJET_DIALOGFLOW";
    $session_id = uniqid();

    // Envoi de la requête API à Dialogflow
    $curl = curl_init();

    $query = array(
        'queryInput' => array(
            'text' => array(
                'text' => $message,
                'languageCode' => 'fr-FR'
            )
        )
    );

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://dialogflow.googleapis.com/v2/projects/".$project_id."/agent/sessions/".$session_id.":detectIntent",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($query),
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$api_key,
            "Content-Type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        // Gestion des erreurs
        return "Désolé, une erreur est survenue.";
    } else {
        // Analyse de la réponse JSON de Dialogflow et récupération de la réponse du chatbot
        $response_json = json_decode($response, true);
        $bot_response = $response_json['queryResult']['fulfillmentText'];

        return $bot_response;
    }
}

// Vérification si un message a été envoyé
if(isset($_POST['message'])) {
    $message = $_POST['message'];
    $bot_response = getBotResponse($message);

    // Affichage de la réponse du chatbot
    echo $bot_response;
}
?>

<!-- Formulaire pour envoyer un message à notre chatbot -->
<form method="post" action="">
    <input type="text" name="message" placeholder="Entrez votre message ici...">
    <button type="submit">Envoyer</button>
</form>
