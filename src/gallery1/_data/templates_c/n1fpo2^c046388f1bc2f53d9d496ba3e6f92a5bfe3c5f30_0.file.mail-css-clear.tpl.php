<?php
/* Smarty version 3.1.29, created on 2017-02-21 12:15:45
  from "/var/www/html/src/themes/default/template/mail/text/html/mail-css-clear.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac75c138b171_59120333',
  'file_dependency' => 
  array (
    'c046388f1bc2f53d9d496ba3e6f92a5bfe3c5f30' => 
    array (
      0 => '/var/www/html/src/themes/default/template/mail/text/html/mail-css-clear.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac75c138b171_59120333 ($_smarty_tpl) {
?>
/* page */
body {
  color:#111;
}

html, body, #bodyTable {
  background:#fff;
}
#contentTable {
  width:600px;
}

/* main block */
#header {
  background:#eee;
  background-image:radial-gradient(ellipse at center, #fefefe, #e5e5e5);
  border-top:4px solid #f70;
  text-align:center;
  text-shadow:1px 1px 0px #fff;
}
#header #subtitle {
  color:#e06900;
}
#content {
  background:#fefefe;
  border-width:1px;
  border-style:solid;
  border-color:#ddd #eee;
  box-shadow:inset 0 0 20px #eee;
}
#footer {
  background:#eee;
  border-bottom:2px solid #f70;
}

/* links */
a {
  color:#f70;
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
}

/* images */
img.photo {
  border:10px solid #ddd;
}
img.photo:hover {
  border-color:#eee;
}

/* paragraphs */
blockquote {
  border-left:2px solid #aaa;
  border-radius:2px;
}

/* tables */
#content table td {
  border-bottom:1px solid #efefef;
}
#content table th {
  background:#aaa;
  color:#fff;
  border-right:1px solid #ddd;
}
#content table tfoot td {
  background:#eee;
  border-right:1px solid #fff;
}
<?php }
}
