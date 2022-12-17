<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?><?php 

                $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("meluncurrrr!!!");
                      window.location = "pos.php";
                  </script>
             <?php   }
                         
           
}   
            ?>
 <div class="row">
<div class="col-12 col-md-12 p-3 p-md-5 text-center">

        <img src="https://pbs.twimg.com/media/FivDq0dUUAEskYu?format=png&name=small" width="200">
<p>
<br/>Selamat Datang di Warteg Cash
<br/>Lebih Rapi, Lebih Untung
<br/>
<div class="row">
</div>
</div>
</div>
</div>

          </div>

<?php
include'../includes/footer.php';
?>