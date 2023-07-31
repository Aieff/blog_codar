<?php 
include_once ('templates/header.php');
?>

        <div class="avatar-content">
            <img src="<?= $BASE_URL ?>/img/<?= $user['img'] ?>" alt="Avatar-profile">
            <h2><?= $user['name'] ?></h2>
        </div>

        <nav class="btn_social">                   
            <ul>
                <li><a href="https://github.com/Aieff" target="_blank" title="github"><img src="<?= $BASE_URL ?>/img/github.png" alt="github"></a></li>
                <li><a href="https://www.linkedin.com/in/gabrieloli-/" target="_blank" title="linkedin"><img src="<?= $BASE_URL ?>/img/linkedin.png" alt="linkedin"></a></li>
                <li><a href="https://www.instagram.com/gabrieloli._/" target="_blank" title="instagram"><img src="<?= $BASE_URL ?>/img/instagram.png" alt="instagram"></a></li>             
            </ul>
        </nav>

<?php 
include_once ('templates/footer.php');
?>