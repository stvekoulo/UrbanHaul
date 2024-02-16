<!-- resources/js/components/NotificationItem.vue -->
<template>
    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card shadow-none mb-1">
        <div class="card-body">
            <span class="float-end noti-close-btn text-muted" @click="supprimerNotification(notification.id)">
                <i class="mdi mdi-close"></i>
            </span>
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <div class="notify-icon bg-primary">
                        <i class="mdi mdi-comment-account-outline"></i>
                    </div>
                </div>
                <div class="flex-grow-1 text-truncate ms-2">
                    <h5 class="noti-item-title fw-semibold font-size-14">{{ notification.data.title }} <small class="fw-normal text-muted ms-1">{{ notification.data.timestamp }}</small></h5>
                    <small class="noti-item-subtitle text-muted">{{ notification.data.subtitle }}</small>
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    props: ['notification'],
    methods: {
        supprimerNotification(notificationId) {
            fetch(`/supprimer-notification/${notificationId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                console.log(data.message);
                this.$emit('notification-supprimee', notificationId);
            })
            .catch(error => console.error('Erreur lors de la suppression de la notification:', error));
        }
    }
}
</script>

<style scoped>
/* Ajoutez vos styles CSS spécifiques au composant ici, s'ils sont nécessaires */
</style>