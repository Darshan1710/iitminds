<?php
include 'db.php';
$news = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC LIMIT 6");
$feedback = mysqli_query($con, "SELECT * FROM feedback");
$hours = mysqli_query($con, "SELECT * FROM opening_hours");
?>


<div class="widget">
    <div class="mt-30 p-30" style="border: 10px solid #f1f1f1;">
        <h5 class="text-theme-colored title-border mb-20">student's Feedback</h5>
        <div class="testimonial-carousel-info owl-nav-top">
            <?php while ($feedback_row = mysqli_fetch_array($feedback)) { ?>
                <div class="item">
                    <div class="comment">
                        <p><?php echo $feedback_row['comment']; ?>
                        </p>
                    </div>
                    <div class="content mt-20">
                        <div class="thumb pull-right">
                            <img class="img-circle" alt="" src="<?php echo $image_url . $feedback_row['photo']; ?>">
                        </div>
                        <div class="patient-details text-right pull-right mr-20 mt-10">
                            <h5 class="author"><?php echo $feedback_row['author']; ?></h5>
                            <h6 class="title"><?php echo $feedback_row['batch']; ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>