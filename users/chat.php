<?php 
include ('header.php');
include ('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />

<body>
<div class="max-w-md mx-auto p-4">
    <!-- Chat Messages Section -->
    <div id="chat-messages" class="mb-4">
        <!-- Messages will be dynamically added here -->
    </div>

    <!-- Message Input Section -->
    <div class="flex items-center border border-gray-300 rounded-lg">
        <!-- Voice Input Button -->
        <button id="voice-input" class="p-2">
            <!-- You can use an icon for voice input here -->
            🎤
        </button>

        <!-- Text Input for Messages -->
        <input id="message-input" type="text" placeholder="Type your message..." class="flex-1 px-4 py-2 focus:outline-none">

        <!-- Send Button -->
        <button id="send-button" class="bg-green-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none">
            <!-- You can use an icon similar to WhatsApp's send button here -->
            Send
        </button>
    </div>
</div>

</body>
<script>
     document.addEventListener('DOMContentLoaded', function() {
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const chatMessages = document.getElementById('chat-messages');

        // Function to add a new message to the chat section
        function addMessage(message, sender) {
            const messageElement = document.createElement('div');
            messageElement.classList.add('mb-2');
            messageElement.innerHTML = `<strong>${sender}:</strong> ${message}`;
            chatMessages.appendChild(messageElement);
        }

        // Event listener for the send button
        sendButton.addEventListener('click', function() {
            const message = messageInput.value.trim();
            if (message !== '') {
                addMessage(message, 'You');
                messageInput.value = ''; // Clear the message input
            }
        });

        // Event listener for voice input button (not implemented in this example)
        const voiceInputButton = document.getElementById('voice-input');
        voiceInputButton.addEventListener('click', function() {
            // Implement voice input functionality here
            alert('Voice input not implemented yet');
        });
    });
</script>
</html>
<?php 

include ('footer.php');
?>