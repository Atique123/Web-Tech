<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Ava's Sandwich Shop</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<!-- BEGIN FOXYCART FILES -->
    <script src="https://css-tricks.foxycart.com/files/foxycart_includes.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="https://css-tricks.foxycart.com/files/foxybox.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="https://css-tricks.foxycart.com/themes/standard/theme.foxybox.css" type="text/css" media="screen" charset="utf-8" />
    <!-- END FOXYCART FILES -->

    
	<script type='text/javascript' src='js/order.js'></script>
</head>

<body>
    
    <div id="page-wrap">
    
        <h1>Ava's Sandwich Shop</h1>
    
    	<table id="order-table">
    	    <tr>
    	         <th>Sandwiches</th> 
    	         <th>Quantity</th>
    	         <th>X</th>
    	         <th>Unit Price</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    	    </tr>
            <tr class="odd">
                <td class="product-title">The Classic - <em>Slices of your choice of meat* with lettuce, tomato, and cheese</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="sparkle-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>4.75</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="sparkle-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Croissant Sandwich - <em>Slices of your choice of meat* with lettuce, tomato, and cheese on a croissant</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mvp-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>5.50</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mvp-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Veggie Wrap - <em>Lettuce, tomato, peppers, olives, and cheese in an oversized tortilla wrap</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>4.50</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-row-total" disabled="disabled"></input></td>
            </tr>
            <tr>
    	         <th>Salads</th> 
    	         <th>Quantity</th>
    	         <th>X</th>
    	         <th>Unit Price</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    	    </tr>
            <tr class="even">
                <td class="product-title">Ceasar Salad - <em>A classic salad with Ranch dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>2.50</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Grilled Chicken Salad - <em>Strips of grilled chicken on top of salad with Ranch dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-quick-dry-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>3.25</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-quick-dry-row-total" disabled="disabled"></input></td>
            </tr>
            <tr>
    	         <th>Beverages</th> 
    	         <th>Quantity</th>
    	         <th>X</th>
    	         <th>Unit Price</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    	    </tr>
            <tr class="even">
                <td class="product-title">Lemonade, Tea, Juices, and Soda</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mound-clay-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>1.75</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mound-clay-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr>
    	         <th>Deserts</th> 
    	         <th>Quantity</th>
    	         <th>X</th>
    	         <th>Unit Price</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    	    </tr>
            <tr class="odd">
                <td class="product-title">Sundae - <em>Vanilla ice-cream with chocolate syrup and a cherry</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-red-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>1.50</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Brownie Sundae- <em>Vanilla ice-cream with chocolate syrup and a cherry on top of a warm brownie</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-drying-agent-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>2.25</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-drying-agent-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Freshly Baked Pie - <em>A slice of warm pie. Flavors include cherry, blueberry, and apple.</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>1.75</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: right;">
                    Product SUBTOTAL: <input type="text" class="total-box" value="$0" id="product-subtotal" disabled="disabled"></input>
                </td>
            </tr>
    	</table>
    	
    	<table id="shipping-table">
    	
    	 <tr>
    	     <th>Total Qty.</th>
    	     <th>X</th>
    	     <th>Shipping Rate</th>
    	     <th>=</th>
    	     <th style="text-align: right;">Shipping Total</th>
    	 </tr>
    	 
    	 <tr>
    	     <td id="total-pallets"><input id="total-pallets-input" value="0" type="text" disabled="disabled"></input></td>
    	     <td>X</td>
    	     <td id="shipping-rate">10.00</td>
    	     <td>=</td>
    	     <td style="text-align: right;"><input type="text" class="total-box" value="$0" id="shipping-subtotal" disabled="disabled"></input></td>
    	 </tr>
    	
    	</table>
    	
    	<div class="clear"></div>
    	
        <div style="text-align: right;">
            <span>ORDER TOTAL: </span> 
            <input type="text" class="total-box" value="$0" id="order-total" disabled="disabled"></input>
            
            <br />
            
            <form class="foxycart" action="https://css-tricks.foxycart.com/cart" method="post" accept-charset="utf-8" id="foxycart-order-form">
                
                <input type="hidden" name="name" value="Multi Product Order" />
                <input type="hidden" id="fc-price" name="price" value="0" />

                <input type="submit" value="Submit Order" class="submit" />
                
            </form>
        </div>
        
    </div>

</body>

</html>
