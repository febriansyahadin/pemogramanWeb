<!DOCTYPE html>
<HTML>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype ="multipart/form-data" >
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png">
            <input type="submit" value="submit" />
    </body>
</HTML>