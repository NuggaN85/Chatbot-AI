Dans ce code, la fonction `getBotResponse()` envoie une requête API à Dialogflow pour obtenir la réponse du chatbot en fonction du message de l'utilisateur. 
Vous devrez remplacer `VOTRE_CLE_API_DIALOGFLOW` et `VOTRE_ID_PROJET_DIALOGFLOW` par votre clé API et votre identifiant de projet Dialogflow respectivement.

Le code vérifie si un message a été envoyé via un formulaire et utilise la fonction `getBotResponse()` pour générer la réponse du chatbot. La réponse est ensuite affichée à l'utilisateur. 
Notez que vous devrez d'abord créer un agent Dialogflow et configurer des intents et des réponses de fulfillment pour votre chatbot avant de pouvoir utiliser cette API.

----------------

___Voici comment vous pouvez obtenir ces informations pour votre projet Dialogflow :___

>1. Connectez-vous à la console Dialogflow à l'adresse suivante : https://console.dialogflow.com/
>2. Sélectionnez votre projet Dialogflow dans la liste des projets
>3. Cliquez sur l'icône Paramètres (icône en forme d'engrenage) en haut à droite de l'écran
>4. Cliquez sur le lien "Service Account" dans le menu de gauche
>5. Cliquez sur le bouton "Create Service Account" pour créer un nouveau compte de service (si vous n'en avez pas déjà un)
>6. Entrez un nom pour votre compte de service et cliquez sur "Create"
>7. Dans la liste des comptes de service, cliquez sur les trois points à côté du nom de votre compte de service et sélectionnez "Create Key"
>8. Sélectionnez le type de clé "JSON" et cliquez sur "Create"
>9. Un fichier JSON contenant votre clé API sera téléchargé sur votre ordinateur. Ouvrez le fichier pour récupérer votre clé API et votre identifiant de projet Dialogflow.
>10. Assurez-vous de garder votre clé API en sécurité et de ne pas la partager avec d'autres personnes, car elle peut être utilisée pour accéder à vos données de projet Dialogflow.
