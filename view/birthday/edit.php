<div class="container">
    <h1>Edit</h1>
    <form action="<?= URL ?>birthday/editSave" method="post">
    
        <input type="text" name="person" value="<?= $birthday['person']; ?>">
        <input type="text" name="day" value="<?= $birthday['day']; ?>">
        
        <select name="gender">
            <option value="male" <?php if ($birthday['birthday_gender'] == "male") { echo "selected=\"true\""; } ?>>Male</option>
            <option value="female" <?php if ($birthday['birthday_gender'] == "female") { echo "selected=\"true\""; } ?>>Female</option>   
        </select>

        <input type="hidden" name="id" value="<?= $birthday['birthday_id']; ?>">
        <input type="submit" value="Verzenden">
    
    </form>

</div>