<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SMSQuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $levelId = DB::table('sms_levels')->insertGetId([
            'name' => 'Level 1',
            'description' => 'FedEx',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('sms_questions')->insertGetId([
            'sms_level_id' => $levelId,
            'question_text' => 'Is this SMS legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sms_responses')->insert([
            [
                'sms_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate FedEx domain. Official FedEx links always include fedex.com or a trusted regional variation, such as fedex.ca.',
                        'The SMS does not include any specific details about the package, such as a tracking number or the sender’s information, which legitimate FedEx notifications typically provide.',
                        'The message creates a sense of urgency by claiming the package is "pending delivery" and implying it will be returned if the recipient does not act. This is a common tactic used to trick people into clicking links.'
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sms_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate FedEx domain. Official FedEx links always include fedex.com or a trusted regional variation, such as fedex.ca.',
                        'The SMS does not include any specific details about the package, such as a tracking number or the sender’s information, which legitimate FedEx notifications typically provide.',
                        'The message creates a sense of urgency by claiming the package is "pending delivery" and implying it will be returned if the recipient does not act. This is a common tactic used to trick people into clicking links.'
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('sms_levels')->insertGetId([
            'name' => 'Level 2',
            'description' => 'Netflix',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('sms_questions')->insertGetId([
            'sms_level_id' => $levelId,
            'question_text' => 'Is this SMS legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sms_responses')->insert([
            [
                'sms_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate Netflix domain. Official Netflix URLs always include netflix.com.',
                        'The SMS does not include any specific account information, such as the user’s name or account ID, which Netflix typically includes in legitimate communications.',
                        'The message pressures the recipient by claiming the account has been "suspended" and urging immediate action. This is a common tactic used by phishing scams to provoke panic and quick responses.',
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sms_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate Netflix domain. Official Netflix URLs always include netflix.com.',
                        'The SMS does not include any specific account information, such as the user’s name or account ID, which Netflix typically includes in legitimate communications.',
                        'The message pressures the recipient by claiming the account has been "suspended" and urging immediate action. This is a common tactic used by phishing scams to provoke panic and quick responses.',
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('sms_levels')->insertGetId([
            'name' => 'Level 3',
            'description' => 'Amazon',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('sms_questions')->insertGetId([
            'sms_level_id' => $levelId,
            'question_text' => 'Is this SMS legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sms_responses')->insert([
            [
                'sms_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate Amazon domain. Official Amazon URLs always include amazon.com or a trusted regional variation (e.g., amazon.co.uk).',
                        'The promise of winning a $500 gift card without participating in any contest or giveaway is suspicious. Scammers often use enticing offers to lure recipients into clicking malicious links.',
                        'The message creates a sense of urgency by encouraging immediate action to "claim your prize." This is a common phishing tactic to rush victims into acting without verifying the authenticity.',
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sms_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'The link is not a legitimate Amazon domain. Official Amazon URLs always include amazon.com or a trusted regional variation (e.g., amazon.co.uk).',
                        'The promise of winning a $500 gift card without participating in any contest or giveaway is suspicious. Scammers often use enticing offers to lure recipients into clicking malicious links.',
                        'The message creates a sense of urgency by encouraging immediate action to "claim your prize." This is a common phishing tactic to rush victims into acting without verifying the authenticity.',
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('sms_levels')->insertGetId([
            'name' => 'Level 4',
            'description' => 'Bank of America',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('sms_questions')->insertGetId([
            'sms_level_id' => $levelId,
            'question_text' => 'Is this SMS legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sms_responses')->insert([
            [
                'sms_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'Refers to the last four digits of the recipient’s account number (3852), ensuring the message is relevant to them.',
                        'Mentions the exact time and date of the unrecognized login (Jan 8, 2025, at 3:42 PM), helping the recipient confirm the activity.',
                        'Provides a legitimate Bank of America link and hotline for secure resolution.',
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sms_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'Refers to the last four digits of the recipient’s account number (3852), ensuring the message is relevant to them.',
                        'Mentions the exact time and date of the unrecognized login (Jan 8, 2025, at 3:42 PM), helping the recipient confirm the activity.',
                        'Provides a legitimate Bank of America link and hotline for secure resolution.',
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $levelId = DB::table('sms_levels')->insertGetId([
            'name' => 'Level 5',
            'description' => 'IRS',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questionId = DB::table('sms_questions')->insertGetId([
            'sms_level_id' => $levelId,
            'question_text' => 'Is this SMS legitimate or phishing?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('sms_responses')->insert([
            [
                'sms_question_id' => $questionId,
                'response_type' => 'legitimate',
                'reason' => json_encode([
                    'items' => [
                        'Clearly states the tax year (2023), refund amount ($1,200.00), and deposit date (Jan 15, 2025), providing transparency and credibility.',
                        'Includes a link to the official IRS refund tracking page.',
                        'Explicitly states "No action needed," which is consistent with legitimate IRS communications.',
                    ]
                ]),
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sms_question_id' => $questionId,
                'response_type' => 'phishing',
                'reason' => json_encode([
                    'items' => [
                        'Clearly states the tax year (2023), refund amount ($1,200.00), and deposit date (Jan 15, 2025), providing transparency and credibility.',
                        'Includes a link to the official IRS refund tracking page.',
                        'Explicitly states "No action needed," which is consistent with legitimate IRS communications.',
                    ]
                ]),
                'is_correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
