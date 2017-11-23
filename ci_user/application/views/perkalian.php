<html>
    <head>
        <title>Calculator Codeigniter</title>
         
<style type="text/css">
body {
 background-color:#fff;
 font-family: Lucida Grande, Verdana, Sans-serif;
 margin:40px;
 font-size:14px;
  color: #4f55155;
}
 
a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}
 
h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #d0d0d0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px;
 padding: 5px 0 6px 0;
}
</style>
    </head>
 
<body>
<h1>Perkalian </h1>
<p>Silahkan masukan data berikut :</p>
<ul>
    <?php echo form_open('blog/perkalian'); ?>
    <?php echo form_input('v1',$v1); ?> x
    <?php echo form_input('v2',$v2); ?> <br>
    <p><?php echo validation_errors();?></p>
     
    <?php echo form_submit('submit','Hitung'); ?>
    <?php echo form_close(); ?> <br>
     
    Hasil : <?php echo $hasil; ?>
</ul>
 
<p><?php echo anchor('blog','Home'); ?></p>
<p> Page endered in {elapsed_time} second </p>
</body>
</html>