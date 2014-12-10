
<!DOCTYPE html>
<html>
    <head>
        <?php include '../../php/base/head.php' ?>
    </head>

    <body>
        <script type="text/javascript">
            $(document).ready(function( ) {
                // ------------------------------------------------
                // Initial queries
            })
            function test() {
                $.ajax({ // GET EVENT INFO
                    type: "GET",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/users/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $ERP_TOKEN; ?>");
                    },
                    cache: false,
                    data: {'email' : "a@a.com"},
                }).done(function(res) {
                    console.log(res)
                }).fail(function(xhr) {
                    console.log(xhr)
                })
            }
        </script>
    <?php include '../../php/base/foot.php' ?>
    </body>
</html>
