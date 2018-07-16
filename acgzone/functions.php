<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
	// 顶部图片
	$HeadIMG = new Typecho_Widget_Helper_Form_Element_Text('HeadIMG', NULL, NULL, _t('顶部图片地址'), _t('顶部图片绝对路径，尺寸1100px*360px，务必裁剪好'));
    $form->addInput($HeadIMG);
    //广告
    $SiteAD_1 = new Typecho_Widget_Helper_Form_Element_Textarea('SiteAD_1', NULL, NULL, _t('广告位①'), _t('顶部广告'));
    $form->addInput($SiteAD_1);

    $SiteAD_2 = new Typecho_Widget_Helper_Form_Element_Textarea('SiteAD_2', NULL, NULL, _t('广告位②'), _t('底部广告'));
    $form->addInput($SiteAD_2);

    $SiteAD_3 = new Typecho_Widget_Helper_Form_Element_Textarea('SiteAD_3', NULL, NULL, _t('广告位③'), _t('边栏广告1'));
    $form->addInput($SiteAD_3);

    $SiteAD_4 = new Typecho_Widget_Helper_Form_Element_Textarea('SiteAD_4', NULL, NULL, _t('广告位④'), _t('边栏广告2'));
    $form->addInput($SiteAD_4);

    $SiteAD_5 = new Typecho_Widget_Helper_Form_Element_Textarea('SiteAD_5', NULL, NULL, _t('广告位④'), _t('边栏广告3'));
    $form->addInput($SiteAD_5);
}