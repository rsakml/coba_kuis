<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogDetail')->insert([
            [
            'title' => 'Copywriting',
            'slug' => 'copywriting',
            'content' => 'Copywriting is all about the power of writing persuasively—whether in the headline on a company’s homepage, a social media post advertising your company’s services, or a marketing email to your customers announcing a new promotion.'
            ],
            [
                'title' => 'Search Engine Optimization',
                'slug' => 'search-engine-optimization',
                'content' => 'SEO experts know how to discern which search queries are important to their buyers and understand how to create content that will rank at or near the top of a search engine for key search terms. Crafting content is only half the battle, though. You also have to understand the technical side of SEO, such as how to structure a webpage and what to put in the URL.'
            ],
            [
                'title' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
                'content' => 'Social media marketing gives you the opportunity to build a following for your brand, reach your audience en masse, and retarget prospects and customers with tailored promotions and content that might interest them.'
            ],
            [
                'title' => 'Marketing Automation and Technology',
                'slug' => 'marketing-automation-and-technology',
                'content' => 'Digital marketers need marketing automation tools to maximize their powers. So it’s vital to have good working knowledge of the tools you wield to reach and convert your audience, to understand what they can do for you, and to know how and when to use them.'
            ],
            [
                'title' => 'Audience Building',
                'slug' => 'audience-building',
                'content' => 'Audience building is the art of attracting your ideal buyers to your brand and maintaining their attention using content and digital communication channels such as email and social media.'
            ],
            [
                'title' => 'Project Management',
                'slug' => 'project-management',
                'content' => 'Digital marketing requires a great deal of coordination in order to be effective. So in addition to creativity, you’ll need to stay organized and work well with others. You have to know how to take a project—whether it’s a blog post, an ebook, or a website redesign—from ideation to completion in a speedy and effective manner.'
            ],
            [
                'title' => 'Data Analysis',
                'slug' => 'data-analysis',
                'content' => 'Data analysis is the linchpin to every other digital marketing skill set because it enables you to objectively measure your impact. You can see exactly how many people are engaging with your websites, email marketing campaigns, social media posts, digital ads—you name it. And you can glean insight into how they’re reacting and interacting, which will inform your strategy the next time around.'
            ],
            [
                'title' => 'Conversion Rate Optimization',
                'slug' => 'conversion-rate-optimization',
                'content' => 'The best conversion rate optimizers know their way around heat mapping tools like HotJar (which show you where website visitors are clicking on a page) and have a deeper-than-usual understanding of Google Analytics.'
            ],
            [
                'title' => 'Getting Shit Done',
                'slug' => 'getting-shit-done',
                'content' => 'When you work in a role where you’re constantly being held accountable for various goals and targets and in a field that’s constantly changing, you have to be able to take initiative and get results.'
            ]
        ]);
    }
}
