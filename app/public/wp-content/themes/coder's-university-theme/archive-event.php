<?php
    get_header(); 
    pageBanner(array(
        'title' => 'All Events',
        'subtitle' => "Look out a vibrant community pulsating with a diverse array of events that cater to every passion and interest.",
        'photo' => get_theme_file_uri('/images/archive_event_banner.jpg')
    ))
    ?>

<div class="container container--narrow page-section">
    <?php
        while(have_posts()){
            the_post();
            get_template_part('template-parts/content-event');
        } 
        echo paginate_links();
    ?>
    <hr class="section-break">
    <p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events')?>">Check out Our Past  events archive</a>.</p>
</div>

<?php get_footer();
?>