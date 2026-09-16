<?php
echo "<pre>";
echo "CWD: " . getcwd() . "\n";
echo "Script dir: " . __DIR__ . "\n";
$content = implode("", file("html/somos.html"));
echo "shield en somos.html: " . (strpos($content, 'shield') !== false ? "✅ SÍ ESTÁ" : "❌ NO ESTÁ") . "\n";
echo "medal en somos.html: " . (strpos($content, 'medal') !== false ? "✅ SÍ ESTÁ" : "❌ NO ESTÁ") . "\n";
echo "bootstrap-icons en template.html: " . (strpos(implode("", file("html/template.html")), 'bootstrap-icons') !== false ? "✅ SÍ ESTÁ" : "❌ NO ESTÁ") . "\n";
echo "</pre>";
