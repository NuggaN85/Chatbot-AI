defined('_JEXEC') or die;

function chat_with_gpt_shortcode() {
    return '<div id="chat_with_gpt"></div>';
}
add_shortcode( 'chat_with_gpt', 'chat_with_gpt_shortcode' );

function chat_with_gpt_enqueue_scripts() {
    JFactory::getDocument()->addScript('https://cdn.openai.com/chat-widget/widget.prod.js');
}
add_action( 'Joomla\CMS\Document\Renderer\Html\ModulesRenderer::render', 'chat_with_gpt_enqueue_scripts' );

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
add_action( 'Joomla\CMS\Document\Renderer\Html\ModulesRenderer::render', 'chat_with_gpt_init_script' );
