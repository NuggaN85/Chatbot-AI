<?php
// Fonction pour envoyer une requête API à ChatGPT et récupérer la réponse
function getBotResponse($message) {
    $api_key = "VOTRE_CLE_API_CHATGPT";

    // Envoi de la requête API à ChatGPT
    $curl = curl_init();

    $query = array(
        'input' => $message,
        'api_key' => $api_key
    );

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.chatgpt.com/get_response",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($query),
        CURLOPT_HTTPHEADER => array(
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
        // Analyse de la réponse JSON de ChatGPT et récupération de la réponse du chatbot
        $response_json = json_decode($response, true);
        $bot_response = $response_json['response'];

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
