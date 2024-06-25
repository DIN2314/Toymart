    function Connect()
    {
        document.write("loading");
        $(document).ready(function(){$.ajax({url: '/database/connect.php'}); });
    }