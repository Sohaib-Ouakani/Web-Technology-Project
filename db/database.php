<?php
class DatabaseHelper
{
    private $db;

    public function __construct(
        $servername,
        $username,
        $password,
        $dbname,
        $port,
    ) {
        $this->db = new mysqli(
            $servername,
            $username,
            $password,
            $dbname,
            $port,
        );
        if ($this->db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    }

    public function getMenuItems() {
        $stmt = $this->db->prepare("SELECT * FROM DISH");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function resetTables(){
        // Clear existing data (optional - remove if you want to keep existing data)
        $this->db->query("DELETE FROM FOOD_ORDER");
        $this->db->query("DELETE FROM CLIENT");
        $this->db->query("DELETE FROM DISH");
        
        // Insert sample clients
        $clients = [
            ['C0001', 'John', 'Smith'],
            ['C0002', 'Maria', 'Garcia'],
            ['C0003', 'James', 'Johnson'],
            ['C0004', 'Emma', 'Williams'],
            ['C0005', 'Oliver', 'Brown']
        ];
        
        $stmt = $this->db->prepare("INSERT INTO CLIENT (ID, Name, Surname) VALUES (?, ?, ?)");
        foreach ($clients as $client) {
            $stmt->bind_param("sss", $client[0], $client[1], $client[2]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample dishes
        $dishes = [
            ['D0001', 'Pizza', 'Margherita'],
            ['D0002', 'Pasta', 'Carbonara'],
            ['D0003', 'Salad', 'Caesar'],
            ['D0004', 'Burger', 'Cheese'],
            ['D0005', 'Soup', 'Tomato']
        ];
        
        $stmt = $this->db->prepare("INSERT INTO DISH (ID, Name, Description) VALUES (?, ?, ?)");
        foreach ($dishes as $dish) {
            $stmt->bind_param("sss", $dish[0], $dish[1], $dish[2]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample orders
        $orders = [
            ['D0001', 'C0001', '2025-12-20'],
            ['D0002', 'C0001', '2025-12-21'],
            ['D0001', 'C0002', '2025-12-22'],
            ['D0003', 'C0003', '2025-12-23'],
            ['D0004', 'C0004', '2025-12-24'],
            ['D0005', 'C0005', '2025-12-25'],
            ['D0002', 'C0002', '2025-12-26'],
            ['D0003', 'C0001', '2025-12-27']
        ];
        
        $stmt = $this->db->prepare("INSERT INTO FOOD_ORDER (DISH_ID, USER_ID, OrderDate) VALUES (?, ?, ?)");
        foreach ($orders as $order) {
            $stmt->bind_param("sss", $order[0], $order[1], $order[2]);
            $stmt->execute();
        }
        $stmt->close();
        
        echo "Database filled successfully with sample data!\n";
    }
}
?>
