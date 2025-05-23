<!DOCTYPE html>
<html>
    <head>
        <title>Dictionary</title>
    </head>
    <h2>Dictionary</h2>
    <form method="post">
        <label for ="word">Enter a word:</label>&nbsp;
        <input type="text" id="word" name="word">&nbsp;&nbsp;
        <input type="submit" name="search" value="Search">
    </form>
    <?php
    $dictionary=array("apple"=>"a fruit with red or green skin and a ronded shape.",
    "computer"=>"An electronic device for storing and processing data.",
    "cat"=>"A small domesticated carnivorous mammal with soft fur.",
    "book"=>"A written or printed work consisting of pages glued or sewn togrther along one side.",
    "son"=>"The star around which the earth orbits.",
    "tree"=>"A woody perennial plant with a single main stem or trunk.",
    "house"=>"A building for human habitation.",
    "school"=>"An institution for educating children.",
    "music"=>"The art of arranging sounds in time to produce a composition.",
    "Ocean"=>"A vast of salt water that covers most of the earth's surface."
);
if(isset($_POST['search'])){
    $word=strtolower($_POST['word']);
    if(array_key_exists($word,$dictionary)){
        echo"<h3>Meaning</h3>";
        echo"<p><strong>".ucfirst($word).":</strong>".$dictionary[$word]."</p>";
    }else{
        echo"<p>Word not found.</p>";
    }
}
?>
</body>
</html>
    