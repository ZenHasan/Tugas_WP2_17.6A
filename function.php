// <?php 
 // $conn = mysqli_connect("localhost", "root", "", "wpa_inventori" );

 // function query($query){
    // global $conn;
    // $result = mysqli_query($conn, $query);
    // $rows = [];
    // while( $row = mysqli_fetch_assoc($result) ) {
//         $rows[] = $row;
  //   }
//     return $rows;
 //}

// function register($data) {
  //   global $conn;

//     $username = strtolower(stripslashes ($data["username"]));
//     $password = mysqli_real_escape_string($conn, $data["password"]);
//     $password2 = mysqli_real_escape_string($conn, $data["password2"]);

//    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
//    if (mysqli_fetch_assoc($result) ){
//        echo "<script>
//                alert('username sudah terdaftar!');
 //               </script>";
  //  }

     // cek konfirmasi password
//     if( $password !== $password2 ){
//         echo "<script>
 //               alert('konfirmasi password tidak sesuai!!');
  //              </script>";
   //             return false;
    // }

//     $password = password_hash($password, PASSWORD_DEFAULT);


//     mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
 //    return mysqli_affected_rows($conn);
// }


// ?>