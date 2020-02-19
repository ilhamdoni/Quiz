<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
</head>
<body>
<div align="center">
	<h1 align="center">Product</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($products as $product){
				$id = $product['serial'];
				$name = $product['name'];
				$price = $product['price'];
		?>
    	<tr>
        
            <td><b><?php echo $name; ?></b><br />
            		
                    Price:<big style="color:green">
                    Rp <?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Tambah keranjang');
					echo form_close();
					?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>
</body>
</html>
