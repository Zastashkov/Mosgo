<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php
        include "includes/navigation.php";
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                    $query = "SELECT * FROM parks LIMIT 3";
                    $selectAllParksQuery = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($selectAllParksQuery)) {
                        $CommonName = $row['CommonName'];
                        $District = $row['District'];
                        $park_image = $row['park_image'];
                        $Location = $row['Location'];
                        ?>

                        <h1 class="page-header">
                            Москва
                            <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $CommonName?></a>
                        </h2>
                        <p class="lead">
                            <a href="index.php"><?php echo $District?></a>
                        </p>
<!--                        <p><span class="glyphicon glyphicon-time"></span> August 28, 2023 at 10:00 PM</p>-->
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $park_image;?>" alt="">
                        <hr>
                        <p><?php echo $Location?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>

                    <?php } ?>



            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php
            include "includes/sidebar.php";
            ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
            include "includes/footer.php";
        ?>