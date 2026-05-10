class HomeController extends Controller { 
 
    public function index() { 
        $model = new Berita(); 
        $data['berita'] = $model->all(); 
 
        $lang = $_COOKIE['lang'] ?? 'id'; 
 
        $this->view('home', ['berita' => $data['berita'], 'lang' => $lang]); 
    } 
 
    public function setLang() { 
        setcookie("lang", $_GET['lang'], time()+3600); 
        header("Location: index.php"); 
    } 
}