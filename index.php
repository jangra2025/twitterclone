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
                <form action="insert.php" method="POST">
                    <input
                        type="text"
                        name="username"
                        class="form-control mb-2"
                        placeholder="Enter username"
                        required>

                    <textarea
                        name="content"
                        class="form-control mb-2"
                        rows="2"
                        placeholder="Enter message..."
                        required></textarea>

                    <button type="submit" class="btn btn-primary rounded-pill">Post</button>
                </form>


                <?php
                $conn = mysqli_connect("localhost", "root", "", "db");
                $tweets = mysqli_query($conn, "SELECT * FROM tweets ORDER BY id DESC");
                while ($row = mysqli_fetch_assoc($tweets)) {
                ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <strong>@<?= htmlspecialchars($row['username']) ?></strong>
                            <p><?= htmlspecialchars($row['content']) ?></p>

                            <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                <?php } ?>

                </form>
                <div class="bg-white mt-4 p-3 ">
                    <span class="badge rounded-pill bg-primary  fs-6 me-3">D</span>
                    <a herf="#" class="fw-bold fs-5 text-decoration-none text-black">Didi Med</a>
                    <i class="fa-solid fa-certificate text-info "></i>
                    <a href="#" class="text-secondary text-decoration-none">@meddidi3602 .Fri Sep 20</a>
                    <p class="ms-5">Test test</p>
                    <div class="ms-5 d-flex justify-content-evenly">
                        <i class="fa-regular fa-message"></i>
                        <i class="fa-solid fa-upload"></i>
                        <i class="fa-regular fa-heart"></i>
                    </div>

                </div>
                <div class="bg-white mt-4 p-3 ">
                    <span class="badge rounded-pill bg-primary  fs-6 me-3">A</span>
                    <a herf="#" class="fw-bold fs-5 text-decoration-none text-black">Amit</a>
                    <i class="fa-solid fa-certificate text-info "></i>
                    <a href="#" class="text-secondary text-decoration-none">@amit553602 .Fri May 28</a>
                    <p class="ms-5">Good Job</p>
                    <div class="ms-5 d-flex justify-content-evenly">
                        <i class="fa-regular fa-message"></i>
                        <i class="fa-solid fa-upload"></i>
                        <i class="fa-regular fa-heart"></i>
                    </div>

                </div>
                <div class="bg-white mt-4 p-3  ">
                    <span class="badge rounded-pill bg-primary  fs-6 me-3">S</span>
                    <a herf="#" class="fw-bold fs-5 text-decoration-none text-black">Sahil</a>
                    <i class="fa-solid fa-certificate text-info "></i>
                    <a href="#" class="text-secondary text-decoration-none">@sahil8897 .Sat june 2</a>
                    <p class="ms-5">This snow-covered mountain looks breathtaking in the golden light of sunset.<br>
                        <img src="assets/images/mountain.png" class="ms-6">

                </div>
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
                <p class="fs-4  ms-3  fw-bold">Subscribe to Premium
                <p>
                <p class="fs-5  ms-4 ">Subscribe to unclock new features and if eligible, receive a share of revenue.</p>
                <button class="w-50 fs-5 p-1 ms-4 mb-3 badge rounded-pill bg-primary ">Premium</button>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>