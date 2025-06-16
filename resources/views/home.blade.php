<x-guest-layout>

    {{-- Div pour afficher les messages --}}
    <div id="messagesContainer">
        @foreach ($messages as $message)
            <div>
                <h3>{{ $message->date_heure }}</h3>
                <p>{{ $message->message }}</p>
            </div>
        @endforeach
    </div>

    {{-- Div pour l'édition des messages --}}
    <div id="messageForm">        
        <input type="text" id="messageInput" placeholder="Entrez votre message...">
        <button id="sendMessageButton" onclick="ajouterMessage()">Envoyer</button>
    </div>
    
    <script>
        function ajouterMessage() {
            const message = document.querySelector('#messageInput').value;
            if (message.trim() === '') {
                alert('Veuillez entrer un message.');
                return;
            }
            // Envoi du message au serveur
            fetch('/messages', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ message: message })
            })
        }
        function refresh() { 
            fetch('/messages', {
                method: 'GET'
            })
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    // Vider le contenu de body
                    document.querySelector('#messagesContainer').innerHTML = '';
                    
                    // Parcours le tableau data qui contient les messages
                    data.forEach(message => {
                        const messageDiv = document.createElement('div');
                        messageDiv.innerHTML = `<h3>${message.date_heure}</h3><p>${message.message}</p>`;
                        document.querySelector('#messagesContainer').appendChild(messageDiv);
                    });
                })
        }
        
        setInterval(refresh, 5000); // Refresh every 5 seconds
    </script>

</x-guest-layout>