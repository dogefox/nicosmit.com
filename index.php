<?php 

// Favour for a friend, hopping their domain-only website package to a facebook page    
$domain =  $_SERVER['HTTP_HOST'];
    if(strpos($domain,'offgrid4x4')!==FALSE){
        header("Location: https://www.facebook.com/offgrid4x4/");
    }
    echo "<h1>$domain</h1>";
?>

<p>Oh you thought this was a real website?</p>
<p>Nope!</p>
<p>My LinkedIn: <a href="https://www.linkedin.com/in/nicolaassmit/">linkedin.com/in/nicolaassmit</a></p>
<p>One of my blogs: <a href="https://fantasticalmuse.com/">fantasticalmuse.com</a></p>

<!--

Docker image: gcr.io/nico-smit-personal/php-quickstart:v1

-->