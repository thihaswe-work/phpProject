<!-- 
      $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      ]);
            $statement = $db->query("SELECT * FROM roles");
            $result = $statement->fetchAll();
            print_r($result);
?>
 -->

<form action="_actions/fileUpload.php" enctype="multipart/form-data" method="POST">
   <input type="file" name="photo" />
   <button type="submit">upload</button>
</form>