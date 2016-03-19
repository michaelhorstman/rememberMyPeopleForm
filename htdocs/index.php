
<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">

  <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"

        data-image="http://pixel.nymag.com/imgs/daily/science/2014/11/13/13-memory.w750.h560.2x.jpg"

        data-amount="1200"

        data-name="Remember My People"
        data-description="RMP Monthly subscription"
        data-label="Sign Me Up!" 
        data-billing-address="true"
        >

  </script>
</form>