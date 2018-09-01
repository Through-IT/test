/* home */
<?php
$name = '';
$email = '';
$tel = '';
$comments = '';
$result = false;

if (isset($_POST['contacthome'])){
    $name = $_POST['homename'];
    $email = $_POST['homeemail'];
    $tel = $_POST['hometel'];
    $comments = $_POST['homemessage'];
    $errorsname = false;
    $errorsemail = false;
    $errorstel = false;
    $errorscomments = false;

    if (!strlen($name) >= 3){
        $errorsname = 'Լրացրեք Ձեր անունը';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorsemail = 'Էլ հասցեն սխալ է';
    }
    if (!strlen($tel)  >= 1){
        $errorstel = 'Լրացրեք Ձեր համարը';
    }
    if (!strlen($comments)  >= 10){
        $errorscomments = 'Լրացրեք նկարագրությունը';
    }

    if ($errorsname == false && $errorsemail == false && $errorstel == false && $errorscomments == false){
        $adminemail = 'info@through-it.com';
        $message = "Through-IT Գլխավոր Էջից";
        $subject = "Անուն: {$name}"
            ."\r\n". "Էլ․ հասցե: {$email}"
            ."\r\n". "Հեռ: {$tel}"
            ."\r\n". "Նկարագրություն: {$comments}";
        $headers.="Content-type: text/plain; charset=UTF-8";
        $headers.="Content-transfer-encoding: quoted-printable";
        $result = mail($adminemail, $message, $subject, $headers );
        $result = true;
    }
}
?>

/* contact */

<?php
$name = '';
$email = '';
$tel = '';
$comments = '';
$result = false;

if (isset($_POST['contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $comments = $_POST['message'];
    $errorsname = false;
    $errorsemail = false;
    $errorstel = false;
    $errorscomments = false;

    if (!strlen($name) >= 3){
        $errorsname = 'Լրացրեք Ձեր անունը';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorsemail = 'Էլ հասցեն սխալ է';
    }
    if (!strlen($tel)  >= 1){
        $errorstel = 'Լրացրեք Ձեր համարը';
    }
    if (!strlen($comments)  >= 10){
        $errorscomments = 'Լրացրեք նկարագրությունը';
    }

    if ($errorsname == false && $errorsemail == false && $errorstel == false && $errorscomments == false){
        $adminemail = 'info@through-it.com';
        $message = "Through-IT Հետադարձ կապ";
        $subject = "Անուն: {$name}"
            ."\r\n". "Էլ․ հասցե: {$email}"
            ."\r\n". "Հեռ: {$tel}"
            ."\r\n". "Նկարագրություն: {$comments}";
        $headers.="Content-type: text/plain; charset=UTF-8";
        $headers.="Content-transfer-encoding: quoted-printable";
        $result = mail($adminemail, $message, $subject, $headers  );
        $result = true;
    }
}
?>

/*call and messages*/

<?php
$name = '';
$tel = '';
$result = false;

if (isset($_POST['callsend'])){
    $name = $_POST['callname'];
    $tel = $_POST['calltel'];
    $errorscallname = false;
    $errorscalltel = false;

    if (!strlen($name) >= 1){
        $errorscallname = 'Լրացրեք Ձեր անունը';
    }
    if (!strlen($tel)  >= 1){
        $errorscalltel = 'Լրացրեք Ձեր համարը';
    }

    if ($errorscallname == false && $errorscalltel == false ){
        $adminemail = 'info@through-it.com';
        $message = "Through-IT Զանգի Պատվեր";
        $subject = "Անուն: {$name}"
            ."\r\n". "Հեռ: {$tel}";
        $headers.="Content-type: text/plain; charset=UTF-8";
        $headers.="Content-transfer-encoding: quoted-printable";
        $result = mail($adminemail, $message, $subject, $headers  );
        $result = true;
    }
}
?>
<?php
$name = '';
$email = '';
$tel = '';
$comments = '';
$result = false;

if (isset($_POST['freeconss'])){
    $name = $_POST['namemod'];
    $email = $_POST['emailmod'];
    $tel = $_POST['telmod'];
    $comments = $_POST['messagemod'];
    $errorsname = false;
    $errorsemail = false;
    $errorstel = false;
    $errorscomments = false;

    if (!strlen($name) >= 3){
        $errorsname = 'Լրացրեք Ձեր անունը';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorsemail = 'Էլ հասցեն սխալ է';
    }
    if (!strlen($tel)  >= 1){
        $errorstel = 'Լրացրեք Ձեր համարը';
    }
    if (!strlen($comments)  >= 10){
        $errorscomments = 'Լրացրեք նկարագրությունը';
    }

    if ($errorsname == false && $errorsemail == false && $errorstel == false && $errorscomments == false){
        $adminemail = 'info@through-it.com';
        $message = "Through-IT Անվճար խորհրդակցություն";
        $subject = "Անուն: {$name}"
            ."\r\n". "Էլ․ հասցե: {$email}"
            ."\r\n". "Հեռ: {$tel}"
            ."\r\n". "Նկարագրություն: {$comments}";
        $headers.="Content-type: text/plain; charset=UTF-8";
        $headers.="Content-transfer-encoding: quoted-printable";
        $result = mail($adminemail, $message, $subject, $headers );
        $result = true;
    }
}
?>