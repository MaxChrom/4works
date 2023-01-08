<?php


require_once 'Product.php';
require_once 'Database.php';



class ProductList
{
    
    protected $table = 'products';
    protected $products = [];
    protected $database;
    private $dbConn;




    public function __construct()
    {
       
        $this->dbConn = new Database();
        $this->database = $this->dbConn->connection();
    }

    public function getAllProducts($user_id)
    {
        
        $stmt = $this->database->prepare("SELECT * FROM $this->table WHERE user_id = :user_id ORDER BY name ASC");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductById($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    public function createProduct(Product $product)
    {
        $sql = "INSERT INTO $this->table (name, description, price, user_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(1, $product->name);
        $stmt->bindValue(2, $product->description);
        $stmt->bindValue(3, $product->price);
        $stmt->bindValue(4, $product->user_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $stmt = $this->database->prepare("DELETE FROM $this->table WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function updateProduct($name, $price, $description, $id)  
    {
        $stmt = $this->database->prepare("UPDATE $this->table SET name = ?, price = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $price, $description, $id]);
    }

    public function seedDatabase($products)
    {
        foreach ($products as $product) {
            $sql = "INSERT INTO $this->table (name, description, price, user_id) VALUES (?, ?, ?, ?)";
            $stmt = $this->database->prepare($sql);
            $stmt->execute([$product['name'], $product['description'], $product['price'], $product['user_id']]);
        }
    }
}