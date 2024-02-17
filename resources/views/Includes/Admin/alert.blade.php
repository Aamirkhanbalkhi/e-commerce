<!-- Include Bootstrap CSS and JS -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Your alert -->
@if(session('status'))
<div class="alert alert-success mt-2" id="autoCloseAlert"><b>Successfully!</b> {{ session('status') }} </div>

@elseif(session('Messages'))
<div class="alert alert-danger mt-2" id="autoCloseAlert"><b>Opps! </b> {{ session('Messages') }} </div>
@endif

<!-- JavaScript to close the alert after 3 seconds -->
<script>
    // Close the alert after 3 seconds
    $(document).ready(function() {
        setTimeout(function() {
            $("#autoCloseAlert").alert('close');
        }, 3000);
    });
</script>
