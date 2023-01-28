<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Районы</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php
                        $query = "SELECT * FROM parks WHERE 'District' NOT LIKE '%[%' LIMIT 4";
                        $selectAllCategoriesQuery = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($selectAllCategoriesQuery)) {
                            $District = $row['District'];
                            echo "<li><a href='#'>{$District}</a></li>";
                        }
                    ?>
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
<!--                    <li><a href="#">Category Name</a>-->
<!--                    </li>-->
                </ul>
            </div>

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include "widget.php" ?>

</div>
