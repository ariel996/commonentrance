<footer id="footer">
    <p>Copyright, Ariel Nana &copy; 2017</p>
</footer>

<script>
    $(document).ready(function() {
       $("#display").DataTable();

       $("#envoie").on('click', function () {
          var formdata = $("#monForm").serialize();
          $.ajax({
              url: 'check.php',
              type: 'POST',
              data: formdata,
              success: function (data) {
                  $("#corps").html(data);
              }
          })
       });

       $("#printing").on('click', function () {
          window.open('../imprime1.php?filiere=<?php echo $filiere; ?>','_blank');
       });

        $("#imprime").on('click', function () {
            window.open('../imprime2.php?filiere=<?php echo $filiere; ?>','_blank');
        });

        $("#printing3").on('click', function () {
            window.open('../imprime3.php?filiere=<?php echo $filiere; ?>','_blank');
        });
    });
</script>
</body>
</html>