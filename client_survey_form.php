<?php include 'header.php'; ?>

    <div class="col-md-2">
    </div>

        <div class="col-md-8">

           <h1 align="center">Create Client Survey</h1><hr><br>

              

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="researchform">

                <div class="row">

                    <div class="col-md-2">
                    </div>

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Service Title:</label>
                                    <input type="text" name="title" class="form-control" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Service Description:</label>
                                    <input type="text" name="origin" class="form-control" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Visitor's Name:</label>
                                    <input type="text" name="name" class="form-control" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="calendar">
                                    <label>Date of Visit:</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="text" class="form-control" name="start_date"/>  
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>                                                              
                                </div>  
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Position:</label>
                                    <input type="text" name="position" class="form-control" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Company / Unit / Organization:</label>
                                    <input type="text" name="organization" class="form-control" required>
                            </div>
                            <br>

                            <div class="form-group">
                                <label>How satisfied are you with the quality of delivery of service/s you received?</label>
                                    <select class="form-control" name="service_delivery">
                                        <option value="Poor">Poor</option>
                                        <option value="Fair">Fair</option>
                                        <option value="Good">Good</option>
                                        <option value="Very Good">Very Good</option>
                                        <option value="Excellent">Excellent</option>
                                                                    
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
                                    <span id="research_message"></span>

                        </div>

                    <div class="col-md-2">
                    </div>

                </div>

            </form>

               

        </div>

    <div class="col-md-2">
    </div>



<?php include 'footer.php'; ?>