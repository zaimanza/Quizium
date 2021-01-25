<?php if (count($errors) > 0): ?>
  <div class="error">
    <?php foreach ($errors as $error): ?>
      <p><?php echo $error; ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
<html>
    <style>
        .error{
            color:red;
            text-align:center;
            font-weight:500;
        }
    </style>
</html>
