<div class="container">
    <h2>Create table</h2>

    <form method="POST" action="<?php echo  base_url(),"organizer/create_table"?>" class="form-horizontal">

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Table name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Enter table name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Columns:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="column" id="column" placeholder="Enter number of colums">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
        </div>

    </form>
</div>

<?php if(isset($error_msg)) {   ?>

    <div class="alert alert-success">
        <strong><?php echo $error_msg;?></strong>
    </div>
<?php    } ?>


<?php if(isset($valid_msg)) {   ?>

    <div class="alert alert-danger">
        <strong><?php echo $valid_msg;?></strong>
    </div>
<?php    } ?>


<?php if(isset($column_input) && isset($table_name)) {?>

<div class="container">
    <h2><?php echo $table_name ?></h2>

    <form method="POST" action="<?php echo  base_url(),"organizer/finalize_table_creation" ?>" class="form-horizontal">

    <div class="well">
        <?php
            $names = array();
            foreach($column_input as $key => $value) {
                $names[] = $key;
                echo "Column name: ". $value . "<br><br>";
            }
        }
            if(isset($names)) {
            foreach($names as $value) {
                echo '<input type="hidden" name="result[]" value="'. $value . '">';
            }
                echo '<input type="hidden" name="table_name" value="'. $table_name . '">';
        ?>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
        </div>

        <?php } ?>

    </div>

    </form>

</div>

<script>
</script>

