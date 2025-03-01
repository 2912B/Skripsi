<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailQuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $levelId = DB::table('email_levels')->insertGetId([
            'name' => 'Level 1',
            'description' => 'Apple',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('email_questions')->insertGetId([
            'email_level_id' => $levelId,
            'question_text' => 'Is this email legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('email_responses')->insert([
            [
                'email_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The email is from noreply@apple-support-verification.com, not an official Apple domain (e.g., @apple.com).',
                        'The email says "Dear User" instead of addressing you by name. Apple typically uses your name in official emails.',
                        'When hovering the button the link shown is not an official Apple website (The link can be seen in the left corner of your browser). Real Apple links always end with apple.com.',
                        'It pressures you with a 24-hour deadline and account suspension to make you act quickly without thinking.'
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The email is from noreply@apple-support-verification.com, not an official Apple domain (e.g., @apple.com).',
                        'The email says "Dear User" instead of addressing you by name. Apple typically uses your name in official emails.',
                        'When hovering the button the link shown is not an official Apple website (The link can be seen in the left corner of your browser). Real Apple links always end with apple.com.',
                        'It pressures you with a 24-hour deadline and account suspension to make you act quickly without thinking.'
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('email_levels')->insertGetId([
            'name' => 'Level 2',
            'description' => 'Microsoft',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('email_questions')->insertGetId([
            'email_level_id' => $levelId,
            'question_text' => 'Is this email legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('email_responses')->insert([
            [
                'email_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The sender’s email (billing-support@microsoft365-security.com) is not an official Microsoft domain (e.g., @microsoft.com or @office.com).',
                        'The email starts with "Hi User" instead of addressing you by name. Official Microsoft emails typically use your registered name.',
                        'The email creates a false sense of urgency to "Renew now", pressuring you to act without verifying.',
                        'When hovering the button "Renew Subscription", it showed a link that is not a legitimate Microsoft website (The link can be seen in the left corner of your browser). Real Microsoft links use trusted domains like microsoft.com.',
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The sender’s email (billing-support@microsoft365-security.com) is not an official Microsoft domain (e.g., @microsoft.com or @office.com).',
                        'The email starts with "Hi User" instead of addressing you by name. Official Microsoft emails typically use your registered name.',
                        'The email creates a false sense of urgency to "Renew now", pressuring you to act without verifying.',
                        'When hovering the button "Renew Subscription", it showed a link that is not a legitimate Microsoft website (The link can be seen in the left corner of your browser). Real Microsoft links use trusted domains like microsoft.com.',
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('email_levels')->insertGetId([
            'name' => 'Level 3',
            'description' => 'Google Drive',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('email_questions')->insertGetId([
            'email_level_id' => $levelId,
            'question_text' => 'Is this email legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('email_responses')->insert([
            [
                'email_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (share-docs@googledrive-notifications.com) is not from a legitimate Google domain (e.g., @google.com or @drive.google.com).',
                        'The email says "Hello User" instead of using your name. Legitimate Google emails often include your name or account details.',
                        'The "View Document" link mimics a real Google Drive link but is a fake domain (The link can be seen in the left corner of your browser when hovering the button). Official Google Drive links use drive.google.com.',
                        'Files from unknown sources may contain malware or viruses. Verify the sender’s identity and scan files with antivirus software before opening. Stay vigilant to ensure digital safety.'
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (share-docs@googledrive-notifications.com) is not from a legitimate Google domain (e.g., @google.com or @drive.google.com).',
                        'The email says "Hello User" instead of using your name. Legitimate Google emails often include your name or account details.',
                        'The "View Document" link mimics a real Google Drive link but is a fake domain (The link can be seen in the left corner of your browser when hovering the button). Official Google Drive links use drive.google.com.',
                        'Files from unknown sources may contain malware or viruses. Verify the sender’s identity and scan files with antivirus software before opening. Stay vigilant to ensure digital safety.'
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('email_levels')->insertGetId([
            'name' => 'Level 4',
            'description' => 'Paypal',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('email_questions')->insertGetId([
            'email_level_id' => $levelId,
            'question_text' => 'Is this email legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('email_responses')->insert([
            [
                'email_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (service@paypal.com) is an official and trusted PayPal domain. Legitimate PayPal emails come from addresses ending in @paypal.com.',
                        'The email addresses the recipient by name ("Hi Rehan"), which is a standard practice for genuine PayPal communications.',
                        'The email provides specific information, including the recipient ("Benny"), the payment amount ($78.49 USD), and a unique transaction ID ("8Y5129DJRM289474U"), consistent with authentic payment confirmation emails.',
                        'The "View Details" link points to a secure and official PayPal website (The link can be seen in the left corner of your browser when hovering the button).'
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (service@paypal.com) is an official and trusted PayPal domain. Legitimate PayPal emails come from addresses ending in @paypal.com.',
                        'The email addresses the recipient by name ("Hi Rehan"), which is a standard practice for genuine PayPal communications.',
                        'The email provides specific information, including the recipient ("Benny"), the payment amount ($78.49 USD), and a unique transaction ID ("8Y5129DJRM289474U"), consistent with authentic payment confirmation emails.',
                        'The "View Details" link points to a secure and official PayPal website (The link can be seen in the left corner of your browser when hovering the button).'
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('email_levels')->insertGetId([
            'name' => 'Level 5',
            'description' => 'Facebook',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('email_questions')->insertGetId([
            'email_level_id' => $levelId,
            'question_text' => 'Is this email legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('email_responses')->insert([
            [
                'email_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (notification@facebookmail.com) is an official Facebook domain. Facebook uses @facebookmail.com for its notifications.',
                        'The email addresses the recipient by name ("Hi Rehan"), which is consistent with Facebook’s practice of using personalized greetings in their communications.',
                        'The email provides clear and specific information about the activity (e.g., friend request, comment, and like), matching real notifications from Facebook.',
                        'The "See Notifications" link directs to a secure and official Facebook website (The link can be seen in the left corner of your browser when hovering the button).'
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The sender address (notification@facebookmail.com) is an official Facebook domain. Facebook uses @facebookmail.com for its notifications.',
                        'The email addresses the recipient by name ("Hi Rehan"), which is consistent with Facebook’s practice of using personalized greetings in their communications.',
                        'The email provides clear and specific information about the activity (e.g., friend request, comment, and like), matching real notifications from Facebook.',
                        'The "See Notifications" link directs to a secure and official Facebook website (The link can be seen in the left corner of your browser when hovering the button).'
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
