<h1>Note: Edit</h1>

<form method="post" action="<?=URL?>note/editSave/<?=$this->note[0]['noteid']?>">
    <label>Ttile</label><input type="text" name="title" value="<?=$this->note[0]['title']?>"/><br />
    <label>Content</label><textarea name="content"><?=$this->note[0]['content']?></textarea><br />
    <label>&nbsp;</label><input type="submit" />
</form>