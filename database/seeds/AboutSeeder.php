<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = array(
            ['“Jadyly Ýaprak” – hususy kärhanasy barada','Об частном предприятие “Jadyly Ýaprak” ','About private enterprise “Jadyly Yaprak"','“Jadyly Ýaprak” – hususy kärhanasy ýurdumyzda ulag-logistika ugurynda 16 ýyldan gowrak iş tejribesi bolan ýokary derejeli hünärmenler tarapyndan 2021-nji ýylda döredilen täze kompaniýadyr. Kompaniýada howa, awtoulag, deňiz we demir ýol ulaglary arkaly dünýäniň ähli künjeklerine ýük daşamak hyzmatlary amala aşyrylýar. Şeýle-de, biziň kompaniýamyz häzirki wagtda meýilnamalaýyn tertipde bütin dünýä boýunça ynamly ekspeditor hökmünde hem-de transport hyzmatlaryny amala aşyryjy kärhana hökmünde çykyş edýär.
Mundan başga-da, kompaniýamyz öz işgärleriniň tejribelerini has-da kämilleşdirmek maksatly okuw çärelerini yzygiderli geçirip durýar. Kärhanamyzyň iň esasy üns berýän temasy—müşderilerimiziň islegleriniň doly derejede kanagatlandyrylmagydyr. Bu biziň baş wezipämiz bolup durýar. Häzirki wagtda bu ýerde bu ugra degişli birnäçe netijeli işler geçirilýär.
', '“Jadyly Ýaprak” – новая компания, основанная в 2021 году высококвалифицированным специалистом с более чем 16-летним опытом работы в сфере транспорта и логистики в нашей стране. Компания осуществляет грузоперевозки во все точки мира воздушным, автомобильным, морским и железнодорожным транспортом. В настоящее время наша компания также работает как надежный экспедитор по всему миру и как компания, предоставляющая транспортные услуги. Кроме того, наша компания регулярно проводит обучающие мероприятия для дальнейшего повышения опыта своих сотрудников. Основным направлением нашей деятельности является полное удовлетворение потребностей наших клиентов. Это наша основная задача. В настоящее время здесь ведется ряд плодотворных работ.', '“Jadyly Ýaprak” is a new company founded in 2021 by a highly qualified specialist with over 16 years of experience in the field of transport and logistics in our country. The company carries out cargo transportation to all points of the world by air, road, sea and rail. At present, our company also works as a reliable forwarder worldwide and as a company providing transportation services. In addition, our company regularly conducts training events to further improve the experience of its employees. The main direction of our activity is the complete satisfaction of the needs of our customers. This is our main task. At present, a number of fruitful works are being carried out here.','about/port1.webp','']
        );
        foreach ($objects as $object) {
            $obj = new App\About();
            $obj->title_tm = $object[0];
            $obj->title_ru = $object[1];
            $obj->title_en = $object[2];
            $obj->name_tm = $object[3];
            $obj->name_ru = $object[4];
            $obj->name_en = $object[5];
            $obj->image= $object[6];
            $obj->image_index = $object[7];
            $obj->save();
        }
    }
}
