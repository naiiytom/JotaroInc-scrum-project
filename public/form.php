<!DOCTYPE html>
<html>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td>Select Photo (one or multiple):</td>
                <td><input type="file" name="files[]" multiple /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Create Gallery" id="selectedButton" /></td>
            </tr>
        </table>
    </form>
</body>

</html>