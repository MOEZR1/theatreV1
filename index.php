<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
?>

  
<?php include 'components/navigation.php'; ?>
<!-- advert component - 3 boxes -->
<?php include 'components/latest.php'; ?>
<!-- Upcoming shows -->
<?php include 'components/blogSection.php'; ?>
<?php include 'components/upcomingShows.php'; ?>
<?php include 'components/footer.php'; ?>

