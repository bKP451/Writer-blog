<div>
<h3>Leave a comment </h3> 
<hr>
<input type="text" placeholder="What is in your brain ?" id="comment_input_box" onfocus="show_comment_credentials(this)">

    <div id="comment_credentials">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="Email address">
    <input type="button" value="comment">
    </div>
    

<p><?php echo "I am the comments"; ?></p>

<script>   
    function show_comment_credentials(x){
        document.getElementById("comment_credentials").style.display = "block";

    }
    </script>