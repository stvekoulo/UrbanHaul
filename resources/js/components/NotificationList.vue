<template>
    <!-- Votre template HTML du composant -->
    <div>
      <!-- Contenu du composant -->
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        notifications: [] // Assurez-vous d'avoir cette propriété dans votre data
      };
    },
    methods: {
      fetchNouvellesNotifications() {
        fetch('/nouvelles-notifications', {
          method: 'GET',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json',
            'Accept': 'application/json',
          },
        })
        .then(response => response.json())
        .then(data => {
          // Mettez à jour la liste des notifications avec les nouvelles données
          this.notifications = data.nouvelles_notifications;
        })
        .catch(error => console.error('Erreur lors de la récupération des nouvelles notifications:', error));
      },
    },
    mounted() {
      // Appeler fetchNouvellesNotifications à intervalles réguliers (par exemple, toutes les 5 secondes)
      setInterval(this.fetchNouvellesNotifications, 5000);
    }
  };
  </script>
  
  <style>
  /* Votre style CSS pour le composant, s'il y en a */
  </style>
  