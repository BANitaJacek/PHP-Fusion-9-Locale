﻿<?php
$locale['400'] = "خۆ تۆمارکردن";
$locale['401'] = "هەژماری چالاک";
// Registration Errors
$locale['402'] = "پێویستە ناوێکی بەکارهێنەر، تێپەڕەوشە و ناونیشان پەیامی ئەلیکترۆنی دیاری بکەیت.";
$locale['403'] = "ناوی بەکارهێنەر نووسەی نەگونجاوی تیادایە.";
$locale['404'] = "دوو تێپەڕەوشەکە وەک یەک نین.";
$locale['405'] = "تێپەڕەوشە نەگونجاوە، تەنها ژمارە و نووسەی ئەلف بێ بەکارببە.<br />
تێپەڕەوشە  پێویستە بە لانی کەمەوە لە شەش نووسە پێکهاتبێت.";
$locale['406'] = "ناونیشانی پەیامە ئەلیکترۆنییەکەت وا دەرناکەوێت کە گونجاو بێت.";
$locale['407'] = "ببورە، ئەو ناوی بەکارهێنەری ".(isset($_POST['username']) ? $_POST['username'] : "")." پێشتر بەکارهێنراوە.";
$locale['408'] = "ببورە، پەیامی ئەلیکترۆنی ".(isset($_POST['email']) ? $_POST['email'] : "")." پێشتر بەکارهێنراوە.";
$locale['409'] = "هەژمارێکی ناچالاک تۆمارکرا بەو پەیامە ئەلیکترۆنییەوە.";
$locale['410'] = "کۆدی یاساییبوون ناتەواوە.";
$locale['411'] = "پەیامە ئەلیکترۆنییەکەت یان دۆمەینی پەیامە ئەلیکترۆنییەکەت کراوەتە لیستی ڕەشەوە.";
// Email Message
$locale['449'] = "بەخێربێیت بۆ ".$settings['sitename'];
$locale['450'] = "سڵاو ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
بەخێربێیت بۆ ".$settings['sitename'].". ئەمە زانیارییەکانی چوونەژوورەوەتە:\n
ناوی بەکارهێنەر: ".(isset($_POST['username']) ? $_POST['username'] : "")."
تێپەڕەوشە: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
تکایە هەژمارەکەت چالاک بکە بەهۆی ئەو بەستەرەی خوارەوە\n";
// Registration Success/Fail
$locale['451'] = "خۆتۆمارکردن تەواوبوو";
$locale['452'] = "ئێستا ئەتوانی بچیتە ژوورەوە";
$locale['453'] = "بەم زووانە بەڕێوەبەرێک هەژمارەکەت چالاک دەکات";
$locale['454'] = "خۆ تۆمارکردنەکەت کۆتایی پێهات، پەیامێکی ئەلیکترۆنیت پێ ئەگات کە زانیارییەکانی چوونە ژوورەوەتی تیادایە لەگەڵ بەستەرێک بۆ چالاککردنەوەی هەژمارەکەت.";
$locale['455'] = "هەژمارەکەت چالاککرا.";
$locale['456'] = "خۆ تۆمارکردن شکستی هێنا";
$locale['457'] = "ناردنی پەیامی ئەلیکترۆنی شکستی هێنا، تکایە پەیوەندی بکە بە <a href='mailto:".$settings['siteemail']."'>بەڕێوەبەری ماڵپەڕەوە</a>..";
$locale['458'] = "خۆ تۆمارکردن شکستی هێنا لەبەر ئەم هۆکار(ان) ـەی خوارەوە:";
$locale['459'] = "تکایە هەوڵبدەوە";
// Register Form
$locale['500'] = "تکایە لە خوارەوە وردەکارییەکانت لێبدە . ";
$locale['501'] = "پەیامێكی ئەلیکترۆنی دڵنیایی دەنێردرێت بۆ پەیامە ئەلیکترۆنییەکەت. ";
$locale['502'] = "خانە نیشانەکراوەکان بە <span style='color:#ff0000;'>*</span> پێویستە پڕبکرێنەوە.
ناوی بەکارهێنەر و تێپەڕەوشە هەستیارن بۆ گەورە و بچوکی پیتەکان.";
$locale['503'] = " ئەتوانی زانیارییەکانی ترت بنووسیت بە ڕۆیشتن بۆ دەستکاریکردنی زانیاریی کەسێتی کە چوویتە ژوورەوە.";
$locale['504'] = "کۆدی یاسایی:";
$locale['505'] = "کۆدی یاسایی لێبدە:";
$locale['506'] = "خۆ تۆمارکردن";
$locale['507'] = "هەنووکە سیستەمی خۆتۆمارکردن ناچالاککراوە.";
$locale['508'] = "مەرجەکانی ڕەزامەندینامە";
$locale['509'] = "<a href='".BASEDIR."print.php?type=T' target='_blank'>مەرجەکانی ڕەزامەندیینامە</a>م خوێندووەتەوە و ڕازیم لەسەریان.";
// Validation Errors
$locale['550'] = "تکایە ناوێکی بەکارهێنەر دیاری بکە";
$locale['551'] = "تکایە تێپەڕەوشەیەک دیاری بکە";
$locale['552'] = "تکایە ناونیشانی پەیامێکی ئەلیکترۆنی دیاری بکە";
?>