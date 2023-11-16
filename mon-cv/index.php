<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css"/> 
<header>
    <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gaspard-dedobbeleer.jpg" alt="Photo de Gaspard Dedobbeleer <?php bloginfo('title'); ?>"/>
    </a>
</header>

<h1>Curriculum Vitae</h1>
<h2>Gaspard Dedobbeleer</h2>
<main>


<h3>Informations Personnelles</h3>
    <ul>
        <li>Nom : Dedobbeleer</li>
        <li>Prénom : Gaspard</li>
        <li>Date de Naissance : 29 mai 2000</li>
        <li><address>Adresse : 456, Avenue Virtuelle, 1000 Bruxelles, Belgique</address></li>
        <li>Téléphone : <a href="tel:+322345678">+32 2 34 56 78</a></li>
        <li>Email : <a href="mailto:gaspard.dedobbeleer@isfsc.be">gaspard.dedobbeleer@isfsc.be</a></li>
    </ul>

    <h3>Formations</h3>
    <ul>
        <li>2018 : Obtention du CSS, Athénée Royale Jean Absil, Etterbeek</li>
        <li>2018-2019 : Séjour linguistique, Education First, Tokyo, Japon</li>
        <li>2020-2022 : Bachelier en Langues et Lettres Modernes orientations, ULB, Bruxelles</li>
        <li>2022-2025 : Bachelier en Ecriture Multimédia, ISFSC, Schaerbeek</li>
    </ul>

    <h3>Compétences</h3>
    <?php
    $skillsList = new WP_Query([
        'post_type' => 'competences',
    ]);
    ?>
    <ul>
        <?php if ($skillsList->have_posts()): ?>
            <?php while ($skillsList->have_posts()): $skillsList->the_post(); ?>
                <li><?php the_title(); ?></li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

    <h3>Langues</h3>
    <?php
    $langueList = new WP_Query([
        'post_type' => 'langues',
    ]);
    ?>
    <ul>
        <?php if ($langueList->have_posts()): ?>
            <?php while ($langueList->have_posts()): $langueList->the_post(); ?>
                <li><?php the_title(); ?></li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

    <h3>Centres d'Intérêt</h3>
    <?php
    $hobbyList = new WP_Query([
        'post_type' => 'hobby',
    ]); ?>

    <ul>
        <?php if ($hobbyList->have_posts()): ?>
            <?php while ($hobbyList->have_posts()): $hobbyList->the_post(); ?>
                <li><?php the_title(); ?></li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

</main>
<?php get_footer(); ?>
