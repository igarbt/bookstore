<br />

<h2>We are a very successful books store</h2>
<a href="<?=URL?>about/contact_us">Contact Us</a><br /><br />
<?php
if(isset($this->contact_details)){
?>

Company details:<br />
Name: <?=$this->contact_details['name']?><br />
Address: <?=$this->contact_details['address']?><br />
Country: <?=$this->contact_details['country']?><br />
Phone number: <?=$this->contact_details['phone']?>

<?php
}