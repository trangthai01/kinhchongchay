<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'trangthai01@gmail.com',
                'password' => bcrypt('muaxuan@2'),
                'is_admin' => true
            ]
        ]);

        //table Projects
        DB::table('projects')->insert([
            [
                'project_id'=>'20230001',            
                'project_name'=>'Louvre Museum',      
                'project_eng_name'=>'Louvre Museum',    
				'location' => 'Abu Dhabi - United Arab Emirates',
				'owner' => 'Jean Nouvel Ateliers',
				'client' => 'Folcra Beach',
				'project_info' => 'Bullet-Resistance FB5 Hinge Door Systems / Fire Rated Steelfire STB80 EI90 Fixed Partition, Hinge Door & Pivot Door Systems',
                'image'=>'project1-main.jpg',      
                'image_oth_1'=>'project1-oth-1.jpg', 
				'image_oth_2'=>'project1-oth-2.jpg', 
				'image_oth_3'=>'project1-oth-3.jpg', 
				'image_oth_4'=>'project1-oth-4.jpg', 
				'image_oth_5'=>'project1-oth-5.jpg', 
				'image_thumbnail'=>'project1-main.jpg',      
                'image_oth_1_thumbnail'=>'project1-oth-1.jpg', 
				'image_oth_2_thumbnail'=>'project1-oth-2.jpg', 
				'image_oth_3_thumbnail'=>'project1-oth-3.jpg', 
				'image_oth_4_thumbnail'=>'project1-oth-4.jpg', 
				'image_oth_5_thumbnail'=>'project1-oth-5.jpg', 
                'meta_desc' => '',          
                'use_yn'=>true, 
                'slug' => 'project-20230001'
            ],
			[
                'project_id'=>'20230002',            
                'project_name'=>'The Address Residence Sky View Dubai',      
                'project_eng_name'=>'The Address Residence Sky View Dubai',    
				'location' => 'Dubai - United Arab Emirates',
				'owner' => 'Emaar',
				'client' => 'Arabian Construction Company',
				'project_info' => 'Bespoke Steel Folding Sliding Doors And Stacking Sliding Doors',
                'image'=>'project2-main.jpg',      
                'image_oth_1'=>'project2-oth-1.jpg', 
				'image_oth_2'=>'project2-oth-2.jpg', 
				'image_oth_3'=>'project2-oth-3.jpg', 
				'image_oth_4'=>'project2-oth-4.jpg', 
				'image_oth_5'=>'project2-oth-5.jpg', 
				'image_thumbnail'=>'project2-main.jpg',      
                'image_oth_1_thumbnail'=>'project2-oth-1.jpg', 
				'image_oth_2_thumbnail'=>'project2-oth-2.jpg', 
				'image_oth_3_thumbnail'=>'project2-oth-3.jpg', 
				'image_oth_4_thumbnail'=>'project2-oth-4.jpg', 
				'image_oth_5_thumbnail'=>'project2-oth-5.jpg', 
                'meta_desc' => '',          
                'use_yn'=>true, 
                'slug' => 'project-20230002'
            ],
			[
                'project_id'=>'20230003',            
                'project_name'=>'Opera Downtown',      
                'project_eng_name'=>'Opera Downtown',    
				'location' => 'Dubai - United Arab Emirates',
				'owner' => 'Janus Rostock - A TKINS',
				'client' => '',
				'project_info' => 'Fire Rated Alufire AS85 EI60 Fixed Partition & Hinge Door Systems',
                'image'=>'project3-main.jpg',      
                'image_oth_1'=>'project3-oth-1.jpg', 
				'image_oth_2'=>'project3-oth-2.jpg', 
				'image_oth_3'=>'project3-oth-3.jpg', 
				'image_oth_4'=>'project3-oth-4.jpg', 
				'image_oth_5'=>'project3-oth-5.jpg', 
				'image_thumbnail'=>'project3-main.jpg',      
                'image_oth_1_thumbnail'=>'project3-oth-1.jpg', 
				'image_oth_2_thumbnail'=>'project3-oth-2.jpg', 
				'image_oth_3_thumbnail'=>'project3-oth-3.jpg', 
				'image_oth_4_thumbnail'=>'project3-oth-4.jpg', 
				'image_oth_5_thumbnail'=>'project3-oth-5.jpg', 
                'meta_desc' => '',          
                'use_yn'=>true, 
                'slug' => 'project-20230003'
            ],
			[
                'project_id'=>'20230004',            
                'project_name'=>'Expo 2020',      
                'project_eng_name'=>'Expo 2020',    
				'location' => 'Dubai - United Arab Emirates',
				'owner' => '',
				'client' => '',
				'project_info' => 'AluFire Double Action Pivot Glass Door',
                'image'=>'project4-main.jpg',      
                'image_oth_1'=>'project4-oth-1.jpg', 
				'image_oth_2'=>'project4-oth-2.jpg', 
				'image_oth_3'=>'project4-oth-3.jpg', 
				'image_oth_4'=>'project4-oth-4.jpg', 
				'image_oth_5'=>'project4-oth-5.jpg', 
				'image_thumbnail'=>'project4-main.jpg',      
                'image_oth_1_thumbnail'=>'project4-oth-1.jpg', 
				'image_oth_2_thumbnail'=>'project4-oth-2.jpg', 
				'image_oth_3_thumbnail'=>'project4-oth-3.jpg', 
				'image_oth_4_thumbnail'=>'project4-oth-4.jpg', 
				'image_oth_5_thumbnail'=>'project4-oth-5.jpg', 
                'meta_desc' => '',          
                'use_yn'=>true, 
                'slug' => 'project-20230004'
            ],
			[
                'project_id'=>'20230005',            
                'project_name'=>'Dubai International Financial Centre',      
                'project_eng_name'=>'Dubai International Financial Centre',    
				'location' => 'Dubai - United Arab Emirates',
				'owner' => '',
				'client' => 'Tech Alu Glass',
				'project_info' => 'Fire Rated Steelfire STB80 EI120 Walkable Skylight Systems',
                'image'=>'project5-main.jpg',      
                'image_oth_1'=>'project5-oth-1.jpg', 
				'image_oth_2'=>'project5-oth-2.jpg', 
				'image_oth_3'=>'project5-oth-3.jpg', 
				'image_oth_4'=>'project5-oth-4.jpg', 
				'image_oth_5'=>'project5-oth-5.jpg', 
				'image_thumbnail'=>'project5-main.jpg',      
                'image_oth_1_thumbnail'=>'project5-oth-1.jpg', 
				'image_oth_2_thumbnail'=>'project5-oth-2.jpg', 
				'image_oth_3_thumbnail'=>'project5-oth-3.jpg', 
				'image_oth_4_thumbnail'=>'project5-oth-4.jpg', 
				'image_oth_5_thumbnail'=>'project5-oth-5.jpg', 
                'meta_desc' => '',          
                'use_yn'=>true, 
                'slug' => 'project-20230005'
            ]
        ]);

		//table Applications
        DB::table('applications')->insert([
            [
				'name'=>'Hệ Cửa Đẩy', 
				'meta_desc' => '',       
                'use_yn'=>true, 
			],
			[
				'name'=>'Hệ Cửa Trượt', 
				'meta_desc' => '',       
                'use_yn'=>true, 
			],
			[
				'name'=>'Hệ Vách Kính', 
				'meta_desc' => '',       
                'use_yn'=>true, 
			]
			
		]);

		//table Certification
        DB::table('certifications')->insert([
			[
				'name'=>'Thomas Bell Wright', 
				'meta_desc' => 'Fire-Resistance tests development and execution Laboratory.',
				'image' => 'Lab-1-TB.jpg',
				'image_thumbnail' => 'Lab-1-TB-thumbnail.jpg',
			],
			[
				'name'=>'Applus', 
				'meta_desc' => 'Fire-Resistance tests development and execution Laboratory.',
				'image' => 'Lab-2-applus.jpg',
				'image_thumbnail' => 'Lab-2-applus-thumbnail.jpg',
			],
			[
				'name'=>'Aitex', 
				'meta_desc' => 'Bullet-Resistance tests development and execution Laboratory.',
				'image' => 'Lab-3-Aitex.jpg',
				'image_thumbnail' => 'Lab-3-Aitex-thumbnail.jpg',
			],
			[
				'name'=>'Giordano', 
				'meta_desc' => 'Burglar-Resistance tests development and execution Laboratory.',
				'image' => 'Lab-4-giordano.jpg',
				'image_thumbnail' => 'Lab-4-giordano-thumbnail.jpg',
			],
		]);

		//table Product Categories
        DB::table('product_categories')->insert([
            [
				'category_id'=>'1', 
				'category_name' => 'Hệ kính chống cháy E & EW',       
				'parent_category_id' => '',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'2', 
				'category_name' => 'Hệ kính chống cháy EI',       
				'parent_category_id' => '',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'11', 
				'category_name' => 'Khung thép sơn tĩnh điện',       
				'parent_category_id' => '1',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'21', 
				'category_name' => 'Khung thép sơn tĩnh điện',       
				'parent_category_id' => '2',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'22', 
				'category_name' => 'Hệ khung nhôm',       
				'parent_category_id' => '2',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'23', 
				'category_name' => 'Hệ kính không khung',       
				'parent_category_id' => '2',
                'use_yn'=>true, 
			],
			[
				'category_id'=>'24', 
				'category_name' => 'Hệ gỗ - Kính chống cháy',       
				'parent_category_id' => '2',
                'use_yn'=>true, 
			]
			
		]);

		//table Product
        DB::table('products')->insert([
            [
				'product_id'=>'1', 
				'category_id' => '11',       
				'product_name' => 'Cửa kính chống cháy hệ E & EW',
                'use_yn'=>true
			],
			[
				'product_id'=>'2', 
				'category_id' => '11',       
				'product_name' => 'Vách kính chống cháy hệ E & EW',
                'use_yn'=>true
			],
			[
				'product_id'=>'3', 
				'category_id' => '11',       
				'product_name' => 'Mái kính chống cháy hệ E & EW',
                'use_yn'=>true
			],
			[
				'product_id'=>'4', 
				'category_id' => '21',       
				'product_name' => 'Cửa kính chống cháy hệ EI',
                'use_yn'=>true
			],
			[
				'product_id'=>'5', 
				'category_id' => '21',       
				'product_name' => 'Vách kính chống cháy hệ EI',
                'use_yn'=>true
			],
			[
				'product_id'=>'6', 
				'category_id' => '21',       
				'product_name' => 'Mái kính chống cháy hệ EI',
                'use_yn'=>true
			],
			[
				'product_id'=>'7', 
				'category_id' => '22',       
				'product_name' => 'Cửa khung nhôm kính chống cháy',
                'use_yn'=>true
			],
			[
				'product_id'=>'8', 
				'category_id' => '22',       
				'product_name' => 'Vách kính khung nhôm hệ chống cháy',
                'use_yn'=>true
			],
			[
				'product_id'=>'9', 
				'category_id' => '22',       
				'product_name' => 'Mái kính khung nhôm hệ chống cháy',
                'use_yn'=>true
			]
		]);

		//table Product
        DB::table('product_subs')->insert([
            [
				'product_sub_id'=>'1', 
				'product_id' => '1',       
				'product_sub_name' => 'Cửa mở quay, bản lề sàn',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'2', 
				'product_id' => '1',       
				'product_sub_name' => 'Cửa mở 1 chiều bàn lề lá',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'3', 
				'product_id' => '1',       
				'product_sub_name' => 'Cửa lùa',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'4', 
				'product_id' => '1',       
				'product_sub_name' => 'Cửa sổ',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'1', 
				'product_id' => '4',       
				'product_sub_name' => 'Cửa mở quay, bản lề sàn',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'2', 
				'product_id' => '4',       
				'product_sub_name' => 'Cửa mở 1 chiều bàn lề lá',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'3', 
				'product_id' => '4',       
				'product_sub_name' => 'Cửa lùa',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'4', 
				'product_id' => '4',       
				'product_sub_name' => 'Cửa sổ',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'1', 
				'product_id' => '7',       
				'product_sub_name' => 'Cửa khung nhôm kính chống cháy, bản lề sàn',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'2', 
				'product_id' => '7',       
				'product_sub_name' => 'Cửa khung nhôm kính chống cháy, bản lề lá',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'3', 
				'product_id' => '7',       
				'product_sub_name' => 'Cửa lùa khung nhôm kính chống cháy',
                'use_yn'=>true
			],
			[
				'product_sub_id'=>'4', 
				'product_id' => '7',       
				'product_sub_name' => 'Cửa sổ khung nhôm kính chống cháy',
                'use_yn'=>true
			],
		]);
    }
}
