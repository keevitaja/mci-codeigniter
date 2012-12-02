<!DOCTYPE html>
<html lang="<?php echo $i18n; ?>">
  <head>
    <meta charset=utf-8>
    <title>Multilingual CI example</title>
    <style>
      a {
        color:blue;
        text-decoration:none;
      }
      
      a:hover {
        text-decoration:underline;
      }
      
      body {
        margin:0;
        font:12px Verdana;
      }
      
      header {
        padding:30px 0;
        background-color:#d9d9d9;
      }
      
      nav {
        margin-left:30px;
      }
      
      nav span {
        margin-left:10px;
      }
      
      p {
        margin:20px 0 0 30px;
      }
      
      footer {
        margin-top:50px;
        padding-left:30px;
      }
    </style>
  </head>
  <body>
    <header>
      <?php echo langbar(); ?>
    </header>
    
    <p><?php echo lang($content); ?></p>
    <p><?php echo lanchor($uri, lang('mci_click')); ?>
		<p><?php echo anchor(lchange('en')); ?></p>
    
    <footer>
      <?php echo lang('mci_footer'); ?>
    </footer>
  </body>
</html>