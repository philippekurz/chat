<x-guest-layout>
    @foreach ($messages as $message)
        <div>
            <h3>{{ $message->date_heure }}</h3>
            <p>{{ $message->message }}</p>
        </div>
    @endforeach

    <script>
        function refresh() {
            console.log("Refreshing messages..."); 
            fetch('/messages')
                .then(response => {
                    console.log(response);
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                })           
        }    
        
        setInterval(refresh, 5000); // Refresh every 1 seconds
    </script>

</x-guest-layout>