<?php
class Product
{
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
// Create 8 Product objects
$products = array(
    new Product(1, "Apple", 100),
    new Product(2, "Orange", 200),
    new Product(3, "Banana", 300),
    new Product(4, "Grape", 400),
    new Product(5, "Strawberry", 500),
    new Product(6, "Blueberry", 600),
    new Product(7, "Raspberry", 700),
    new Product(8, "Blackberry", 800)
);
// Calculate the total price of all products
$total_price = 0;
foreach ($products as $product) {
    $total_price += $product->getPrice();
}
// Print the total price
echo "Total price: $total_price";
// Print the product information
echo "<ul>";
foreach ($products as $product) {
    echo "<li>{$product->getName()} ({$product->getPrice()})</li>";
}
echo "</ul>";
// Print the number of products
echo "Number of products: " . count($products);
