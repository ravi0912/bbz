<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<button type="button" class="btn btn-default" onclick="showByelaws(event);">ByeLaws</button>
<button type="button" class="btn btn-info" onclick="showTenders(event);">Tender</button>
<button type="button" class="btn btn-success">Log Out</button>

<script>
    function showByelaws(event) {
        if (event.which == 1) {
            var domain = window.location.host;
            window.location.href = 'http://' + domain + '/viewAdminByelaws';
        }
    }
    function showTenders(event){
        if (event.which == 1) {
            var domain = window.location.host;
            window.location.href = 'http://' + domain + '/viewAdminTenders';
        }
    }
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>