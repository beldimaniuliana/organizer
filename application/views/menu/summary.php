
    <div class="container margin-from-header">
        <h2>Summary</h2>
        <p>What can I do ???</p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            </thead>

            <tbody>
            <?php
                if(isset($summary)) {
                    foreach($summary as $row) {
                        echo "<tr>";
                        echo  "<td>". $row->name ."</td>";
                        echo  "<td>". $row->description ."</td>";
                        echo "<tr>";
                    }
                }
            ?>
            </tbody>

        </table>
    </div>
