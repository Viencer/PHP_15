<form name="search" id="search" action="index.php?search" method="POST" role="form">

<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" id="title" class="form-control" placeholder="Title">
</div>
<p>
<button type="submit" class="btn btn-primary">Search</button>
</p>
</form> 

<body>
    <?php
    error_reporting(0);
    if ($book->title) {
    echo "<strong>Title: </strong> {$book->title} <br>";
    echo "<strong>Author: </strong> {$book->author} <br>";
    echo "<strong>Description: </strong> {$book->description} <br>"; 
    }
   
    ?>
</body>