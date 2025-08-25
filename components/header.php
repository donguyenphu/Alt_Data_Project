<?php
$currentFile = $_SERVER["SCRIPT_NAME"];
$length = strlen($currentFile);
$compareString = substr($currentFile, 1, $length - 1);
$htmlHeader = '';
$categories = [
    [
        'url' => 'index.php',
        'name' => 'Homepage'
    ],
    [
        'url' => 'detail.php',
        'name' => 'Details'
    ],
    [
        'url' => 'function.php',
        'name' => 'Functions'
    ],
    [
        'url' => 'benefit.php',
        'name' => 'Benefits'
    ],
    [
        'url' => 'contact.php',
        'name' => 'Contact'
    ],
];
foreach ($categories as $key => $value) {
    $active = $value['url'] == $compareString ? ' activeCategory' : ''; 
    $htmlHeader .= '<a href="'.$value['url'].'"><strong class="categoryHeader'.$active.'">'.$value['name'].'</strong></a>';
}

?>
<header>
    <a href="index.php" class="logoWebsite">ALTERNATIVE DATA</a>
    <nav id="headerCategoryWrapper">
        <?php echo $htmlHeader; ?>
    </nav>
</header>