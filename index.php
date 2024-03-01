<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.paypal.com/sdk/js?client-id=ASMhYt1MIP29iWzS9OZytmI5oJ-GfEdgFufYCVQpHChVi1ZpDZO1Iv0WpBdrj-mkq-bV7Z5HrT9FBLSh&currency=USD"></script>
</head>
<body>

<div id="paypal-button-container"></div>

<script>
    paypal.Buttons({
        style:{
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 250
                    }
                }]
            });

        },

        onApprove: function(data, actions){
            actions.order.capture().then(function(detalles){
                window.location.href="completado.html"
            });
        },




        onCancel: function(data){
            alert("pago cancelado");
            console.log(data);
        }
    }).render('#paypal-button-container');
</script>
    
</body>
</html>