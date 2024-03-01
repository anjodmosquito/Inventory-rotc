@if(session()->has('message'))
<div id="autoDismissAlert" class="alert {{ session('alert') }} alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
    // Add a timer to automatically dismiss the alert after 3 seconds (3000 milliseconds)
    setTimeout(function() {
        document.getElementById('autoDismissAlert').style.display = 'none';
    }, 5000);
</script>

@endif
