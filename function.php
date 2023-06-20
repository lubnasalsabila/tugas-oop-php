<?php 

   $conn =  mysqli_connect("localhost", "root", "", "aas");

   function query( $query ) {
    global $conn;
    $result =  mysqli_query( $conn, $query);
    $kotaks = [];
    while ( $kotak = mysqli_fetch_assoc($result) ) {
        $kotaks[] = $kotak;
    }
    return $kotaks;
   }

   function tambahData($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $id_donatur = htmlspecialchars($data["id_donatur"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori= htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal"]);

    $query = "INSERT INTO data
             VALUES
             ('', '$nama', '$id_donatur', '$paket', '$kategori', '$nominal' )
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
   } 

   class progres{
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "aas";
    public $targetDana = 40000000;
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi Databasse gagal: ". mysqli_connect_error();
        }
    }

    public function target(){
        return $this->targetDana;
    }

    public function totalNominal(){
        $sql = $this->conn->prepare("SELECT SUM(nominal) AS nom FROM data");
        $sql->execute();
        $result = $sql->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }

    public function totalDonatur(){
        $stmt = $this->conn->prepare("SELECT * FROM data");
        $stmt->execute();
        $result = $stmt->get_result();
        $total = $result->num_rows;
        return $total;
    }

    public function persentase(){
        $tnom = $this->totalNominal();
        $persen = ($tnom['nom'] / $this->targetDana) * 100;
        return $persen;
    }
   }
?>