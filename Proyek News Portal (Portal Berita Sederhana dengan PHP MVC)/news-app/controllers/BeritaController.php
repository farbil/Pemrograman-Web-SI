class BeritaController extends Controller { 
 
    private function checkAuth() { 
        session_start(); 
        if (!isset($_SESSION['admin'])) { 
            header("Location: index.php?action=login"); 
        } 
    } 
 
    public function dashboard() { 
        $this->checkAuth(); 
        $data['berita'] = (new Berita())->all(); 
        $this->view('dashboard', $data); 
    } 
 
    public function create() { 
        $this->checkAuth(); 
 
        if ($_POST) { 
            (new Berita())->create($_POST); 
            header("Location: index.php?action=dashboard"); 
        } 
 
        $this->view('form'); 
    } 
 
    public function edit() { 
        $this->checkAuth(); 
        $model = new Berita(); 
 
        if ($_POST) { 
            $model->update($_GET['id'], $_POST); 
            header("Location: index.php?action=dashboard"); 
        } 
 
        $data['b'] = $model->find($_GET['id']); 
        $this->view('form', $data); 
    } 
 
    public function delete() { 
        $this->checkAuth(); 
        (new Berita())->delete($_GET['id']); 
        header("Location: index.php?action=dashboard"); 
    } 
}