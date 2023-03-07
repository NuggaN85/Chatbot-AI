const Discord = require('discord.js');
const client = new Discord.Client();

// Fonction pour envoyer une requête API à ChatGPT et récupérer la réponse
function getBotResponse(message) {
    const axios = require('axios');
    const api_key = 'VOTRE_CLE_API_CHATGPT';

    // Envoi de la requête API à ChatGPT
    const apiUrl = 'https://api.chatgpt.com/get_response';
    const data = {
        input: message.content,
        api_key: api_key
    };

    return axios.post(apiUrl, data)
        .then(response => {
            // Analyse de la réponse JSON de ChatGPT et récupération de la réponse du chatbot
            const botResponse = response.data.response;
            return botResponse;
        })
        .catch(error => {
            console.error(error);
            return 'Désolé, une erreur est survenue.';
        });
}

client.on('ready', () => {
    console.log(`Connecté en tant que ${client.user.tag}!`);
});

client.on('message', message => {
    // Vérification que le message provient d'un utilisateur et n'est pas généré par le bot
    if (message.author.bot) {
        return;
    }

    // Envoi du message à ChatGPT pour obtenir la réponse du chatbot
    getBotResponse(message)
        .then(botResponse => {
            // Envoi de la réponse du chatbot dans le salon Discord
            message.channel.send(botResponse);
        })
        .catch(error => {
            console.error(error);
        });
});

client.login('VOTRE_TOKEN_DISCORD');
