<?
 if($_POST['name']){
  $znach = array(
    1 => $_POST['name'],
    2 => $_POST['tel'],
  );
    $to = "Noisyriver@yandex.ru";
    $subject = "=?utf-8?B?".base64_encode("заказ звонка ".$_SERVER['HTTP_REFERER'])."?=";
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $message = $znach[2]."\nФИО: ".$znach[1];
    mail($to, $subject, $message, $headers);
 }
 Header("Refresh: 8; URL=".$_SERVER['HTTP_REFERER']);
?>

<!DOCTYPE html>
<title><? print "$znach[1], данные успешно отправлены!"; ?></title>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta name="robots" content="noindex"/>

<div>
<label title="Продолжить">✕</label>
<div><? print "$znach[1]"; ?>, Ваша заявка  на бронирование получена!<br>
Мы позвоним Вам в течении получаса.</div>
</div>

<script>
document.getElementsByTagName('label')[0].onclick = function() {
  window.location.href="<? print $_SERVER['HTTP_REFERER']; ?>"
}
</script>