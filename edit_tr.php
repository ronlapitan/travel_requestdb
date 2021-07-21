<?php

include 'header.php';

if (isset($_SESSION['admin']) || (isset($_SESSION['super_user']))) {

    if (isset($_GET['travel_id'])) {

    $travel_id = $_GET['travel_id'];

    $edit = DB::query("SELECT 
                            *
                        FROM 
                            travel_tbl
                        WHERE 
                            id = %i", $travel_id);

                foreach ($edit as $row) {

                    echo '    <div class="col-md-2">
                </div>

                    <div class="col-md-8">

                       <h1 align="center">Edit Travel Request Form</h1><hr><br>

                          

                        <form action="submit_edit_tr.php" method="post" id="edit_travelform">

                            <div class="row">

                                <div class="col-md-2">
                                </div>

                                    <div class="col-md-8">

                                        <input class="hidden" type="text" value="'.$row['id'].'" name="id">
                                                        
                                        <div class="form-group">
                                            <label>Name:</label>
                                                <input type="text" name="name" class="form-control" value="'.$row['name'].'">
                                                
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Designation:</label>
                                                <input type="text" name="designation" class="form-control" value="'.$row['designation'].'">
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <div class="calendar">
                                                <label>Date of Travel:</label>
                                                    <div class="input-group date" id="datetimepicker1">
                                                        <input type="text" class="form-control" name="start_date" value="'.$row['start_date'].'"/>  
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                    </div>                                                              
                                            </div>  
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>More than a day?</label>
                                                <select class="form-control" id="sel2">
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>                            
                                                </select>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <div class="sel2_hide" id="calendarHide">
                                                <div class="calendar">
                                                    <label>End Date:</label>
                                                            <div class="input-group date" id="datetimepicker2" >
                                                                <input type="text" class="form-control" name="end_date" id="" value="'.$row['end_date'].'"/>  
                                                                    <span class="input-group-addon">
                                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                            </div> 
                                                            <br>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Destination:</label>
                                                <input type="text" name="destination" class="form-control" value="'.$row['destination'].'" required>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Purpose of Travel:</label>
                                                <textarea class="form-control" name="purpose" required>'.$row['purpose'].'</textarea>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Sources of Fund:</label>
                                                <input type="text" name="fund" class="form-control" value="'.$row['fund'].'" required>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label>Transportation:</label>
                                                <select class="form-control" name="transportation">
                                                    <option value="UPLB Vehicle">UPLB Vehicle</option>
                                                    <option value="Private Vehicle">Private Vehicle</option>
                                                    <option value="Public Conveyance">Public Conveyance</option>
                                                    <option value="Hired Vehicle">Hired Vehicle</option>                            
                                                </select>
                                        </div>
                                        <br>


                                                <div class="pull-left">
                                                        <button type="reset" class="btn btn-danger custom">Clear</button>
                                                </div>

                                                <div class="pull-right">
                                                        <button type="submit" class="btn btn-primary custom">Submit</button>
                                                </div><br>

                                                <!-- Successful Entry to DB -->
                                                <span id="edit_message"></span>

                                    </div>

                                <div class="col-md-2">
                                </div>

                            </div>

                        </form>

                           

                    </div>

                <div class="col-md-2">
                </div>';
                }
            }
}

else {

    header('location: ./index.php');
}


include 'footer.php';

?>