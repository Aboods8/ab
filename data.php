<?php
$info = json_decode(file_get_contents("info.json"),1);
function save(){
	global $info;
	if(! empty ($info)) 
	file_put_contents("info.json",json_encode($info,448));
}
$token = "7085816419:AAH5Qrp8ai6ZSGdsfMFz60Zv6xO0MSidgO8" ; 
$ch = "2001561623"; //ايدي قناة الصيد
$admin = "@S_Z_ll"; //الادمن حق البوت
$api_key ="000"; //api key حق حسابك
$user = "@S_Z_ll"; //اسم المستخدم حق حسابك
$pass = "999777"; // كلمة السر حق حساب
require "class.php";
require "Telegram.php";
$bot = new Telegram ($token);
$api = new MainClass($user,$pass,$api_key);
/*
النصوص التالية بامكانك التعديل عليها
لكن انتبه من حذف اي كلمة موجوده داخل 
__الكلمة__
مثل 
__number__
لان هذه الكلمة سيتم استبدالها بقيمة معينة
*/
//ملف الصيد
$txt["رسالة الصيد"] =
"
تم شراء رقم جديد
الرقم : __number__
رابط الرقم للتحقق منه
wa.me/__number__
";
$txt["حظر الرقم"] = "
حظر الرقم
"
;
$txt["طلب الكود"]="
طلب الكود
";
#--------------------------------
//ملف التحكم
$txt["القائمة الرئيسية"]="
/work لجعل البوت يبدا الصيد
/stop لجعل البوت يتوقف عن الصيد

عند ايقاف الصيد لا يتوقف مباشرة وانما يتوقف بعد مرور دقيقة
";

$txt["تشغيل الصيد"] ="
تم تشغيل الصيد
";
$txt["ايقاف الصيد"] ="
تم ايقاف الصيد
";


$txt["الكود"]="
تم وصول الكود بنجاح
الرقم : __number__
الكود : __code__
";






