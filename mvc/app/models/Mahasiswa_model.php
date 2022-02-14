<?php


class Mahasiswa_model{

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nim',$data['nim']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }


}
    
    

//     public function __construct()
//     {
//         $dsn = 'mysql:host=localhost;dbname=phpmvc';

//         try {
//             $this->dbh = new PDO($dsn, 'root', '');
//         } catch (PDOException $e) {
//             die($e->getMessage());
//         }

//     }

    

//     public function getAllMahasiswa()
//     {
//         $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
//         $this->stmt->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
//     }
// }

// private $mhs = [[

//"nama" => "roni efendi",
    //     "nim" => "16.01.53.0012",
    //     "email" => "roniefendi0105@gmail.com",
    //     "jurusan" => "teknik elektro"

    //     ],
    //     [
    //     "nama" => "mahardika",
    //     "nim" => "16.01.53.0011",
    //     "email" => "dikaefendi0105@gmail.com",
    //     "jurusan" => "teknik elektro"
    //     ],
    //     [
    //     "nama" => "lliko",
    //     "nim" => "16.01.53.0011",
    //     "email" => "likoefendi0105@gmail.com",
    //     "jurusan" => "teknik elektro"
    //     ],
        
    // ];