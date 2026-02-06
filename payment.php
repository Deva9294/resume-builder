<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
 "key": "YOUR_RAZORPAY_KEY",
 "amount": 500,
 "currency": "INR",
 "name": "Resume Builder",
 "handler": function (response){
   window.location = "success.php?pid="+response.razorpay_payment_id;
 }
};
new Razorpay(options).open();
</script>