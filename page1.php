<?php require 'include/header.inc.php' ?>

  
<form id="form" action='page2.php' method="GET">
    <h1>Choose options for your page</h1>
    
    <h3>Page Style</h3>
    <label for="backgroundColor">Background Color</label>
    <br>
        <input type="text" id="backgroundColor" name='backgroundColor' placeholder='dark, black, white, etc'>
        <br><br>
    <label for="textColor">Text Color</label>
    <br>
        <input type="text" name="textColor" id="textColor" placeholder="white, black, etc.">
        <br><br>

    
    <label for="pageTitle">Page Title</label>
    <br>
        <input type="text" name='pageTitle' id='pageTitle' placeholder="Your Title Here">
        <br><br>
   
    <label for="font">Font</label>
    <br>
        <select name="font" id="font">
            <option value="tnr">Times New Roman</option>
            <option value="arial">Arial</option>
            <option value="comic">Comic Sans</option>
        </select>
    
    <br><br>
    <label for="borderStyle">Border Style</label>
    <br>
        <select name="borderStyle" id="borderStyle">
            <option value="none">None</option>
            <option value="dotted">Dotted</option>
            <option value="dashed">Dashed</option>
            <option value="solid">Solid</option>
            <option value="double">Double</option>
        </select>
        <br><br>
    <label for="border">Border Color</label>
    <br>
        <input type="text" name="border" id="border" placeholder="Red, Blue, etc">
    <br><br>
    <h3>Image</h3>
    <label for="image">
        <select name="image" id="image">
            <option value="kitten">Kitten</option>
            <option value="puppy">Puppy</option>
            <option value="lizard">Lizard</option>
        </select>
    </label>
    <br>
    <label for="imgpos">Image Position (left, right)</label>
    <br>
        <input type="text" id='imgpos' name='imgpos'  placeholder="left or right">
    <br><br>
        <input type="submit">
    </form>
    
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <?php  require 'include/footer.inc.php' ?>


    