<?php

session_start();

if(!isset($_SESSION['ibox_user_id'])) {
    header("Location: /");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-links">
            <a class="logo" href="index.html">Logo</a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Porfolio</a>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Computer Hardware</a></li>
                        <li><a href="#">Computer Science</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="account">
            <img src="img/avatar2.png" alt="perfil">
            <ul>
                <li><a href="/inc/Controller/AppController.php?logout=true">Logout</a></li>
            </ul>
        </div>
    </nav>

    <main class="main">
        <section class="index-profile">
            <div class="myprofile">
                <h3>My Profile</h3>
                <img src="img/avatar3.png" alt="">
                <span></span>
                <ul>
                    <li>Designer, UI</li>
                    <li>London, UK</li>
                    <li>April 1, 1988</li>
                </ul>
            </div>

            <ul class="my-ul">
                <li><a href="#">My Groups</a></li>
                <li><a href="#">My Events</a></li>
                <li><a href="#">My Photos</a></li>
            </ul>

            <div class="interests">
                <h3>interests</h3>
                <ul>
                    <li>News</li>
                    <li>Campanha</li>
                    <li>Labels</li>
                    <li>Games</li>
                    <li>Friends</li>
                    <li>Games</li>
                    <li>Friends</li>
                    <li>Food</li>
                    <li>Design</li>
                    <li>Art</li>
                    <li>Photos</li>
                </ul>
            </div>

            <div class="hello">
                <h2>Hey!</h2>
                <p>People are looking at your profile. Find out who.</p>
            </div>

        </section>

        <section class="main-content">
            <div class="media-content">
                <div class="push-post">
                    <span>Social Media template by Campanha</span>
                    <form action="/inc/Controller/AppController.php" id="post-form" method="POST" enctype="multipart/form-data">
                        <input type="text" name="message" id="" placeholder="Em que estais a pensar?">
                        <input type="file" name="images" id="" multiple>
                        <button type="submit" name="btn-post">Post</button>
                    </form>
                </div>

                <div class="posts">
                    <div class="posts-content">
                        <div class="posts-header">
                            <div class="posts-owner">
                                <img src="img/avatar2.png" alt="">
                                <p>John Doe</p>
                            </div>
    
                            <span>1 min</span>        
                        </div>
    
                        <div class="posts-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio unde ullam ea soluta in deleniti cupiditate magni quia quis esse nemo accusamus, rem expedita possimus commodi similique obcaecati, consequatur non?</p>
                            <div class="posts-body-imgs">
                                <img src="img/lights.jpg" alt="">
                                <img src="img/nature.jpg" alt="">
                            </div>
                        </div>
    
                        <div class="posts-footer">
                            <a href="#">Like</a>
                            <a href="#">Comment</a>
                        </div>
                    </div>

                    <div class="posts-content">
                        <div class="posts-header">
                            <div class="posts-owner">
                                <img src="img/avatar5.png" alt="">
                                <p>Jane Doe</p>
                            </div>
    
                            <span>16 min</span>        
                        </div>
    
                        <div class="posts-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio unde ullam ea soluta in deleniti cupiditate magni quia quis esse nemo accusamus, rem expedita possimus commodi similique obcaecati, consequatur non?</p>
                        </div>
    
                        <div class="posts-footer">
                            <a href="#">Like</a>
                            <a href="#">Comment</a>
                        </div>
                    </div>

                    <div class="posts-content">
                        <div class="posts-header">
                            <div class="posts-owner">
                                <img src="img/avatar2.png" alt="">
                                <p>Angie Jane</p>
                            </div>
    
                            <span>32 min</span>        
                        </div>
    
                        <div class="posts-body">
                            <p>Have you seen this</p>
                            <div class="posts-body-imgs">
                                <img src="img/nature.jpg" alt="">
                            </div>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum impedit animi, quos quo officiis ducimus natus consequatur quasi tenetur totam a sapiente maiores molestiae ratione eos iste maxime laudantium! Pariatur?</p>
                        </div>
    
                        <div class="posts-footer">
                            <a href="#">Like</a>
                            <a href="#">Comment</a>
                        </div>
                    </div>

                </div>
                
            </div>

            <div class="media-info">
                <div class="events">
                    <p>Upcoming Events: </p>
                    <img src="img/forest.jpg" alt="">
                    <h3>Holiday</h3>
                    <p>Friday 15:00</p>
                    <a href="#">Info</a>
                </div>

                <div class="friend-request">
                    <p>Friend Request</p>
                    <img src="img/avatar6.png" alt="">
                    <p>Jane Doe</p>
                    <article>
                        <a href="#"><span>Accept</span></a>
                        <a href="#"><span>Decline</span></a>
                    </article>
                </div>

                <div class="ads">
                    <p>ADS</p>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer">
        <div>
            <p>Footer</p>
        </div>

        <div>
            <p>Powered by <span>Campanha</span></p>
        </div>
    </footer>
    
</body>
</html>

<script src="js/form.js"></script>
<script src="js/main.js"></script>