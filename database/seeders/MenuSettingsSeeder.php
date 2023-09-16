<?php

namespace Database\Seeders;

use App\Models\MenuSettings;
use Illuminate\Database\Seeder;

class MenuSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'en_title' => 'Home',
                'bn_title' => 'হোম',
                'ar_title' => 'بيت',
                'url' => '/',
                'status' => true,
                'order' => 0,
                'default' => true,
                'for' => ['public', 'employee', 'candidate'],
            ],
            [
                'en_title' => 'Find Job',
                'bn_title' => 'চাকরী খোজা',
                'ar_title' => 'ابحث عن وظيفة',
                'url' => '/jobs',
                'status' => true,
                'order' => 1,
                'default' => true,
                'for' => ['public', 'candidate'],
            ],
            [
                'en_title' => 'Candidates',
                'bn_title' => 'প্রার্থী',
                'ar_title' => 'مرشحين',
                'url' => '/candidates',
                'status' => true,
                'order' => 2,
                'default' => true,
                'for' => ['public', 'employee'],
            ],
            [
                'en_title' => 'Companies',
                'bn_title' => 'কোম্পানিগুলো',
                'ar_title' => 'شركات',
                'url' => '/employers',
                'status' => true,
                'order' => 3,
                'default' => true,
                'for' => ['public', 'candidate'],
            ],
            [
                'en_title' => 'Blog',
                'bn_title' => 'ব্লগ',
                'ar_title' => 'مدونة',
                'url' => '/posts',
                'status' => true,
                'order' => 4,
                'default' => true,
                'for' => ['public'],
            ],
            [
                'en_title' => 'Pricing',
                'bn_title' => 'মূল্য নির্ধারণ',
                'ar_title' => 'التسعير',
                'url' => '/plans',
                'status' => true,
                'order' => 5,
                'default' => true,
                'for' => ['public', 'employee'],
            ],
            [
                'en_title' => 'Dashboard',
                'bn_title' => 'ড্যাশবোর্ড',
                'ar_title' => 'لوحة القيادة',
                'url' => '/company/dashboard',
                'status' => true,
                'order' => 6,
                'default' => true,
                'for' => ['employee'],
            ],
            [
                'en_title' => 'My Job',
                'bn_title' => 'আমার কাজ',
                'ar_title' => 'عملي',
                'url' => '/company/my-jobs',
                'status' => true,
                'order' => 7,
                'default' => true,
                'for' => ['employee'],
            ],
            [
                'en_title' => 'Dashboard',
                'bn_title' => 'ড্যাশবোর্ড',
                'ar_title' => 'لوحة القيادة',
                'url' => '/candidate/dashboard',
                'status' => true,
                'order' => 8,
                'default' => true,
                'for' => ['candidate'],
            ],
            [
                'en_title' => 'Job Alert',
                'bn_title' => 'চাকরির সতর্কীকরণ',
                'ar_title' => 'حالة تأهب وظيفة',
                'url' => '/candidate/job/alerts',
                'status' => true,
                'order' => 9,
                'default' => true,
                'for' => ['candidate'],
            ],
        ];

        foreach ($menus as $key => $item) {

            $menu = new MenuSettings();
            $menu->url = $item['url'];
            $menu->status = $item['status'];
            $menu->default = $item['default'];
            $menu->order = $item['order'];
            $menu->for = json_encode($item['for']);
            $menu->save();

            $menu->translateOrNew('en')->title = $item['en_title'];
            $menu->translateOrNew('bn')->title = $item['bn_title'];
            $menu->translateOrNew('ar')->title = $item['ar_title'];
            $menu->save();
        }
    }
}
