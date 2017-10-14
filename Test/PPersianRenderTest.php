<?php

use \FaGD\PPersianRender as faGd;

/**
*
*/
class PPersianRenderTest extends PHPUnit\Framework\TestCase
{

    public function testSpaces()
    {
            $this->assertEquals("abc def", faGd::render("abc def", true));
            $this->assertEquals("abc/def", faGd::render("abc/def", true));
            $this->assertEquals("a b c d e ۱ ۲ ۳", faGd::render("a b c d e 1 2 3", true));
            $this->assertEquals("abc ۱۲۳", faGd::render("abc 123", true));
            $this->assertEquals("abc*   ( def", faGd::render("abc*   ( def", true));
    }
    public function testPersian()
    {
        //half space
        $this->assertEquals("ﺪﻧﺎﻣﯽﻣ", faGd::render("می‌ماند", true));
    }

    public function testCombile()
    {
        // Fa and EN
        $this->assertEquals("abcﯽﻠﻋ", faGd::render("علیabc", true));
        $this->assertEquals("ﯽﻠﻋabc", faGd::render("abcعلی", true));
        $this->assertEquals("۱۲۳۴ali((((", faGd::render("1234"."ali"."((((", true));
        
        //With Spcace
        $this->assertEquals("ج ث ت پ ب ا", faGd::render("ا ب پ ت ث ج ", true));
        $this->assertEquals("ﯽﻟر abc ﯽﻠﻋ", faGd::render("علی abc رلی", true));
        $this->assertEquals("abc ﯽﻠﻋ", faGd::render("علی abc", true));
        $this->assertEquals("kh ﻪﻫ ch ج th پ b ا", faGd::render("ا b پ th ج ch هه kh", true));
        $this->assertEquals("abc///ﯽﻠﻋ", faGd::render("علی///abc", true));
        $this->assertEquals('.دﺎﺘﻓا ﺪﻨﻫاﻮﺧ ﺎﻤﺘﺣ قﺎﻔﺗا ﻪﺳ ﻦﯾا ﻢﯾﻮﮕﺑ ﺎﻤﺷ ﻪﺑ ﻢﻧاﻮﺗﯽﻣ ﺎﻣا دﺎﺘﻓا ﺪﻫاﻮﺧ ﯽﺗﺎﻗﺎﻔﺗا ﻪﭼ ﺮﮕﯾد لﺎﺳ ۱۹ ﺎﺗ ﻢﻧادﯽﻤﻧ ﻦﻣ ﻪﺘﺒﻟا .دﻮﺑ ﺪﻨﻫاﻮﺧ ﯽﺒﺼﻋ و ناﺮﮕﻧ نآ ﺮﻃﺎﺧ ﻪﺑ مدﺮﻣ ﺪﺑﺎﻟ و ﺖﺷاد ﻢﯿﻫاﻮﺧ ﻪﻠﺻﺎﻓ ۲۰۳۸ لﺎﺳ ﻞﻜﺸﻣ ﺎﺑ لﺎﺳ ۳. ﺪﻨﺘﺷاد ﯽﺻﻮﺼﺧ ﻢﯾﺮﺣ ﻢﺳا ﻪﺑ یرﻮﺨﻧ درد ﻪﺑ ﺰﯿﭼ مدﺮﻣ ﻪﻛ دﻮﺑ ﯽﻟﺎﺳ ﻦﯾﺮﺧآ ﻪﻛ ﻦﯾا ﺎﯾ دﺮﻛ ﯽﺳرﺮﺑ ار ﺪﯾورﺪﻧا یور Swift زا هدﺎﻔﺘﺳا نﺎﻜﻣا ﻞﮔﻮﮔ ﺎﯾ ﺪﻧدﺮﻛ زرد زور ﻚﯾ رد ﻪﯿﻛﺮﺗ یﺪﻧوﺮﻬﺷ تﺎﻋﺎﻠﻃا ﺲﯿﺑﺎﺘﯾد و ﺎﻣﺎﻧﺎﭘ دﺎﻨﺳا ﺎﯾ داد ﺖﺴﻜﺷ ار Go نﺎﻣﺮﻬﻗ ﻚﯾ رﺎﺑ ﻦﯿﻟوا یاﺮﺑ AlphaGo Google ﺎﯾ ﺪﺷ ﻪﯾارا ﺲﻛﻮﻨﯿﻟ یور رﺎﺑ ﻦﯿﻟوا یاﺮﺑ Server SQL ﺎﯾ ﺪﻨﺘﺷﺬﮔ رد Cruyff Johan و Barbieri Gato، Eco Umberto، Bowie David ﻪﻛ دﻮﺑ ﯽﻟﺎﺳ ۲۰۱۶ ﻪﻛ ﻦﯾا ﺎﻠﺜﻣ .داد ﺪﯿﻫاﻮﺧ ۲۰۱۶ لﺎﺳ ﻊﯾﺎﻗو زا ﯽﺷراﺰﮔ ﯽﻧاﺮﻨﺨﺳ ﻦﯾا رد .دﺮﻛ ﺪﻫاﻮﺧ ار رﺎﻛ ﻦﯾا ﯽﻋﻮﻨﺼﻣ شﻮﻫ تﺎﺑ ﻚﯾ ﺪﺑﺎﻟ ﻪﻧﺮﮔ و ﺪﻨﻛ ار ﯽﻧاﺮﻨﺨﺳ ﻦﯾا ﺎﻤﺷ زا ﯽﻜﯾ مراوﺪﯿﻣا ."ﺖﺳا ﻦﻣ نﺎﺘﺳاد ﻦﯾا و مراد لﺎﺳ ۴۲ ﻦﻣ ،مﺎﻠﺳ" .دﺮﻛ ﺪﻫاﻮﺧ ﻦﯾا ﻞﺜﻣ یاﯽﻧاﺮﻨﺨﺳ یراﺰﻓامﺮﻧ ﺲﻧاﺮﻔﻨﻛ ﻚﯾ رد ﯽﺴﻛ ﺪﻌﺑ لﺎﺳ ۱۹ ﺖﺳرد ۲۰۳۵ لﺎﺳ رد', faGd::render('در سال ۲۰۳۵ درست ۱۹ سال بعد کسی در یک کنفرانس نرم‌افزاری سخنرانی‌ای مثل این خواهد کرد. "سلام، من ۴۲ سال دارم و این داستان من است". امیدوارم یکی از شما این سخنرانی را کند و گرنه لابد یک بات هوش مصنوعی این کار را خواهد کرد. در این سخنرانی گزارشی از وقایع سال ۲۰۱۶ خواهید داد. مثلا این که ۲۰۱۶ سالی بود که David Bowie، Umberto Eco، Gato Barbieri و Johan Cruyff در گذشتند یا SQL Server برای اولین بار روی لینوکس ارايه شد یا Google AlphaGo برای اولین بار یک قهرمان Go را شکست داد یا اسناد پاناما و دیتابیس اطلاعات شهروندی ترکیه در یک روز درز کردند یا گوگل امکان استفاده از Swift روی اندروید را بررسی کرد یا این که آخرین سالی بود که مردم چیز به درد نخوری به اسم حریم خصوصی داشتند. ۳ سال با مشکل سال ۲۰۳۸ فاصله خواهیم داشت و لابد مردم به خاطر آن نگران و عصبی خواهند بود. البته من نمی‌دانم تا ۱۹ سال دیگر چه اتفاقاتی خواهد افتاد اما می‌توانم به شما بگویم این سه اتفاق حتما خواهند افتاد.', true));

        // With Brackets
        $this->assertEquals("([<>])", faGd::render("([<>])", true));
        $this->assertEquals("«مﺎﻠﺳ»", faGd::render("«سلام»", true));
        $this->assertEquals("«مﺎﻠﺳ»", faGd::render("«سلام»", true));
        $this->assertEquals("(مﺎﻠﺳ)مﺎﻠﺳ", faGd::render("سلام(سلام)", true));
    }

    public function testNumber()
    {
        $this->assertEquals("۰", faGd::render("۰", true));
        $this->assertEquals("۰۰۰", faGd::render("000", true));
        $this->assertEquals("۱۰۰۰", faGd::render("1000", true));
        $this->assertEquals("۱۲۳", faGd::render("123", true));
        $this->assertEquals("۱۲۳", faGd::render("123", true));
        $this->assertEquals("۱۲۳۴۵۶۷۸۹۰", faGd::render("1234567890", true));
        $this->assertEquals("۱۲۳۴۵۶۷۸۹۰", faGd::render("۱۲۳۴۵۶۷۸۹۰", true));
        $this->assertEquals("۱۲۳۴۵۶", faGd::render("۱۲۳456", true));
    }

    public function testEnglish()
    {
        $this->assertEquals("ali", faGd::render("ali", true));
        $this->assertEquals("abcdefghijklmnopqrstuvwxyz", faGd::render("abcdefghijklmnopqrstuvwxyz", true));
        $this->assertEquals("ABCDEFGHOJKLMNOPQRSTUVWXYZ", faGd::render("ABCDEFGHOJKLMNOPQRSTUVWXYZ", true));
    }

    /*
	public function testKnowFail()
	{
		$this->assertEquals("(۱۰) مﺎﻠﺳ", faGd::render("سلام (10)", true)); 
		$this->assertEquals("(ali) مﺎﻠﺳ", faGd::render("سلام(ali)", true));
		// $this->assertEquals("whats up (x) ! (؟ﯽﺑﻮﺧ)مﺎﻠﺳ", faGd::render("سلام(خوبی؟) whats up (x) !", true));		 
		// $this->assertEquals("؟ ( ﺖﺴﻧاﻮﺗ ﯽﻣ ali yousefi ﻪﻛ ﯽﻟﺎﺣ رد) مﺎﻠﺳ", faGd::render("سلام (در حالی که ali yousefi می توانست ) ؟", true)); 		
		// $this->assertEquals("", faGd::render(, true)); 
	}
	*/
}
