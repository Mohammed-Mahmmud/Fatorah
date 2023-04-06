<?php

namespace Database\Seeders;
use App\Models\Sections;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sections::updateorcreate(['section_name' => 'بنك مصر'], [
			'section_name' => 'بنك مصر',
			'description' => 'أول أضافة',
            'created_by'  => 'mohamed' 
		]);
        Sections::updateorcreate(['section_name' => 'بنك القاهره'], [
			'section_name' => 'بنك القاهره',
			'description' => 'ثاني أضافة',
            'created_by'  => 'mohamed'
		]);
        Sections::updateorcreate(['section_name' => 'بنك اسكندريه'], [
			'section_name' => 'بنك اسكندريه',
			'description' => 'ثالث أضافة',
            'created_by'  => 'mohamed'
		]);
    }
}
