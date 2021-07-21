<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

if (isset($_GET['offset']) && isset($_GET['limit'])){

    $limit = $_GET['limit'];
    $offset = $_GET['offset'];


        $checkdata = DB::query("SELECT
                                        *
                                FROM
                                        travel_tbl
                                WHERE 
                                        year(start_date) = YEAR(CURDATE())
                                ORDER BY
                                        start_date DESC LIMIT {$limit} OFFSET {$offset}"
                                );
        // var_dump($checkdata);
        // exit();

                    foreach ($checkdata as $row) {

                        echo    '<div id="database">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="head">Name</th>
                                                <th class="head">Designation</th>
                                                <th class="head">Start Date</th>
                                                <th class="head">End Date</th>
                                                <th class="head">Destination</th>
                                                <th class="head">Purpose of Travel</th>
                                                <th class="head">Source of Fund</th>
                                                <th class="head">Transportation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>'.$row['name'].'</td>
                                                <td>'.$row['designation'].'</td>
                                                <td>'.$row['start_date'].'</td>
                                                <td>'.$row['end_date'].'</td>
                                                <td>'.$row['destination'].'</td>
                                                <td>'.$row['purpose'].'</td>
                                                <td>'.$row['fund'].'</td>
                                                <td>'.$row['transportation'].'</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    ';

                            if (isset($_SESSION['admin'])) {

                            echo    '<div class="pull-left">
                                        <form action="delete_tr.php" method="post" class="delete_tr">
                                                <input type="hidden" value="'.intval($row['id']).'" name="delete_id">
                                                        <button class="btn btn-danger remove">
                                                            Delete
                                                        </button>
                                        </form>
                                    </div>
                                    <div class="pull-right">
                                        <a href="edit_tr.php?travel_id='.intval($row['id']).'">
                                            <button type="button" class="btn btn-info">
                                                Edit Item
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <hr>';


                        }
                    } 
                exit();

}
                                        
?>  