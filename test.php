<!DOCTYPE html>
<html>
<head>
    <style>
        #test{
            display: flex;
            flex-direction: column;
            width: 300px;
            height: 200px;
            flex-wrap: wrap;
        }
        .aaa{
            width: 100px;
            height: 100px;
            background: red;
        }
    </style>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file[]" multiple>
    <input type="text" name="test">
    <input type="submit" name="cnfirm">
</form>
<div id="test">
    <div class="aaa">
        aaa
    </div>
     <div class="aaa">
        aaa
    </div>
     <div class="aaa">
        aaa
    </div>
     <div class="aaa">
        aaa
    </div>
</div>
</body>
</html>