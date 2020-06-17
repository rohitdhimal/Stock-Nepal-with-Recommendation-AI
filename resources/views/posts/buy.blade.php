<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut | StockNepal</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>




<!-- Buy Form -->

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card shadow">
                <div class="card-header text-center bg-dark font-weight-bold text-light">Secure Way to Pay </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col md-6">
                            <img src="/image/pay.png" class="w-100 " alt="">
                        </div>

                        <div class="col md-6">
                        
                            <p> <b> Price of this Image: </b> ${{$post->price}}</p>

                            <div id="paypal-button-container" class="mt-5"></div>
                    
                        </div>

                    </div>
                </div>
            </div>        
        </div>  
    </div>

</div>

<!-- End -->

<!-- Download -->

<!-- Return Home -->
<div class="container mt-3">
    <div class="card shadow">
        <div class="row justify-content-center">
            <a class="text-danger text-decoration-none font-weight-bold mr-4" href="{{ url('/') }}"> Return Home</a>
            <a class="text-danger text-decoration-none font-weight-bold" href="/p/{{$post->id}}"> Back to image info </a>
        </div>
    </div>
</div>




<script src="https://www.paypal.com/sdk/js?client-id=AUZuQg9nsIx0YnvP5V0emXG3zrACnnnqNeN-TmGDmyqPuu9SoJSV5tJtflc6BM-PGLS1GPdGd9N-Gk4z"> </script>
    
    <script>
    
        paypal.Buttons({
            createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                amount: {
                    value: {{$post->price}}
                }
                }]
            });
            },
            onApprove: function(data, actions) {
            // This function captures the funds from the transaction.


            return actions.order.capture().then(function(details) {
            //     // This function shows a transaction success message to your buyer.
            // console.log(details);
            alert('Transaction completed by'+ details.payer.name.given_name);
            window.location.replace("/p/checkout/download/{{$post->id}}");
            });

            }
        }).render('#paypal-button-container');
        
    </script>

</body>
</html>