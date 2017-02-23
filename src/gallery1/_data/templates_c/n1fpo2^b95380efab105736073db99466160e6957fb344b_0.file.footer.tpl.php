<?php
/* Smarty version 3.1.29, created on 2017-02-21 12:15:45
  from "/var/www/html/src/themes/default/template/mail/text/html/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac75c13b0ba9_99574104',
  'file_dependency' => 
  array (
    'b95380efab105736073db99466160e6957fb344b' => 
    array (
      0 => '/var/www/html/src/themes/default/template/mail/text/html/footer.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac75c13b0ba9_99574104 ($_smarty_tpl) {
?>
            
          </td></tr>

          <tr><td id="footer">
            

      
            <?php echo l10n('Sent by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
            - <?php echo l10n('Powered by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>
            
            - <?php echo l10n('Contact');?>

            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
            
          </td></tr>
        </table>

      </td></tr>
    </table>
  </body>
</html><?php }
}
