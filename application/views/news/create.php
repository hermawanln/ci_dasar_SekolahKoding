<?php echo validation_errors(); ?> <!--librarry validation error -->

<?php echo form_open('news/create');  ?> <!-- helper untuk form -->

    <label for="title">Judul</label>
    <input type="text" name="title"> <br>
    
    <label for="title">Text</label>
    <textarea name="text" cols="30" rows="10"></textarea> <br>

    <input type="submit" value="submit" value="Kirim!">    

<?php echo form_close();?>