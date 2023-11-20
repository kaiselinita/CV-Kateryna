<!DOCTYPE html>
<html lang="eng">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/style.css">
  <title>Portfolio - Kateryna Chernysh </title>
</head>

<body background=" <?php echo get_template_directory_uri(); ?>/Portfolio.jpg">
  <h1>Portfolio </h1>
  <h2>Kateryna Chernysh</h2>

  <div class="container">
      <source src="<?php echo get_template_directory_uri(); ?>/VOCHI_110_f.MP4" type="video/MP4">
    <video width="700" height="700" src=" <?php echo get_template_directory_uri(); ?>/VOCHI_110_f.MP4" autoplay muted loop> 
       Your browser does not support this video tag.
    </video>
</source>

    <div class="content">
    <h3>Personal_information</h3>
<?php
$Personal_informationList = new WP_Query([
    'post_type' => 'Personal_information',
    'posts_per_page' => -1
]);
?>
<ul>
    <?php while ( $Personal_informationList->have_posts() ) : $Personal_informationList->the_post(); ?>
        <li><?php Personal_information(); ?></li>

      <h3>Education</h3>
      <ul>
        <li><strong> 2021</strong> - training at the course Social Media Marketing</li>
        <li><strong> 2022-2023</strong> - completion of the first course at the faculty of "Écriture Multimédia" haute école ISFSC</li>
      </ul>

      <h3>Professional experience</h3>
      <ul>
        <li><strong> December 2022 </strong> - development of website user interfaces for Brabant's "Local de Quartier" organization</li>
        <li><strong> October 2022 </strong> - Creation of website layouts in Adobe XD for the organization "Local de Quartier" Brabant</li>
        <li><strong>2021-2022 </strong> - Collaboration with companies, promotion of their pages in social networks, content-maker,
          copywriter
          and management.</li>
      </ul>
      </li>
      </ul>

      <h3>Skills</h3>
      <ul>
        <li>Front-End & Back-End development (HTML, CSS)</li>
        <li>User interface design (UI)</li>
        <li>User Experience desigh (UX)</li>
      </ul>

      <h3>Languages</h3>
      <ul>
        <li>French</li>
        <li>English</li>
        <li>Ukrainian</li>
        <li>Russian</li>
      </ul>

      <h3>Interests</h3>
      <ul>
        <li>PGraphic design</li>
        <li><strong> Drawing :</strong> drawing on a graphics tablet</li>
        <li>Open to everything new, love to learn and improve my skills in design and programming</li>
      </ul>
    </div>
  </div>

  <?php
$Personal_informationList = new WP_Query([
    'post_type' => 'Personal_information',
    'posts_per_page' => -1
]);
?>

<?php while ( $Personal_informationList->have_posts() ) : $Personal_informationList->the_post(); ?>
    <li>Last name: Chernysh<p>
    First name: Kateryna<p>
    Date of Birth: July 30, 2005 (18 years old)<p>
    Address: Stenweeg asse 140 , 1540 , Herfelingen<p>
    Phone number: +32 496 06 11 17<p>
    Email: katyachernysh07@gmail.com</li>

<?php endwhile; ?>