<?php

require "Admin/Blog.php";
require "Blog.php";

use Admin\Blog as AdminBlog;
$adminBlog = new AdminBlog;
echo "<br>";
$blog = new Blog;
