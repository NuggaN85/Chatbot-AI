// Crée le shortcode pour le widget de chatGPT
function chat_with_gpt_shortcode() {
    return '<div id="chat_with_gpt"></div>';
}
add_shortcode('chat_with_gpt', 'chat_with_gpt_shortcode');

// Enregistre et charge les scripts nécessaires pour le widget de chatGPT
function chat_with_gpt_enqueue_scripts() {
    wp_enqueue_script('chat_with_gpt', 'https://cdn.openai.com/chat-widget/widget.prod.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'chat_with_gpt_enqueue_scripts');

// Initialise le script de chat GPT avec les paramètres spécifiés
function chat_with_gpt_init_script() {
    ?>
    <script>
        window.addEventListener("DOMContentLoaded", function () {
            chatWidget.init({
                apiKey: "YOUR_API_KEY",
                model: "davinci",
                placeholderText: "Posez votre question ici",
                title: "Chat with GPT"
            })
        });
    </script>
    <?php
}
add_action('wp_footer', 'chat_with_gpt_init_script');
