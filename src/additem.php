<html>
<head>
<title>WeBringYouGaming - LocalShops Shop Editor</title>
</head>
<body>
<center><h2>WeBringYouGaming - Shop Editor</h2><br />
<form method="post" action="shops/generator2.php">
<label for="shop">Shop UUID (file name excluding .shop):</label> <br /><input type="text" name="shop" id="shop"><br /><br />
<label for="item">Item:</label><br />
<select name="item">
<option selected>Choose an item</option>
<option value="0\:0">Air</option>
<option value="1\:0">Stone</option>
<option value="2\:0">Grass</option>
<option value="3\:0">Dirt</option>
<option value="4\:0">Cobblestone</option>
<option value="5\:0">Wooden Plank</option>
<option value="6\:0">Sapling</option>
<option value="6\:1">Redwood Sapling</option>
<option value="6\:2">Birch Sapling</option>
<option value="7\:0">Bedrock</option>
<option value="8\:0">Water</option>
<option value="9\:0">Stationary Water</option>
<option value="10\:0">Lava</option>
<option value="11\:0">Stationary Lava</option>
<option value="12\:0">Sand</option>
<option value="13\:0">Gravel</option>
<option value="14\:0">Gold Ore</option>
<option value="15\:0">Iron Ore</option>
<option value="16\:0">Coal Ore</option>
<option value="17\:0">Wood</option>
<option value="17\:1">Redwood</option>
<option value="17\:2">Birchwood</option>
<option value="18\:0">Leaves</option>
<option value="18\:1">Redwood Leaves</option>
<option value="18\:2">Birchwood Leaves</option>
<option value="19\:0">Sponge</option>
<option value="20\:0">Glass</option>
<option value="21\:0">Lapis Lazuli Ore</option>
<option value="22\:0">Lapis Lazuli Block</option>
<option value="23\:0">Dispenser</option>
<option value="24\:0">Sandstone</option>
<option value="25\:0">Note Block</option>
<option value="26\:0">Bed Block</option>
<option value="27\:0">Powered Rail</option>
<option value="28\:0">Detector Rail</option>
<option value="30\:0">Web</option>
<option value="35\:0">White Wool</option>
<option value="35\:1">Orange Wool</option>
<option value="35\:2">Magenta Wool</option>
<option value="35\:3">Light Blue Wool</option>
<option value="35\:4">Yellow Wool</option>
<option value="35\:5">Light Green Wool</option>
<option value="35\:6">Pink Wool</option>
<option value="35\:7">Gray Wool</option>
<option value="35\:8">Light Gray Wool</option>
<option value="35\:9">Cyan Wool</option>
<option value="35\:10">Purple Wool</option>
<option value="35\:11">Blue Wool</option>
<option value="35\:12">Brown Wool</option>
<option value="35\:13">Dark Green Wool</option>
<option value="35\:14">Red Wool</option>
<option value="35\:15">Black Wool</option>
<option value="37\:0">Yellow Flower</option>
<option value="38\:0">Red Rose</option>
<option value="39\:0">Brown Mushroom</option>
<option value="40\:0">Red Mushroom</option>
<option value="41\:0">Gold Block</option>
<option value="42\:0">Iron Block</option>
<option value="43\:0">Double Stone Slab</option>
<option value="43\:1">Double Sandstone Slab</option>
<option value="43\:2">Double Wooden Slab</option>
<option value="43\:3">Double Cobblestone Slab</option>
<option value="44\:0">Stone Slab</option>
<option value="44\:1">Sandstone Slab</option>
<option value="44\:2">Wooden Slab</option>
<option value="44\:3">Cobblestone Slab</option>
<option value="45\:0">Brick</option>
<option value="46\:0">TNT</option>
<option value="47\:0">Bookshelf</option>
<option value="48\:0">Mossy Cobblestone</option>
<option value="49\:0">Obsidian</option>
<option value="50\:0">Torch</option>
<option value="51\:0">Fire</option>
<option value="52\:0">Monster Spawner</option>
<option value="53\:0">Wooden Stairs</option>
<option value="54\:0">Chest</option>
<option value="55\:0">Redstone Wire</option>
<option value="56\:0">Diamond Ore</option>
<option value="57\:0">Diamond Block</option>
<option value="58\:0">Workbench</option>
<option value="59\:0">Crops</option>
<option value="60\:0">Soil</option>
<option value="61\:0">Furnace</option>
<option value="62\:0">Burning Furnace</option>
<option value="63\:0">Sign Post</option>
<option value="64\:0">Wooden Door</option>
<option value="65\:0">Ladder</option>
<option value="66\:0">Rails</option>
<option value="67\:0">Cobblestone Stairs</option>
<option value="68\:0">Wall Sign</option>
<option value="69\:0">Lever</option>
<option value="70\:0">Stone Pressure Plate</option>
<option value="71\:0">Iron Door</option>
<option value="72\:0">Wooden Pressure Plate</option>
<option value="73\:0">Redstone Ore</option>
<option value="74\:0">Glowing Redstone Ore</option>
<option value="75\:0">Redstone Torch</option>
<option value="76\:0">Redstone Torch</option>
<option value="77\:0">Stone Button</option>
<option value="78\:0">Snow</option>
<option value="79\:0">Ice</option>
<option value="80\:0">Snow Block</option>
<option value="81\:0">Cactus</option>
<option value="82\:0">Clay</option>
<option value="83\:0">Sugar Cane</option>
<option value="84\:0">Jukebox</option>
<option value="85\:0">Fence</option>
<option value="86\:0">Pumpkin</option>
<option value="87\:0">Netherrack</option>
<option value="88\:0">Soul Sand</option>
<option value="89\:0">Glowstone</option>
<option value="90\:0">Portal</option>
<option value="91\:0">Jack</option>
<option value="92\:0">Cake Block</option>
<option value="93\:0">Redstone Repeater Block</option>
<option value="94\:0">Redstone Repeater Block</option>
<option value="95\:0">Locked Chest</option>
<option value="256\:0">Iron Shovel</option>
<option value="257\:0">Iron Pickaxe</option>
<option value="258\:0">Iron Axe</option>
<option value="259\:0">Flint and Steel</option>
<option value="260\:0">Apple</option>
<option value="261\:0">Bow</option>
<option value="262\:0">Arrow</option>
<option value="263\:0">Coal</option>
<option value="263\:1">Charcoal</option>
<option value="264\:0">Diamond</option>
<option value="265\:0">Iron Ingot</option>
<option value="266\:0">Gold Ingot</option>
<option value="267\:0">Iron Sword</option>
<option value="268\:0">Wooden Sword</option>
<option value="269\:0">Wooden Shovel</option>
<option value="270\:0">Wooden Pickaxe</option>
<option value="271\:0">Wooden Axe</option>
<option value="272\:0">Stone Sword</option>
<option value="273\:0">Stone Shovel</option>
<option value="274\:0">Stone Pickaxe</option>
<option value="275\:0">Stone Axe</option>
<option value="276\:0">Diamond Sword</option>
<option value="277\:0">Diamond Shovel</option>
<option value="278\:0">Diamond Pickaxe</option>
<option value="279\:0">Diamond Axe</option>
<option value="280\:0">Stick</option>
<option value="281\:0">Bowl</option>
<option value="282\:0">Mushroom Soup</option>
<option value="283\:0">Gold Sword</option>
<option value="284\:0">Gold Shovel</option>
<option value="285\:0">Gold Pickaxe</option>
<option value="286\:0">Gold Axe</option>
<option value="287\:0">String</option>
<option value="288\:0">Feather</option>
<option value="289\:0">Sulphur</option>
<option value="290\:0">Wooden Hoe</option>
<option value="291\:0">Stone Hoe</option>
<option value="292\:0">Iron Hoe</option>
<option value="293\:0">Diamond Hoe</option>
<option value="294\:0">Gold Hoe</option>
<option value="295\:0">Seeds</option>
<option value="296\:0">Wheat</option>
<option value="297\:0">Bread</option>
<option value="298\:0">Leather Helmet</option>
<option value="299\:0">Leather Chestplate</option>
<option value="300\:0">Leather Leggings</option>
<option value="301\:0">Leather Boots</option>
<option value="302\:0">Chainmail Helmet</option>
<option value="303\:0">Chainmail Chestplate</option>
<option value="304\:0">Chainmail Leggings</option>
<option value="305\:0">Chainmail Boots</option>
<option value="306\:0">Iron Helmet</option>
<option value="307\:0">Iron Chestplate</option>
<option value="308\:0">Iron Leggings</option>
<option value="309\:0">Iron Boots</option>
<option value="310\:0">Diamond Helmet</option>
<option value="311\:0">Diamond Chestplate</option>
<option value="312\:0">Diamond Leggings</option>
<option value="313\:0">Diamond Boots</option>
<option value="314\:0">Gold Helmet</option>
<option value="315\:0">Gold Chestplate</option>
<option value="316\:0">Gold Leggings</option>
<option value="317\:0">Gold Boots</option>
<option value="318\:0">Flint</option>
<option value="319\:0">Raw Porkchop</option>
<option value="320\:0">Cooked Porkchop</option>
<option value="321\:0">Painting</option>
<option value="322\:0">Golden Apple</option>
<option value="323\:0">Sign</option>
<option value="324\:0">Wooden Door</option>
<option value="325\:0">Bucket</option>
<option value="326\:0">Water Bucket</option>
<option value="327\:0">Lava Bucket</option>
<option value="328\:0">Minecart</option>
<option value="329\:0">Saddle</option>
<option value="330\:0">Iron Door</option>
<option value="331\:0">Redstone</option>
<option value="332\:0">Snowball</option>
<option value="333\:0">Boat</option>
<option value="334\:0">Leather</option>
<option value="335\:0">Milk Bucket</option>
<option value="336\:0">Clay Brick</option>
<option value="337\:0">Clay Balls</option>
<option value="338\:0">Sugarcane</option>
<option value="339\:0">Paper</option>
<option value="340\:0">Book</option>
<option value="341\:0">Slimeball</option>
<option value="342\:0">Storage Minecart</option>
<option value="343\:0">Powered Minecart</option>
<option value="344\:0">Egg</option>
<option value="345\:0">Compass</option>
<option value="346\:0">Fishing Rod</option>
<option value="347\:0">Clock</option>
<option value="348\:0">Glowstone Dust</option>
<option value="349\:0">Raw Fish</option>
<option value="350\:0">Cooked Fish</option>
<option value="351\:0">Ink Sack</option>
<option value="351\:1">Rose Red</option>
<option value="351\:2">Cactus Green</option>
<option value="351\:3">Coco Beans</option>
<option value="351\:4">Lapis Lazuli</option>
<option value="351\:5">Purple Dye</option>
<option value="351\:6">Cyan Dye</option>
<option value="351\:7">Light Gray Dye</option>
<option value="351\:8">Gray Dye</option>
<option value="351\:9">Pink Dye</option>
<option value="351\:10">Lime Dye</option>
<option value="351\:11">Dandelion Yellow</option>
<option value="351\:12">Light Blue Dye</option>
<option value="351\:13">Magenta Dye</option>
<option value="351\:14">Orange Dye</option>
<option value="351\:15">Bone Meal</option>
<option value="352\:0">Bone</option>
<option value="353\:0">Sugar</option>
<option value="354\:0">Cake</option>
<option value="355\:0">Bed</option>
<option value="356\:0">Redstone Repeater</option>
<option value="357\:0">Cookie</option>
<option value="2256\:0">Gold Music Disc</option>
<option value="2257\:0">Green Music Disc</option>
</select><br /><br /><br />
<label for="buyprice">Buy Price:<br /><input type="text" name="buyprice" id="buyprice"><br />
<label for="bundlebuy">Bundle Size:<br /><input type="text" name="bundlebuy" id="bundlebuy"><br /><br /><br />
<label for="sellprice">Sell Price:<br /><input type="text" name="sellprice" id="sellprice"><br />
<label for="bundlesell">Bundle Size:<br /><input type="text" name="bundlesell" id="bundlesell"><br /><br /><br />
<label for="stock">Stock: <br /><input type="text" name="stock" id="stock"><br />
<input type="Submit" value="Add Item"></form><br /><br />
<h4>LocalShops Shop Suite (c) iffa 2011 - LocalShops made by Mineral, cereal and Jonbas</h4></center>
</body>
</html>
