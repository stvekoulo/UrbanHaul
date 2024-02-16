<!-- App js -->
<script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>

<script>
    document.getElementById('changeStatusBtn').addEventListener('click', function() {
        // Envoyer une requête AJAX au serveur pour changer le statut
        fetch('{{ route("status.toggle") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors du changement de statut');
            }
            return response.json();
        })
        .then(data => {
            // Mettre à jour le texte du bouton ou effectuer d'autres actions si nécessaire
            console.log(data.message); // Afficher un message de succès ou de débogage
        })
        .catch(error => {
            console.error('Erreur:', error);
        });
    });
</script>






