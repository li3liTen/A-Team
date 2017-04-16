<html>     
    <form action="upload.php" method='post'enctype="multipart/form-data" >>

            <h2>Upload Accompanying Image</h2>
            
              <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000" />

  <input type="file" name="myfile" />
  
      <p><label>Title</label><br />
        <input type='text' name='Title' required></p>

        <p><label>Description</label><br />
        <input name='postDesc'input type='text'></textarea></p>

        <p><label>Content</label><br />
        <textarea name='post' input type='text'></textarea></p>

        <p><input type='submit'></p>

    </form>

</div> 
</html>
