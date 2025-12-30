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

    public function getClients() {
        $stmt = $this->db->prepare("SELECT * FROM CLIENT");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdersForAdmin() {
        $query = "
            SELECT 
                FOOD_ORDER.id as orderid, 
                FOOD_ORDER.IsComplete as iscomplete, 
                FOOD_ORDER.OrderDate as orderdate,
                DISH.Name as dishname,
                DISH.ImagePath as dishimagepath,
                CLIENT.Name as clientname,
                CLIENT.Surname as clientsurname
            FROM 
                FOOD_ORDER 
                JOIN DISH ON FOOD_ORDER.DISH_ID = DISH.ID
                JOIN CLIENT ON FOOD_ORDER.USER_ID = CLIENT.ID
            ORDER BY FOOD_ORDER.iscomplete, FOOD_ORDER.orderdate DESC";

        $stmt = $this->db->prepare($query);
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
        $query = "
            SELECT 
                DISH.name as title, 
                DISH.description as description, 
                DISH.imagepath as image, 
                DATE_FORMAT(FOOD_ORDER.orderdate, '%Y-%m-%d %H:%i') as date,
                FOOD_ORDER.iscomplete as iscomplete, 
                FOOD_ORDER.id as orderid,
                DISH.id as dishid
            FROM FOOD_ORDER 
            JOIN DISH ON FOOD_ORDER.dish_id = DISH.id 
            WHERE 
                FOOD_ORDER.user_id = ? 
            ORDER BY FOOD_ORDER.iscomplete, FOOD_ORDER.orderdate DESC";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $clientid);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderByOrderIdAndClient($orderid, $clientid) {
        $query = "
            SELECT *
            FROM FOOD_ORDER
            WHERE 
                FOOD_ORDER.id = ? AND
                FOOD_ORDER.USER_ID = ?";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $orderid, $clientid);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertOrder($dishid, $userid, $orderdate){
        $query = "INSERT INTO FOOD_ORDER (dish_id, user_id, OrderDate, IsComplete) VALUES (?, ?, ?, false)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iis', $dishid, $userid, $orderdate);
        $stmt->execute();
        
        return $stmt->insert_id;
    }

    public function updateOrderOfUser($orderid, $dishid, $userid, $orderdate) {
        $query = "UPDATE FOOD_ORDER SET dish_id = ?, OrderDate = ? WHERE user_id = ? AND ID = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('isii', $dishid, $orderdate, $userid, $orderid);
        
        return $stmt->execute();
    }

    public function deleteOrderOfUser($orderid, $userid){
        $query = "DELETE FROM FOOD_ORDER WHERE ID = ? AND user_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii',$orderid, $userid);
        $stmt->execute();
        var_dump($stmt->error);
        return true;
    }

    public function registerNewUser($name, $surname, $username, $password) {
        $query = "INSERT INTO CLIENT (Name, Surname, Username, Password, IsAdmin) VALUES (?, ?, ?, ?, false)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssss', $name, $surname, $username, $password);
        return $stmt->execute();
    }

    public function resetTables(){
        // Clear existing data (order matters due to foreign keys)
        $this->db->query("DELETE FROM FOOD_ORDER");
        $this->db->query("DELETE FROM CLIENT");
        $this->db->query("DELETE FROM DISH");
        
        // Reset auto-increment counters
        $this->db->query("ALTER TABLE CLIENT AUTO_INCREMENT = 1");
        $this->db->query("ALTER TABLE DISH AUTO_INCREMENT = 1");
        $this->db->query("ALTER TABLE FOOD_ORDER AUTO_INCREMENT = 1");
        
        // Insert sample clients
        $clients = [
            ['John', 'Smith', 'jsmith', 'pass123', 0],
            ['Maria', 'Garcia', 'mgarcia', 'pass456', 0],
            ['David', 'Chen', 'dchen', 'pass789', 0],
            ['Emma', 'Johnson', 'ejohnson', 'pass321', 0],
            ['Admin', 'User', 'admin', 'admin123', 1],
            ['Lisa', 'Brown', 'lbrown', 'pass654', 0],
            ['Marco', 'Rossi', 'mrossi', 'pass987', 0],
            ['Sophie', 'Martin', 'smartin', 'pass147', 0]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO CLIENT (Name, Surname, Username, Password, IsAdmin) VALUES (?, ?, ?, ?, ?)");
        foreach ($clients as $client) {
            $stmt->bind_param("ssssi", $client[0], $client[1], $client[2], $client[3], $client[4]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample dishes
        $dishes = [
            ['Margherita', 'Classic', 'margherita.jpeg', 0],
            ['Carbonara', 'Creamy', 'carbonara.jpg', 0],
            ['Lasagna', 'Layered', 'lasagna.jpeg', 0],
            ['Tiramisu', 'Dessert', 'tiramisu.webp', 0],
            ['Risotto', 'Seafood', 'risotto.jpg', 1],
            ['Bruschetta', 'Appetizer', 'bruschetta.webp', 0],
            ['Osso Buco', 'Special', 'ossobuco.jpg', 1],
            ['Panna Cotta', 'Dessert', 'pannacotta.webp', 0],
            ['Tortelli', 'Goated', 'tortelli.webp', 0],
            ['Saltimbocca', 'Veal dish', 'saltimbocca.jpg', 1]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO DISH (Name, Description, ImagePath, Special) VALUES (?, ?, ?, ?)");
        foreach ($dishes as $dish) {
            $stmt->bind_param("sssi", $dish[0], $dish[1], $dish[2], $dish[3]);
            $stmt->execute();
        }
        $stmt->close();
        
        // Insert sample orders
        $orders = [
            [1, 1, '2025-12-20 10:30', 1],
            [2, 1, '2025-12-10 14:15', 0],
            [3, 1, '2025-12-12 09:45', 1],
            [4, 1, '2025-12-30 16:20', 0],
            [5, 1, '2025-12-20 11:00', 1],
            [6, 1, '2025-12-20 11:30', 1],
            [3, 2, '2025-12-21 13:00', 1],
            [4, 2, '2025-12-23 12:45', 0],
            [5, 3, '2025-12-24 15:30', 0],
            [6, 3, '2025-12-25 18:00', 1],
            [7, 4, '2025-12-27 10:15', 0],
            [8, 6, '2025-12-20 14:30', 1],
            [1, 6, '2025-12-26 11:45', 0],
            [5, 7, '2025-12-25 19:30', 1],
            [5, 8, '2025-12-23 13:20', 1],
            [6, 8, '2025-12-27 16:00', 0]
        ];
        
        $stmt = $this->db->prepare("INSERT INTO FOOD_ORDER (DISH_ID, USER_ID, OrderDate, IsComplete) VALUES (?, ?, ?, ?)");
        foreach ($orders as $order) {
            $stmt->bind_param("iisi", $order[0], $order[1], $order[2], $order[3]);
            $stmt->execute();
        }
        $stmt->close();
        
        echo "Database filled successfully with sample data!\n";
    }
}
?>
