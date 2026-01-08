<?php
include("includes/header.php");
?>
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-3 sidebar d-none d-md-block pt-3">
            <p><i class="fa-solid fa-house fs-5 me-2"></i><a href="index.php" class="text-decoration-none text-dark fs-4 text-md-center">Home</a></p>
            <p><i class="fa-solid fa-magnifying-glass fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Explore</a></p>
            <p><i class="fa-solid fa-bell fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Notification</a></p>
            <p><i class="fa-solid fa-message fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Message</a></p>
            <p><i class="fa-solid fa-user fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Profile</a></p>
            <p><i class="fa-solid fa-bookmark fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Bookmarks</a></p>
            <p><i class="fa-solid fa-list fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Lists</a></p>
            <p><i class="fa-solid fa-earth-africa  fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Gork</a></p>
            <p><i class="fa-brands fa-twitter  fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Premium</a></p>
            <p><i class="fa-solid fa-users  fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">Communties</a></p>
            <p><i class="fa-solid fa-ellipsis  fs-5 me-2"></i><a href="#" class="text-decoration-none text-dark fs-4 text-md-center">More</a></p>
            <button class="btn btn-primary mt-4 ms-3 rounded-pill">Post</button>
        </div>
        <div class="col-md-6 border-start border-end">
            <div class="tweet-box">
                <textarea id="tweetInput" class="form-control resize-none mb-2 mt-2 " rows="2" placeholder="Enter message..."></textarea>
                <button onclick="commentpost()" class="btn btn-primary rounded-pill">Post</button>
            </div>
            <div id="feedArea"></div>
        </div>
        <div class="col-md-3 p-4 ">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Search..." name="search">
            </div>
            <div class="card">
                <h3 class="fs-3 ms-3 mt-3 mb-0">Trend</h3>
                <hr>
                <p class="text-muted ms-4  fs-4">#BreakingNews</p>
                <p class="text-muted ms-4  fs-4">#Trending Now</p>
                <p class="text-muted ms-4  fs-4">#Tech</p>
            </div>
            <div class="card mt-3">
                <p class="fs-4  ms-3  fw-bold">Subscribe to Premium<p>
                <p class="fs-5  ms-4 ">Subscribe to unclock new features and if eligible, receive a share of revenue.</p>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>