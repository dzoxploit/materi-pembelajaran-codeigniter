<html>
    <head>
        <title>Calculator Codeigniter</title>
         
<style type="text/css">
body {
 backgroun-color:#fff;
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
<h1>Form </h1>
<p>Silahkan pilih menu dibawah ini :</p>
<ul>
    <li><?php echo anchor('blog/perkalian','perkalian'); ?></li>
    <li><?php echo anchor('blog/pembagian','pembagian'); ?></li>
    <li><?php echo anchor('blog/pertambahan','pertambahan'); ?></li>
    <li><?php echo anchor('blog/pengurangan','pengurangan'); ?></li>
</ul>
<p> Page endered in {elapsed_time} second </p>
</body>
</html>