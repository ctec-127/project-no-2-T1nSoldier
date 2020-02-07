<?php require 'include/header.inc.php' ?>
<div class="<?php echo $_GET['borderStyle']?> <?php echo !empty($_GET['borderColor']) ? strtolower($_GET['borderColor']) : 'none'?>bdr 
<?php echo isset($_GET['textColor']) ? strtolower($_GET['textColor']) : '' ?>text <?php echo isset($_GET['backgroundColor']) ? strtolower($_GET['backgroundColor']) : ''?>bg <?php echo isset($_GET['font']) ? $_GET['font'] : ''?>">
<h1 class=""><?php echo  !empty($_GET['pageTitle']) ? $_GET['pageTitle'] : "Your title here" ?> </h1>
<!-- <div class=""><img src="images/<?php echo $_GET['image']?>.jpg" alt="<?php echo $_GET['image']?>" class="<?php echo $_GET['imgpos']?>img"></div> -->
    <p><img src="images/<?php echo $_GET['image']?>.jpg" alt="<?php echo $_GET['image']?>" class="<?php echo !empty($_GET['imgpos']) ? $_GET['imgpos'] : 'hide'?>img">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, non eos eum totam corrupti aliquam laborum. Dolor doloribus, accusamus, explicabo quis enim ab inventore officiis quisquam modi, laudantium asperiores nemo. Eligendi tenetur culpa, rem earum quod autem. Consectetur magni repellat accusamus! Error quibusdam sed fugiat! Dolore beatae doloribus eum recusandae blanditiis consectetur aliquid deserunt voluptatum asperiores quidem, vitae iusto delectus. Inventore non iure molestiae, voluptatum nam cumque iusto! 
    <p>Dicta repellat tempora qui recusandae, facilis voluptate ipsam quae expedita aut veniam perferendis ea tenetur magnam, laboriosam harum, doloremque quod asperiores. Ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eos architecto facilis porro modi? </p>
    <p>Corrupti dolor pariatur possimus aut, dicta omnis voluptates minus fugit architecto fugiat, neque facilis, laudantium eos? Blanditiis illum amet voluptas quos hic molestiae maiores unde nesciunt nisi! Maxime beatae quasi placeat, esse corrupti molestiae! Accusamus eum corrupti vero voluptas asperiores sit esse debitis quod ipsa blanditiis!</p>
    <p>Earum quasi, ducimus temporibus porro quam tenetur perspiciatis dolor a neque beatae sapiente voluptatum excepturi eos quae, illum sequi ratione, maiores exercitationem! Ipsum ad velit esse dolores qui laborum odit.</p>
</div> 

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>

<?php require 'include/footer.inc.php' ?>