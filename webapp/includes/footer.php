<?php
      if($err!=NULL && !empty($err)) {
        ?>
        <script type="text/javascript">
        $(document).ready(function() {
          $('.maincontent .alert').html('<strong>Error: </strong><?php echo htmlentities(strip_tags($err,'')); ?>');
          $('.maincontent .alert').show();
        });
        </script>
        <?php
      }
    ?>