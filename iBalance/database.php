<?php

class company {
    public string $name;
    public string $positionOpen;
    public string $description;
    public int $stress;

    public function __construct(string $names, string $positionOpens, string $descriptions, int $stresses){
        $this->name = $names;
        $this->positionOpen = $positionOpens;
        $this->description = $descriptions;
        $this->stress = $stresses;
    }
}


$companies = array();


$companies[] = new company("TechGenius Inc.", "Software Engineer, Jakarta Barat", "TechGenius Inc. mengkhususkan diri dalam mengembangkan solusi perangkat lunak inovatif untuk berbagai industri.", 0);
$companies[] = new company("InnovateTech Solutions", "Data Analyst, Bandung", "InnovateTech Solutions memanfaatkan analisis data untuk menghasilkan wawasan dan inovasi untuk bisnis.", 0);
$companies[] = new company("BrightIdeas Corp.", "UX Designer, Banten", "BrightIdeas Corp. fokus pada menciptakan pengalaman pengguna yang menarik untuk produk dan layanan digital.", 0);


$companies[] = new company("CalmMind Consulting", "Project Manager, Jakarta Utara", "CalmMind Consulting menawarkan layanan manajemen proyek dengan fokus pada menjaga ketenangan dan kejelasan.", 1);
$companies[] = new company("GreenValley Enterprises", "Marketing Specialist, Depok", "GreenValley Enterprises mempromosikan praktik ramah lingkungan dan solusi berkelanjutan melalui pemasaran strategis.", 1);
$companies[] = new company("TranquilTech Innovations", "Customer Support Representative, Depok", "TranquilTech Innovations menyediakan layanan dukungan pelanggan yang andal dalam lingkungan yang tenang dan mendukung.", 1);


$companies[] = new company("SereneSoft Solutions", "Software Developer, Malang", "SereneSoft Solutions menciptakan budaya kerja yang damai sambil memberikan solusi perangkat lunak inovatif.", 2);
$companies[] = new company("Relaxation Systems Inc.", "HR Manager, Senayan", "Relaxation Systems Inc. memprioritaskan kesejahteraan karyawan dan menawarkan solusi relaksasi untuk meredakan stres.", 2);
$companies[] = new company("HarmonyTech Enterprises", "Quality Assurance Analyst, tanggerang", "HarmonyTech Enterprises memastikan kualitas produk dan keandalan melalui proses jaminan kualitas yang teliti.", 2);


$companies[] = new company("ZenithTech Group", "Cybersecurity Analyst, Surabaya", "ZenithTech Group mengkhususkan diri dalam solusi keamanan cyber untuk melindungi aset digital dan memastikan ketenangan pikiran.", 3);
$companies[] = new company("Tranquility Solutions", "Product Manager, Padang", "Tranquility Solutions menawarkan lingkungan kerja yang tenang dan tantangan menarik bagi manajer produk.", 3);
$companies[] = new company("Serenity Innovations", "Software Architect, Aceh", "Serenity Innovations memberdayakan arsitek perangkat lunak untuk merancang solusi inovatif dalam suasana yang damai.", 3);


$companies[] = new company("PeacefulTech Inc.", "Chief Technology Officer, Bekasi", "PeacefulTech Inc. memimpin dalam menciptakan kemajuan teknologi yang damai untuk dunia yang harmonis.", 4);
$companies[] = new company("CalmWaters Technologies", "Data Scientist, Bogor", "CalmWaters Technologies menyediakan lingkungan kerja yang tenang dan kesempatan ilmu data yang canggih.", 4);
$companies[] = new company("Tranquil Innovations", "Senior Developer, Bandung", "Tranquil Innovations menciptakan budaya kerja yang damai dan memberdayakan pengembang senior untuk berinovasi.", 4);


$stress_description = array();

$stress_description[] = "Berdasarkan hasil tes, kami melihat bahwa Anda memiliki tingkat toleransi yang sangat rendah terhadap tekanan dan stres. Anda cenderung merasa kewalahan oleh situasi yang menantang dan mungkin mengalami kesulitan dalam menjaga keseimbangan emosional Anda. Kami merekomendasikan perusahaan-perusahaan yang menawarkan bantuan khusus dalam mengatasi stres dan menawarkan lingkungan kerja yang lebih tenang.";
$stress_description[] = "Berdasarkan hasil tes, kami melihat bahwa Anda memiliki tingkat toleransi yang rendah terhadap tekanan dan stres. Anda mungkin merasa terbebani oleh situasi yang menantang dan kesulitan untuk tetap fokus dan produktif. Kami merekomendasikan perusahaan-perusahaan yang menawarkan lingkungan kerja yang mendukung dan program kesehatan mental untuk membantu Anda mengelola stres.";
$stress_description[] = "Berdasarkan hasil tes, kami melihat bahwa Anda memiliki tingkat toleransi yang moderat terhadap tekanan dan stres. Anda mungkin menghadapi kesulitan dalam menjaga keseimbangan emosional Anda di bawah tekanan tinggi, tetapi masih mampu menangani situasi yang menantang dengan cukup baik. Kami merekomendasikan perusahaan-perusahaan yang menawarkan dukungan yang baik dan peluang untuk pengembangan pribadi.";
$stress_description[] = "Berdasarkan hasil tes, kami melihat bahwa Anda memiliki toleransi yang cukup baik terhadap tekanan dan stres. Anda memiliki kemampuan untuk mengatasi tantangan dengan cukup baik dan menunjukkan keberhasilan dalam menjaga keseimbangan dalam situasi yang menantang. Kami merekomendasikan perusahaan-perusahaan yang menawarkan lingkungan kerja yang stabil dan dukungan tim yang kuat untuk membantu Anda mencapai potensi penuh Anda.";
$stress_description[] = "Berdasarkan hasil tes, kami melihat bahwa Anda memiliki tingkat toleransi mental yang tinggi terhadap tekanan dan stres. Anda cenderung mampu menjaga keseimbangan emosional Anda di tengah situasi yang menantang, serta memiliki kemampuan untuk tetap fokus dan produktif. Dengan demikian, kami merekomendasikan perusahaan-perusahaan yang menawarkan lingkungan kerja yang dinamis dan memungkinkan Anda untuk terus berkembang tanpa merasa terlalu tertekan.";




