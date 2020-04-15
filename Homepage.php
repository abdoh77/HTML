
<!DOCTYPE html>
<html>
<body background="Homepage.jpg">
	<form action="summary.php"method="post">
<style> 
table tr:not(:first-child){
                cursor: pointer;transition: all .25s ease-in-out;
            }
            table tr:not(:first-child):hover{background-color: #ddd;}

	table, th, td {
    border: 1px solid black;
}
	.headcenter{text-align:center}


 .search {
		width: 300px;  height: 10000em;
	
		margin-left: 40%



    
</style>
<body>
<h1 class="headcenter">CREATE YOUR OWN BURGER</h1>

<h2 class="headcenter">BUNS</h2>

<table id="buns" class="display" style="width:100%">
  <tr>
    <th>Bun Name</th>
    <th>Description</th> 
    <th>Price</th>
    <th>Check</th>
  </tr>
  <tr>
    <td> Sesame Bun </td> 
    <td> homemade burger buns, no ordinary, roll baked, from quality ingredients
golden, soft and oh-so-tasty! </td>
    <td>$1.00</td>
   <td><input type="checkbox" value="Sesame Bun"  name="checkbox1"/></td>
  
<tr>
    <td> Kaiser Rol </td>
    <td> hard roll, is a typically crusty round bread roll, originally from Austria.</td>
    <td>$1.00</td> <td><input type="checkbox" value="Kaiser Rol" name="checkbox2"/>
    </td>
  
  <tr>
    <td> Gluten-free bun </td>
    <td> Gluten-free dinner rolls that taste like homemade regular (gluten-full) rolls.</td>
    <td>$1.50 </td> 
    <td><input type="checkbox" value="Gluten-free bun"name="checkbox3"/>
    </td>
 
    <tr>
    <td> lettuce wrap </td>
    <td>  4 slices of thick iceberg lettuce, 1 tomato slice from the centre of a large tomato, 1 onion slice about the same size as the tomato slice.</td>
    <td>$0.50 </td> 
    <td><input type="checkbox" value="lettuce wrap"name="checkbox5"/>
    </td>
    
    

</table>
</body>


<body>

 <h3 class="headcenter">Patties</h3>
 <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Description</th> 
    <th>Price</th>
    <th>Check</th>
  </tr>

<tr>
    <th>Buffalo</th>
    <th>Ground buffalo has fewer calories and half the fat of lean beef but boasts big meaty flavor</th> 
    <th>$5.00</th>
    <th><input type="checkbox" value="Buffalo"name="checkbox6"/>
    </th>
    
  <tr>
    <th>Beef</th>
    <th>Sprinkle the ground beef evenly with 1/2 teaspoon salt in a large bowl</th> 
    <th>$4.00</th>
    <th><input type="checkbox" value="Beef"name="checkbox7"/></th>
     
     
   <tr>
    <th>Turkey</th>
    <th>Combine ground turkey, breadcrumbs, almonds, chili paste, garlic, ginger, salt, garam masala, lemon juice, yogurt.</th> 
    <th>$4.00</th>
    <th><input type="checkbox" value="Turkey"name="checkbox8"/></th>
    
  <tr>
    <th>Veggie</th>
    <th>spiced up with chili sauce, cumin, garlic and chili powder. A tasty alternative to the frozen kind.</th> 
    <th>$3.50</th>
    <th><input type="checkbox" value="Veggie"name="checkbox9"/></th>
</table>

</body>

<body>
 <h3 class="headcenter">Cheese</h3>
 <table style="width:100%">
 
  <tr>
 <th>Name</th>
    <th>Price</th>
    <th>Check</th>
    
     <tr>
     <th>Cheddar</th>
    <th>$1.00</th>
    <th><input type="checkbox" value="Cheddar"name="checkbox11"/></th>
    
     <tr>
    <th>American</th>
    <th>$0.75</th>
    <th><input type="checkbox" value="American"name="checkbox12"/></th>
    
     <tr>
    <th>Swiss</th>
    <th>$1.00</th>
    <th><input type="checkbox" value="Veggie"name="checkbox13"/></th>
    
     <tr>
    <th>Vegan Cheddar</th>
    <th>$1.50</th>
    <th><input type="checkbox" value="Vegan Cheddar"name="checkbox14"/></th>  

</table>
</body>

<body>
 <h4 class="headcenter">Extra</h4>
 <table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Check</th>
  
  
   <tr>
    <th>Mayo</th>
    <th>$0.50</th>
    <th><input type="checkbox" value="Mayo"name="checkbox15"/></th>
  
   <tr>
    <th>Ketchup</th>
    <th>$0.25</th>
    <th><input type="checkbox" value="Ketchup"name="checkbox16"/></th>
 
  
   <tr>
    <th>Mustard</th>
    <th>$0.25</th>
    <th><input type="checkbox" value="Mustard"name="checkbox17"/></th>
 
  
   <tr>
    <th>Egg</th>
    <th>$1.00</th>
    <th><input type="checkbox" value="Egg"name="checkbox18"/></th>

  
   <tr>
    <th>Bacon</th>
    <th>$1.00</th>
    <th><input type="checkbox" value="Bacon"name="checkbox19"/></th>
  
  
 <tr>
    <th>Tomato</th>
    <th>$0.50</th>
    <th><input type="checkbox" value="Tomato"name="checkbox20"/></th>
  
  
   <tr>
    <th>lettuce</th>
    <th>$0.10</th>
    <th><input type="checkbox" value="lettuce"name="checkbox21"/></th>
  
  
   <tr>
    <th>Pickle</th>
    <th>$0.50</th>
    <th><input type="checkbox" value="Pickle"name="checkbox22"/></th>
 
  
   <tr>
    <th>Onion</th>
    <th>$0.50</th>
    <th><input type="checkbox" value="Onion"name="checkbox23"/></th>
 
  
   <tr>
    <th>Mushroom</th>
    <th>$0.25</th>
    <th><input type="checkbox" value="Mushroom"name="checkbox24"/></th>


</table>
</body>
    
<input type="submit" id="search" value="Order" class="search" />


    
    
</form>
</body>    
</html>


