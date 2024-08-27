/**
*Script Login
*/
if (isset($_POST['submit'])) {
    //Jjika pasword benar 
    if($_POST['PASS']='1234') {
        echo'Selamat datang user';
    }
    //Jika pasword salah
    else{
        echo'Pasword salah' ;
    }
}