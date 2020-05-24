<?php require view('static/header'); ?>
<?php if ($id == 1) : ?>
    <div class="studies">
        <h2>Chernozem</h2>
        <h3>Özet</h3>
        <p>Chernozem projesi Türkiye’de gerçekleştirilen tarıma destek vermek için geliştirilmiş bir projedir. Bu raporda projenin sahip olduğu ve ileride olacağı temel özelliklerden bahsedilmektedir. Projemiz şimdilik panel ve prototip olmak üzere iki
            kısımdan oluşmaktadır. Panel kısmı HTML, CSS, PHP dilleri ve Laravel Framework’ü kullanılarak geliştirilmiş bir web uygulamasıdır. Prototip kısmı ise Arduino Uno ve birkaç sensör kullanılarak gerçekleştirilmiştir. Ayrıca veri tabanı olarak
            da panelde kullanılacak veriler için MySQL, Arduino’nun iletişimi ve verileri işlemesi için kullanacağımız veri tabanını ise FireBase olarak belirledik. Proje ismini ise kara toprak olarak da tanınan, dünyanın en verimli toprağı olan ve
            ülkemizde de oldukça bulunan toprağın isminin ingilizce karşılığını kullanmak istedik. </p>
        <h3>Problemin Tanımı</h3>
        <p>Türkiye’de bulunan zengin topraklar ve iklimler ülkemizin tarıma oldukça elverişli olduğunu göstermektedir fakat ülkemizde çiftçilere emeğinin karşılığı tam olarak verilememektedir. Büyük arazilerin kontrolü; zaman ve insan gücü açısından
            gereksiz harcamalara neden olmuştur. Ayrıca üretimde gerçekleşen su, ilaç ve gübre gibi kaynakların gereksiz ve yanlış kullanımı israfa yol açmaktadır. Durum böyle olunca da köylerde yaşayan genç nüfus emeğinin karşılığını alabilmek için
            tarımı bırakıp büyük şehirlere göç etmeye başlamıştır ve ülkemiz tarım alanında gerilemiştir.</p>
        <h3>Çözüm</h3>
        <p>Projemiz tarımda üretilecek olan bitkilerin kontrolünü yapmaktadır. Ülkemiz tarım açısından oldukça zengin olmasından dolayı bu projemizi bir prototip olarak geliştirmek yerine ülkenin her bölgesine uyabilecek dinamik bir yapı geliştirdik.
            Hazırladığımız panel sayesinde kullanıcılar tarım yapacakları alanları belirleyerek kullanması gerekecek olan kitleri kullanıcılara sunuyoruz. Kullanıcılar önerdiğimiz kitlere ek olarak kendileri de istedikleri kitleri paketlerine ekleyebilirler.
            Kullanıcılar paketlere karar verip satın aldıktan sonra kurulum aşamasını gerçekleştiriyoruz. Kurulumu tamamladıktan sonra ekilen bitkilerde ve arazide ısı, nem, kamera, toprak gibi sensörler işlenerek çıkan değerlere göre havalandırma,
            ilaçlama, sulama, gübreleme gibi eylemler gerçekleştirilir. Bu sayede çiftçiye daha az iş düşmektedir ve çiftçi zaman ve güç açısından tasarruf edebilmektedir.</p>
    </div>

<?php elseif ($id == 2) : ?>
    <div class="studies">
        <h2>Mobilya Otomasyonu</h2>
        <h3>Özet</h3>
        <p>Mobilya otomasyonu genellikle bir mobilya mağazasının ürün giriş çıkış, stok takip gibi teknik konularda mobilya mağazası sahiplerine ve çalışanlarına kolaylık sağlamaktadır. Bu raporda mobilya mağazalarının kolaylıkla kullanabileceği bir
            mobilya otomasyonu anlatılmıştır. Proje C# koduyla yazılıp admin paneli ve veri girişi paneli olarak 2 kısımdan oluşmaktadır. Veri tabanı platformu olarak da MySql platformu kullanılmıştır.
            <h3>Problemin Tanımı</h3>
            <p>Mobilya mağazalarının en çok ihtiyaç duyduğu şeylerden bazıları da ellerindeki ürünlerinin bilgileri hakkında bilgi sahibi olmak, yeni ürün giriş çıkış bilgilerini saklayabilmektir, gelir gider durumlarını bilebilmek ve stok takibi yapabilmektir.
                Bu bilgilere kolay ve hızlı bir şekilde sahip olmaları da çok önemlidir. Bizim geliştirdiğimiz bu uygulama bu sorunu tamamıyla çözüp bütün mobilya mağazaları tarafından kolaylıkla kullanabilecektir. Bu sayede de şirketlerin refahı
                ve sürekliliği artacaktır.</p>
            <h3>Yapılan Araştırmalar</h3>
            <p>Projeyi geliştirirken karşılaştığımız sorunlarla uygun çözümü aramaya başladık. Çözümü bulduğumuzda önce çözümü anlayıp daha sonra kodumuza entegre ettik. Eğer araştırmalarımız sonucunda çözüme ulaşamadıysak kendimiz çözüm üzerinde düşünüp
                çözümler geliştirdik. Ayrıca kullanıcıların veri girişinde veya güncellemesinde çoğu verileri elle girmek yerine seçmelerini sağlayarak programda ve veri tabanında oluşabilecek hataları en aza indirdik.</p>
    </div>

<?php elseif ($id == 3) : ?>
    <div class="studies">
        <h2>Course Management System
        </h2>
        <h3>Özet</h3>
        <p>Course Management System genellikle üniversitelerin sınav değerlendirmelerini ve notlandırma konularında öğretmenlere ve yöneticilere kolaylık sağlamaktadır. Bu raporda üniversitelerin kolaylıkla kullanabileceği bir ders yönetim sistemi anlatılmıştır.
            Proje WPF, MSSQL kullanılıp C# koduyla yazılmıştır. Ayrıca proje Admin paneli ve öğretmen paneli olmak üzere 2 kısımdan oluşmaktadır.</p>
        <h3>Problemin Tanımı</h3>
        <p>Üniversitelerde öğretmenlerin en çok ihtiyaç duyduğu şeylerden bazıları da yaptığı sınavların kolay bir şekilde değerlendirilip, soruların hangi oranda doğru yapıldığı hangi kazanımın başarı oranının daha yüksek olduğu hakkında bilgi sahibi
            olmaktır. Bu bilgilere kolay ve hızlı bir şekilde sahip olmaları da çok önemlidir. Bizim geliştirdiğimiz bu uygulama bu sorunu tamamıyla çözüp bütün üniversitelerin fakültelerinde kolaylıkla kullanabilecektir. Bu sayede de üniversitelerin
            başarı oranı artacaktır.
        </p>
        <h3>Yapılan Araştırmalar</h3>
        <p>Projeyi geliştirirken karşılaştığımız sorunlarla uygun çözümü aramaya başladık. Çözümü bulduğumuzda önce çözümü anlayıp daha sonra kodumuza entegre ettik. Eğer araştırmalarımız sonucunda çözüme ulaşamadıysak kendimiz çözüm üzerinde düşünüp
            çözümler geliştirdik. Bu projeyi gerçekleştirirken kodumuzun düzenli ve okunabilir olmasına çok özen gösterdik çünkü projede görev yapacak yeni kişilerin projeyi anlaması ve geliştirme süresini en aza indirmek istedik. Ayrıca kullanıcılara
            hızlı bir program sunmak açısından performansı yüksek bir program geliştirdik.</p>
    </div>
    
<?php endif; ?>

<?php require view('static/footer') ?>