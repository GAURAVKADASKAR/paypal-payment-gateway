<?php 
  


    include_once 'paypal_config.php';

   
    include_once 'dbcon.php'; 
?>
<html>
    <head>
        <title> Paypal Payment Gateway Integration in PHP </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="css/design.css">
    </head>
    <body>

        <div class="container">
            <h2 style="text-align: center; color: blue;">Paypal Payment Gateway Integration in PHP </h2>

            
            <form action="<?php echo PAYPAL_URL; ?>" method="post">

                <div class="col-md-4 column productbox">

                   
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

                    <input type="hidden" name="cmd" value="_xclick">

                    <input type="hidden" name="item_name" value="subscription">
                    <input type="hidden" name="item_number" value="1">
                    <input type="hidden" name="amount" value="10">
                    <input type="hidden" name="id" value="123"/>

                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">

                    <input type='hidden' name='cancel_return' value='<?php echo PAYPAL_CANCEL_URL; ?>'>
                    <input type='hidden' name='return' value='<?php echo PAYPAL_RETURN_URL; ?>'>

                   
                    <div class="productprice">
                        <div class="pull-right">

                     
                            <button type="submit" class="btn btn-primary btn-sm" name="submit" role="button">Buy Now</button>

                        </div>
                        
                    </div>
                </div>

            </form>
          
        </div>
       
    </body>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</html>