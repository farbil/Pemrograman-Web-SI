class Berita extends Model { 
 
    public function all() { 
        return $this->db->query("SELECT * FROM berita ORDER BY datetime DESC") 
                        ->fetchAll(PDO::FETCH_ASSOC); 
    } 
 
    public function find($id) { 
        $stmt = $this->db->prepare("SELECT * FROM berita WHERE id=?"); 
        $stmt->execute([$id]); 
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 
 
    public function create($data) { 
        $sql = "INSERT INTO berita  
        (judul_id, judul_en, nama_admin, datetime, thumbnail, isi_id, isi_en) 
        VALUES (?, ?, ?, NOW(), ?, ?, ?)"; 
         
        return $this->db->prepare($sql)->execute([ 
            $data['judul_id'], 
            $data['judul_en'], 
            $_SESSION['admin'], 
            $data['thumbnail'], 
            $data['isi_id'], 
            $data['isi_en'] 
        ]); 
    } 
 
    public function update($id, $data) { 
        $sql = "UPDATE berita SET  
        judul_id=?, judul_en=?, thumbnail=?, isi_id=?, isi_en=? WHERE id=?"; 
         
        return $this->db->prepare($sql)->execute([ 
            $data['judul_id'], 
            $data['judul_en'], 
            $data['thumbnail'], 
            $data['isi_id'], 
            $data['isi_en'], 
            $id 
        ]); 
    } 
 
    public function delete($id) { 
        return $this->db->prepare("DELETE FROM berita WHERE id=?") 
                        ->execute([$id]); 
    } 
} 