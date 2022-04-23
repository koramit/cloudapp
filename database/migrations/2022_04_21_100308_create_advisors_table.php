<?php

use App\Models\Advisor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->collation('th-x-icu'); // mysql => utf8mb4_thai_520_w2
            $table->timestamps();
        });

        $names = collect([
            ["name" => "จินตนา ศิรินาวิน"],
            ["name" => "ดำรัส ตรีสุโกศล"],
            ["name" => "ธัญญารัตน์ ธีรพรเลิศรัฐ"],
            ["name" => "นพดล ศิริธนารัตนกุล"],
            ["name" => "นลินี อัศวโภคี"],
            ["name" => "นันทา มานะเนตร์"],
            ["name" => "ประดิษฐ์ ปัญจวีณิน"],
            ["name" => "ประพาฬ ยงใจยุทธ"],
            ["name" => "ยงยุทธ สหัสกุล"],
            ["name" => "รังสรรค์ ปุษปาคม"],
            ["name" => "วรรณี นิธิยานันท์"],
            ["name" => "วันชัย วนะชิวนาวิน"],
            ["name" => "วิเชียร ทองแตง"],
            ["name" => "ศศิประภา บุญญพิสิฏฐ์"],
            ["name" => "สง่า นิลวรางกูร"],
            ["name" => "สถาพร มานัสสถิตย์"],
            ["name" => "สมหวัง ด่านชัยวิจิตร"],
            ["name" => "สมเกียรติ วสุวัฏฏกุล"],
            ["name" => "สวัสดิ์ หิตะนันท์"],
            ["name" => "สาธิต วรรณแสง"],
            ["name" => "สุคนธ์ วิสุทธิพันธ์"],
            ["name" => "สุชัย เจริญรัตนกุล"],
            ["name" => "สุพัฒน์ วาณิชย์การ"],
            ["name" => "สุมิตร วัฒนวิจารณ์"],
            ["name" => "สุรพล อิสรไกรศีล"],
            ["name" => "สุรพล กอบวรรธนะกุล"],
            ["name" => "สุรศักดิ์ นิลกานุวงศ์"],
            ["name" => "อภิชาติ วิชญาณรัตน์"],
            ["name" => "อมร ลีลารัศมี"],
            ["name" => "อรพรรณ ชินะภัค"],
            ["name" => "อรรถ นานา"],
            ["name" => "เจียมจิตต์ ดำรงศักดิ์"],
            ["name" => "เติมชัย ไชยนุวัติ"],
            ["name" => "เล็ก ปริวิสุทธิ์"],
            ["name" => "เอกพล อัจฉริยะประสิทธิ์"],
            ["name" => "ไพโรจน์ สินลารัตน์"],
        ]);

        $timestamps = [
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $advisors = $names->map(fn ($n) => $n + $timestamps)->all();

        Advisor::insert($advisors);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advisors');
    }
};
