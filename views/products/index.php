<p>Products</p>



<?php
if(isset($this->all_products)){
    foreach($this->all_products as $product){
?>
        <div id="book_content">
            <img src="<?=$product['image']?>"/><br />
            <h3><?=$product['name']?></h3>
            <h4>by <?=$product['author']?></h4>
        </div>
<?php
    }
}
else{
?>
    <a href="<?=URL?>products/all_products">Show all books</a>
<?php
}
?>

