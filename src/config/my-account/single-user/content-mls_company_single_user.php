<?php
$mls_company_user_id = $_GET['mls_company_user_id'];
$user_meta           = get_user_meta( $mls_company_user_id );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Firma <?php echo $user_meta['mls_company_companyname'][0]; ?></title>
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
		$mls_user_id = $user_meta['mls_company_personalid'][0];
		?>
        <a href="admin.php?mls_company_user_id=<?php echo $mls_company_user_id ?>">
			<?php echo ! empty( $user_meta['mls_company_companyname'][0] ) ? $user_meta['mls_company_companyname'][0] : '<b>Nije popunjeno</b>' ?>
        </a>
    </li>
    <li><?php echo ! empty( $user_meta['mls_company_companyname'][0] ) ? $user_meta['mls_company_companyname'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_company_email'][0] ) ? $user_meta['mls_company_email'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_company_address'][0] ) ? $user_meta['mls_company_address'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_company_place'][0] ) ? $user_meta['mls_company_place'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_company_pib'][0] ) ? $user_meta['mls_company_pib'][0] : '<b>Nije popunjeno</b>' ?></li>
    <li><?php echo ! empty( $user_meta['mls_company_uniqnumber'][0] ) ? $user_meta['mls_company_uniqnumber'][0] : '<b>Nije popunjeno</b>' ?></li>

</ul>

<a href="admin.php?page=company_page">Back</a>
</body>
</html>
