<?php
    $htmlCategories = '';
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
        $htmlCategories .= 
        '<div style="display: flex;">
            <a href="'.$value['url'].'" class="contactLink">'.$value['name'].' 🔗</a>
        </div>';
    }
?>
<footer>
    <a href="index.php" class="logoWebsite" style="color: white;">Alternative Data</a>
    <div style="margin: auto; display: flex; justify-content:center; gap: 20px;">
        <!-- terms and policy -->
        <div style="width: 33%; line-height: 30px;">
            <div>
                <h3 class="logoWebsite" style="font-size: 20px; color: white; margin: 10px 0 10px 0;">
                    Terms and Policy
                </h3>
            </div>
            <div>
                <a href="#" class="contactLink">Our Terms of Service 🔗</a>
            </div>
            <div>
                <a href="#" class="contactLink">Our Policy 🔗</a>
            </div>
        </div>
        <!-- categories -->
        <div style="width: 33%; line-height: 30px;">
            <div>
                <h3 class="logoWebsite" style="font-size: 20px; color: white; margin: 10px 0 10px 0;">
                    Categories
                </h3>
            </div>
            <?php echo $htmlCategories; ?>
        </div>
        <!-- contact -->
        <div style="width: 33%; line-height: 30px;">
            <div>
                <h3 class="logoWebsite" style="font-size: 20px; color: white; margin: 10px 0 10px 0;">
                    Contact
                </h3>
            </div>
            <div>
                <h3 href="#" class="contactLink">
                    <span id="icon"><i class="fa-regular fa-user"></i></span>
                    Founder: Nguyen Le Nam
                </h3>
            </div>
            <div>
                <a href="https://www.facebook.com/LeNam317" class="contactLink">
                    <span id="icon"><i class="fa-brands fa-facebook"></i></span>
                    Facebook 🔗
                </a>
            </div>
            <div>
                <a href="#" class="contactLink">
                    <span id="icon"><i class="fa-regular fa-envelope"></i></span>
                    Email 🔗
                </a>
            </div>
            <div>
                <h3 href="#" class="contactLink">
                    <span id="icon"><i class="fa-solid fa-phone"></i></span>
                    Contact number: +0123456789
                </h3>
            </div>
        </div>
    </div>
    <div id="lineContact"></div>
    <div>
        <h3 class="contactLink" style="color: white; text-align: center; margin-top: 15px; margin-bottom: -15px;">© Alternative Data. All rights reserved.</h3>
    </div>
</footer>