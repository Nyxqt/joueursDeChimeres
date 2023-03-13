<?php $title = "Association"; ?>
<?php ob_start(); ?>

<!-- MAIN CONTENT -->

<div class="container-fluid mt6">
    <div class="container d-flex flex-column text-center justify-content-center">
    <i class="fa-solid fa-landmark fa-2xl mb-2">
                <span class="important-f fs-2">Association</span>
            </i>
        <h2 class="mt-5 underline">Les joueurs de chimères</h2>
        <p class="mt-5 fs-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit at eius itaque. Cum, iure praesentium odio corporis sed aliquam dolor aliquid voluptate maiores eveniet quidem id inventore odit, accusamus quo!
            Repellendus tenetur expedita, maiores omnis nostrum eveniet nihil, pariatur rerum, eum alias corrupti laudantium dolor dignissimos voluptatum laboriosam voluptatem aliquid? Suscipit, molestias. Eum perferendis modi quos aperiam voluptatibus quo quae!
            Recusandae magnam nihil adipisci incidunt rem earum corporis eveniet nostrum alias necessitatibus, amet, cum doloremque repellat officia itaque sed a architecto quasi odio omnis. Possimus beatae voluptate eius sit amet.
        </p>
        <h2 class="mt-5 underline">Nous rejoindre !</h2>
        <p class="mt-5 fs-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit at eius itaque. Cum, iure praesentium odio corporis sed aliquam dolor aliquid voluptate maiores eveniet quidem id inventore odit, accusamus quo!
            Repellendus tenetur expedita, maiores omnis nostrum eveniet nihil, pariatur rerum, eum alias corrupti laudantium dolor dignissimos voluptatum laboriosam voluptatem aliquid? Suscipit, molestias. Eum perferendis modi quos aperiam voluptatibus quo quae!
            Recusandae magnam nihil adipisci incidunt rem earum corporis eveniet nostrum alias necessitatibus, amet, cum doloremque repellat officia itaque sed a architecto quasi odio omnis. Possimus beatae voluptate eius sit amet.
        </p>

        <!-- IFRAME GOOGLE MAPS -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10406.737629662146!2d2.6081633!3d49.3013212!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e635b89821f977%3A0xe8c21b41ea93bcb2!2sAssociation%20de%20jeux%20de%20r%C3%B4les%20Les%20Joueurs%20de%20Chim%C3%A8res!5e0!3m2!1sfr!2sfr!4v1678712663187!5m2!1sfr!2sfr" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>

    </div> 
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>