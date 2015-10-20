<?=validation_errors()?>
<?=form_open('news/delete')?>
<label for="slug">Slug</label>
<input type="input" name="slug" />
<br />

<input type="submit" name="submit" value="Delete a news item" />
</form>