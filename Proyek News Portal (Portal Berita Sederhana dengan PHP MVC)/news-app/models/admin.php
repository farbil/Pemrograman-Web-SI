class Admin extends Model { 
 
    public function login($username, $password) { 
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username=?"); 
        $stmt->execute([$username]); 
        $user = $stmt->fetch(); 
 
        if ($user && $password == $user['password']) { 
            return $user; 
        } 
        return false; 
    } 
} 