<h1>User: Edit</h1>

<form method="post" action="<?=URL?>user/editSave/<?=$this->user['id']?>">
    <label>Username</label><input type="text" name="username" value="<?=$this->user['username']?>"/><br />
    <label>Password</label><input type="text" name="password" /><br />
    <label>Role</label>
    <select name="role">
        <option value="default" <?php if($this->user['role'] == 'default') echo 'selected' ?>>Default</option>
        <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected' ?>>Admin</option>
    </select><br />
    <label>&nbsp;</label><input type="submit" />
</form>