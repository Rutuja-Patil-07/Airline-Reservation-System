















<div class="content-header">
</div>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                 if(isset($_SESSION['status']))
                 {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                 }
                 ?>
                 <div class="card">
                    <div class="card-header">
                        <h3 class="class-title>Registered User"