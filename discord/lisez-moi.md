Dans ce code, la fonction `getBotResponse()` envoie une requête API à ChatGPT pour obtenir la réponse du chatbot en fonction du message de l'utilisateur. 
Vous devrez remplacer `VOTRE_CLE_API_CHATGPT` par votre propre clé API ChatGPT.

Le bot Discord écoute les messages dans tous les salons Discord auxquels il est connecté. Lorsqu'un message est reçu, le bot envoie le message à ChatGPT en utilisant la fonction `getBotResponse()` et récupère la réponse du chatbot. 
La réponse est ensuite envoyée dans le salon Discord.

Notez que vous devrez d'abord vous inscrire à l'API ChatGPT et générer votre propre clé API avant de pouvoir utiliser cette API. 
Vous devrez également générer votre propre token Discord et l'utiliser dans la fonction `client.login('VOTRE_TOKEN_DISCORD')`.

----------------

___Voici comment vous pouvez obtenir ces informations pour créer un bot Discord :___

>1. Connectez-vous à votre compte Discord ou créez-en un si vous n'en avez pas déjà un.
>2. Accédez au portail des développeurs Discord à l'adresse suivante : https://discord.com/developers/applications/
>3. Cliquez sur `New Application` pour créer une nouvelle application.
>4. Donnez un nom à votre application, puis cliquez sur `Create`.
>5. Dans le menu de gauche, cliquez sur `Bot`.
>6. Cliquez sur `Add Bot`.
>7. Donnez un nom et une image à votre bot.
>8. Notez le token de votre bot (il sera utilisé pour connecter votre bot à Discord).
>9. Si vous le souhaitez, vous pouvez ajouter des fonctionnalités supplémentaires à votre bot en utilisant l'API Discord.
>10. Ajoutez votre bot à un serveur Discord en utilisant le lien suivant : https://discord.com/oauth2/authorize?client_id=YOUR_CLIENT_ID&scope=botscope=bot+applications.commands. Remplacez `YOUR_CLIENT_ID` par l'ID de votre application Discord (que vous pouvez trouver dans les paramètres généraux de votre application).
>11. Une fois que vous avez créé votre bot et obtenu son token, vous pouvez utiliser un framework comme Discord.js pour créer des fonctionnalités pour votre bot, comme répondre à des messages ou effectuer des actions en réponse à des événements dans les salons Discord.
