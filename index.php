<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styling/style.css">
    <title>Home Page</title>
    <style>
    body.blogdisplay 
    {
    font-family: Arial, sans-serif;
    background-color: #06283D;
    color: #ffffff;
   }

nav {
    background-color: #06283D;
    padding: 10px;
}

nav a {
    color: #ffffff;
    margin-right: 10px;
    text-decoration: none;
}

nav a.right-links {
    float: right;
}

nav a.left-links {
    float: left;
}

h2.Display {
    color: #DFF6FF;
    text-align: center;
    margin-top: 30px;
}

p {
    margin: 20px;
}

p.info {
    font-size: 0.9em;
    color: goldenrod;
    text-align: right;
}

ol {
    padding-left: 20px;
}

.articles {
    margin-bottom: 20px;
    padding: 10px;
    background-color: #06283D;
    color: #ffffff;
}

#articleheader {
    margin-top: 0;
    color: #47b5ff;
}

    </style>
</head>
<body class="blogdisplay">
    <nav>
        <a href="../GroupWork/index.php" class="left-links">Home</a>
        <a href="" class="left-links">About</a>
        <a href="" class="left-links">Contact us</a>
        <?php
        if(isset($_SESSION["control"])){
            ?>
            <a class="left-links" href="../blog_input/blog.php">Create Blog</a>
            <a class="left-links" href="../viewingfile/blogs.php">View Blog</a>
            <a class="right-links">Welcome <?php print $_SESSION["control"]["fullname"];?></a>
            <a class="right-links" href="../processes/signoutprocess.php">Sign-Out</a>
            <?php
        }else{
            ?>
            <a class="right-links" href="../signin/Signin.html">Sign-In</a>
            <a class="right-links" href="../signup/signup.php">Sign-Up</a>
        <?php
        }
        ?> 
    </nav>
    <div class="content">
        <h2 class="Display" id="blog-name">[Blog Name]</h2>
        <p>
            Welcome to [Blog Name], your go-to source for [blog topic/industry]. Explore a wealth of informative and engaging articles that cover a wide range of topics, ensuring you stay informed, inspired, and entertained.
        </p>
        <h3 id="section-title">Discover Expert Insights</h3>
        <p>
            Our team of experienced writers and industry professionals bring you the latest trends, expert insights, and thought-provoking analysis on [blog topic/industry]. From practical tips and how-to guides to in-depth research and thought leadership pieces, we've got you covered.
        </p>
        <h3 id="section-title">Dive into Diverse Topics</h3>
        <p>
            Explore our diverse range of topics, carefully curated to cater to all your interests. Whether you're a [target audience], [blog name] offers something for everyone. Browse through categories like [category 1], [category 2], [category 3], and more to find articles that pique your curiosity.
        </p>
        <h3 id="section-title">Engage and Interact</h3>
        <p>
            We value your participation and welcome your comments, questions, and feedback. Join our vibrant community of readers by sharing your thoughts on our articles, engaging in discussions, and connecting with like-minded individuals. Your voice matters, and we're excited to hear from you.
        </p>
        <h3 id="section-title">Stay Updated</h3>
        <p>
            Never miss an update! Subscribe to our newsletter and receive regular updates on the latest articles, exclusive content, and special offers. Don't worry, we respect your privacy and won't spam your inbox.
        </p>
        <h3 id="section-title">Start Exploring</h3>
        <p>
            Begin your journey through our blog by checking out some of our popular articles below:
        </p>
        <p>
            And that's just the beginning. Our blog is packed with valuable content waiting to be discovered. So, grab a cup of coffee, get comfortable, and start exploring the fascinating world of [blog topic/industry] with [Blog Name].
        </p>
        <p>
            Remember to regularly check back for new articles, updates, and exciting announcements. Thank you for visiting [Blog Name], and happy reading!
        </p>
        <p>
            Feel free to customize this content to fit your blog's specific style and tone. Good luck with your blog!
        </p>
    </div>
</body>
</html>
