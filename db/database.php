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

    public function checkLogin($username, $password) {
        $query = "SELECT id, username, name, surname, isadmin FROM CLIENT WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    } 

    public function getFoodOrderByClientId($clientid) {
        $query = "SELECT name, description, imagepath, orderdate, iscomplete FROM FOOD_ORDER JOIN DISH ON dish_id = id WHERE user_id = ? ORDER BY iscomplete";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $clientid);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function resetTables(){
        // Clear existing data
        $this->db->query("DELETE FROM FOOD_ORDER");
        $this->db->query("DELETE FROM CLIENT");
        $this->db->query("DELETE FROM DISH");
        
        // Insert sample clients
        $clients = [
            ['C0001', 'John', 'Smith', 'jsmith', 'pass123', 0],
            ['C0002', 'Maria', 'Garcia', 'mgarcia', 'pass456', 0],
            ['C0003', 'David', 'Chen', 'dchen', 'pass789', 0],
            ['C0004', 'Emma', 'Johnson', 'ejohnson', 'pass321', 0],
            ['C0005', 'Admin', 'User', 'admin', 'admin123', 1],
            ['C0006', 'Lisa', 'Brown', 'lbrown', 'pass654', 0],
            ['C0007', 'Marco', 'Rossi', 'mrossi', 'pass987', 0],
            ['C0008', 'Sophie', 'Martin', 'smartin', 'pass147', 0]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO CLIENT (ID, Name, Surname, Username, Password, IsAdmin) VALUES (?, ?, ?, ?, ?, ?)");
        foreach ($clients as $client) {
            $stmt->bind_param("sssssi", $client[0], $client[1], $client[2], $client[3], $client[4], $client[5]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample dishes
        $dishes = [
            ['D0001', 'Margherita', 'Classic', 'margherita.jpeg', 0],
            ['D0002', 'Carbonara', 'Creamy', 'carbonara.jpg', 0],
            ['D0003', 'Lasagna', 'Layered', 'lasagna.jpeg', 0],
            ['D0004', 'Tiramisu', 'Dessert', 'tiramisu.webp', 0],
            ['D0005', 'Risotto', 'Seafood', 'risotto.jpg', 1],
            ['D0006', 'Bruschetta', 'Appetizer', 'bruschetta.webp', 0],
            ['D0007', 'Osso Buco', 'Special', 'ossobuco.jpg', 1],
            ['D0008', 'Panna Cotta', 'Dessert', 'pannacotta.webp', 0],
            ['D0009', 'Tortelli', 'Goated', 'tortelli.webp', 0],
            ['D0010', 'Saltimbocca', 'Veal dish', 'saltimbocca.jpg', 1]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO DISH (ID, Name, Description, ImagePath, Special) VALUES (?, ?, ?, ?, ?)");
        foreach ($dishes as $dish) {
            $stmt->bind_param("ssssi", $dish[0], $dish[1], $dish[2], $dish[3], $dish[4]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample orders
        $orders = [
            ['D0001', 'C0001', '2025-12-20 10:30:00', 1],
            ['D0002', 'C0001', '2025-12-10 14:15:00', 0],
            ['D0003', 'C0001', '2025-12-12 09:45:00', 1],
            ['D0004', 'C0001', '2025-12-30 16:20:00', 0],
            ['D0005', 'C0001', '2025-12-20 11:00:00', 1],
            ['D0006', 'C0001', '2025-12-20 11:30:00', 1],
            ['D0003', 'C0002', '2025-12-21 13:00:00', 1],
            ['D0004', 'C0002', '2025-12-23 12:45:00', 0],
            ['D0005', 'C0003', '2025-12-24 15:30:00', 0],
            ['D0006', 'C0003', '2025-12-25 18:00:00', 1],
            ['D0007', 'C0004', '2025-12-27 10:15:00', 0],
            ['D0008', 'C0006', '2025-12-20 14:30:00', 1],
            ['D0009', 'C0006', '2025-12-26 11:45:00', 0],
            ['D0010', 'C0007', '2025-12-25 19:30:00', 1],
            ['D0005', 'C0008', '2025-12-23 13:20:00', 1],
            ['D0006', 'C0008', '2025-12-27 16:00:00', 0]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO FOOD_ORDER (DISH_ID, USER_ID, OrderDate, IsComplete) VALUES (?, ?, ?, ?)");
        foreach ($orders as $order) {
            $stmt->bind_param("sssi", $order[0], $order[1], $order[2], $order[3]);
            $stmt->execute();
        }
        $stmt->close();
        
        echo "Database filled successfully with sample data!\n";
    }
}
?>
