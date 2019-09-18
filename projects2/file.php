<?php 
    require_once("input.php");
	
	
?>

<html>
    <head>
        <title>Currency converter</title>
            <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>
    <div class="jumbotron">
        <div class="row">
            <!--div class='col-md-6'-->
                <!--creating card -->
                <div class="card"style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Currency Converter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT TO USD</h6>
                        <p class="card-text"> <!-- input takes here-->
                            <form action="" method="POST">
                                <label> Enter Ammount </label>
                                <input type='text' name="one" placeholder="Enter Ammount"> 
                                
                               <p> <br/><input type="submit" class='btn btn-success'name="convert1" value="convert" > </p>
                            </form>
                        </p>
                        
                      <?php  
                    
                      $input->input_for_USD(); 
                      
                      ?>
                    </div>
                </div>
            <!--/div-->
            <!--div class='col-md-1'-->
                <!--creating card -->
                <div class="card"style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Currency Converter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT TO JPY</h6>
                        <p class="card-text"> <!-- input takes here-->
                            <form action="" method="POST">
                                <label> Enter Ammount </label>
                                <input type='text' name="two" placeholder="Enter Ammount"> 
                                
                               <p> <br/><input type="submit" class='btn btn-success'name="convert2" value="convert" > </p>
                            </form>
                        </p>
                        <p class="alert alert-danger">
                      <?php $input->input_for_JPY(); ?>
                    </p>
                    </div>
                </div>
            <!--div-->

            <div class="card"style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Currency Converter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT TO GBP</h6>
                        <p class="card-text"> <!-- input takes here-->
                            <form action="" method="POST">
                                <label> Enter Ammount </label>
                                <input type='text' name="three" placeholder="Enter Ammount"> 
                                
                               <p> <br/><input type="submit" class='btn btn-success'name="convert3" value="convert" > </p>
                            </form>
                        </p>
                        <p class="alert alert-danger">
                        <?php $input->input_for_GBP(); ?>
                        </p>
                    </div>
                </div>
                <div class="card"style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Currency Converter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">BDT TO EUR</h6>
                        <p class="card-text"> <!-- input takes here-->
                            <form action="" method="POST">
                                <label> Enter Ammount </label>
                                <input type='text' name="four" placeholder="Enter Ammount"> 
                                
                               <p> <br/><input type="submit" class='btn btn-success'name="convert4" value="convert" > </p>
                            </form>
                        </p>
                        <p class="alert alert-danger">
                       <?php  $input->input_for_EUR(); ?>
                        </p>
                    </div>
                </div>
        </div>
    </div> 
    </body>

</html>

<?php 





?>