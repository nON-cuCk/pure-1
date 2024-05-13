<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('message.processed', (component) => {
            setTimeout(function() {
                $('#alert').fadeOut('fast');
            }, 5000);
        });
    });

    window.livewire.on('closeAddRequestModal', () => {
        $('#AddRequestModal').modal('hide');
    });
    window.livewire.on('openAddRequestModal', () => {
        $('#AddRequestModal').modal('show');
    });

</script>