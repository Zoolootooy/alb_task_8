<?php
require('partials/header.php'); ?>

<h1>It's page from post request</h1>
<br>
<h3>var_dump($_POST)</h3>
<?= var_dump($post) ?>
<br>
<h3>Headers:</h3>
<pre>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}
?>
</pre>

<?php require('partials/footer.php'); ?>