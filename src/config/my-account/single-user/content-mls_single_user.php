<?php
$mls_user_id = $_GET['mls_user_id'];
$user_meta   = get_user_meta( $mls_user_id );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Korisnik <?php echo $user_meta['mls_firstname'][0] . ' ' . $user_meta['mls_lastname'][0] ?></title>
</head>
<body>

<?php
/**
 * Add proper content below
 */
?>
<ul>
    <li>
		<?php
		$mls_user_id = $user_meta['mls_user_id'][0];
		?>
        <a href="admin.php?mls_user_id=<?php echo $mls_user_id ?>">
			<?php echo ! empty( $user_meta['nickname'][0] ) ? $user_meta['nickname'][0] : '<b>Nije popunjeno</b>' ?>
        </a>
    </li>
    <li><?php echo ! empty( $user_meta['mls_firstname'][0] ) ? $user_meta['mls_firstname'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_lastname'][0] ) ? $user_meta['mls_lastname'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_email'][0] ) ? '<a href="mailto:' . $user_meta['mls_email'][0] . '">' . $user_meta['mls_email'][0] . '</a>' : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_address'][0] ) ? $user_meta['mls_address'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_city'][0] ) ? $user_meta['mls_city'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_personalid'][0] ) ? $user_meta['mls_personalid'][0] : '<b>Nije popunjeno</b>' ?></li>

    <embed src="/wp-content/themes/AstraChild/files/declaration/<?php echo $user_meta['mls_uploaded_file'][0] ?>" width="500" height="375" type="application/pdf">
</ul>

<a href="admin.php?page=users_page">Back</a>
</body>
</html>
