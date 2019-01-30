<?php 
  $path = "/dir1/myfile.php";
  $file = "file1.txt";

  // Return filename
  #echo basename($path);

  // Return filename without extentionk
  #echo basename($path, ".php");

  //Return dir name from path
  #echo dirname($path);

  //Check for file existence. Returns 1 if found
  #echo file_exists('file1.txt');

  //Get absolute path
  #echo realpath($file);

  //Checks to see if file
  #echo is_file($file);

  //Check if file is writable
  #echo is_writable($file);
  //Check if file is readable
  #echo is_readable($file);

  //Get file size
  #echo filesize($file);

  //Create a directory
  #mkdir('testing');

  //Delete a directory if empty
  #rmdir("testing");

  // Copy file
  #echo copy($file, "filecopy.txt");

  // Rename file
  #echo rename("filecopy.txt", "file2.txt");

  // Delete file
  #unlink("file2.txt");

  //Write from file to String
  #echo file_get_contents($file);

  //Write into a file
  #echo file_put_contents($file, ", You're Awesome");

  // Open a file for reading
  #$handle = fopen($file, 'r');
  #$data = fread($handle, filesize($file));
  #echo $data;

  // Open file for writing
  #$handle = fopen("File3.txt", 'w');
  #$newTxt = 'Hola Mundo';

  #fwrite($handle, $newTxt);

  //Close file when done
  #fclose($handle);
?>