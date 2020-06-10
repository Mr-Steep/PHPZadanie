<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/public/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
            $('button.btn-primary').on('click', function () {
                var name_country = $('input[name="name_country"]').val();
                $.ajax({
                    method: "POST",
                    url: "zad/zadanie_4.php",
                    data: {
                        name_country: name_country,
                    },
                    success: function (data) {
                        $('.results').html(data);
                    }
                });
                $('input[name="name_country"]').val('');
            });
        }
    );
</script>
</body>
</html>