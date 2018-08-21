<?php echo validation_errors(); ?> <!--librarry validation error -->

<?php echo form_open('news/update/'.$news_item['id']);  ?> <!-- helper untuk form -->

    <label for="title">Judul</label>
    <input type="text" name="title" value="<?php echo $news_item['title']?>"> <br>
    
    <label for="title">Text</label>
    <textarea name="text" cols="30" rows="10"> <?php echo $news_item['text']?> </textarea> <br>

    <input type="submit" value="Kirim!">    

<?php echo form_close();?>