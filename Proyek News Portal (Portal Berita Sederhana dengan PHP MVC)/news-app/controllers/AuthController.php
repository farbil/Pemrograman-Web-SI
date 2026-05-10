class AuthController extends Controller { 
 
    public function login() { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $admin = (new Admin())->login($_POST['username'], $_POST['password']); 
             
            if ($admin) { 
                session_start(); 
                $_SESSION['admin'] = $admin['nama_admin']; 
                header("Location: index.php?action=dashboard"); 
            } 
        } 
 
        $this->view('login'); 
    } 
 
    public function logout() { 
        session_start(); 
        session_destroy(); 
        header("Location: index.php"); 
    } 
}