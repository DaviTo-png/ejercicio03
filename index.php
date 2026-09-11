<h2>Catálogo de productos</h2>
<?php
$productos=[
["nombre"=>"Laptop","precio"=>2500,"stock"=>5],
["nombre"=>"Mouse","precio"=>50,"stock"=>10],
["nombre"=>"Teclado","precio"=>120,"stock"=>0],
["nombre"=>"Monitor","precio"=>800,"stock"=>3]
];


$totalInventario=0;
echo "<table border='1'><tr><th>Producto</th><th>Precio</th><th>Stock</th><th>Estado</th></tr>";

foreach($productos as $p){
$estado=$p["stock"]>0?"Disponible":"Agotado";
if($p["stock"]>0){$totalInventario+=$p["precio"]*$p["stock"];}
echo "<tr><td>{$p["nombre"]}</td><td>{$p["precio"]}</td><td>{$p["stock"]}</td><td>$estado</td></tr>";
}
echo "</table>";
echo "Valor inventario disponible: S/ $totalInventario";
?>