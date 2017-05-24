<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/styles.css">
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="js/validate.js"></script>
        
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="">
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <form action="results.php" method="post" id="payroll-form">
                    <div class="col-xs-12 form-group">
                       <label for="emp-id">Employee ID (must be 10 characters)</label>
                       <input type="text" name="emp-id" id="emp-id" class="form-control">
                       <div class="alert alert-danger">
                           <strong>Error: </strong><span id="emp-id-error"></span>
                       </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="pay-type">Payroll Type</label>
                        <select name="pay-type" id="pay-type" class="form-control">
                            <option>Hourly</option>
                            <option>Salary</option>
                        </select>
                        <div class="alert alert-danger">
                            <strong>Error: </strong><span id="pay-type-error"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="hours">Hours</label>
                        <input type="text" name="hours" id="hours" class="form-control">
                        <div class="alert alert-danger">
                            <strong>Error: </strong><span id="hours-error"></span>
                        </div>
                    </div>
                    <div class="col-xs-12 form-group">
                        <label for="payrate">Rate</label>
                        <input type="text" name="payrate" id="payrate" class="form-control">
                        <div class="alert alert-danger">
                            <strong>Error: </strong><span id="payrate-error"></span>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <input type="submit" value="Enter Payroll!" class="btn btn-primary">
                    </div>   
                </form>
            </div>
        </div>
    </body>
</html>















