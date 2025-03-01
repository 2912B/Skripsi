<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrueorFalseChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Password Security
        $questionId1 = DB::table('trueorfalse_questions')->where('question_text', 'Using a long password with a mix of letters, numbers, and symbols is more secure than a short password.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId1],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId1],
        ]);

        $questionId2 = DB::table('trueorfalse_questions')->where('question_text', 'It’s safe to use the same password across multiple websites as long as it’s complex.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId2],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId2],
        ]);

        $questionId3 = DB::table('trueorfalse_questions')->where('question_text', 'Including personal information like your birthdate in your password makes it easier for hackers to guess.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId3],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId3],
        ]);

        $questionId4 = DB::table('trueorfalse_questions')->where('question_text', 'Passwords should be changed frequently to reduce the risk of unauthorized access.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId4],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId4],
        ]);

        $questionId5 = DB::table('trueorfalse_questions')->where('question_text', 'A password manager is a secure way to store and manage multiple complex passwords.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId5],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId5],
        ]);

        $questionId6 = DB::table('trueorfalse_questions')->where('question_text', 'It’s a good idea to share your passwords with close friends and family members for emergencies.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId6],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId6],
        ]);

        $questionId7 = DB::table('trueorfalse_questions')->where('question_text', 'Adding numbers and symbols to a password makes it harder to crack.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId7],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId7],
        ]);

        $questionId8 = DB::table('trueorfalse_questions')->where('question_text', 'Using a single word as a password is a good security practice if the word is uncommon.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId8],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId8],
        ]);

        $questionId9 = DB::table('trueorfalse_questions')->where('question_text', 'Two-factor authentication (2FA) is recommended even if you have a strong password.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId9],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId9],
        ]);

        $questionId10 = DB::table('trueorfalse_questions')->where('question_text', 'Using a phrase as a password, like "Ilovepizza123!", can be more secure than a random string of numbers and letters.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId10],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId10],
        ]);

        $questionId11 = DB::table('trueorfalse_questions')->where('question_text', 'Using an outdated password that hasn’t been changed for years can increase security.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId11],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId11],
        ]);

        $questionId12 = DB::table('trueorfalse_questions')->where('question_text', 'Passwords should be stored in plain text files on your computer for easy access.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId12],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId12],
        ]);

        $questionId13 = DB::table('trueorfalse_questions')->where('question_text', 'Short passwords are easier for hackers to crack using brute-force attacks.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId13],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId13],
        ]);

        $questionId14 = DB::table('trueorfalse_questions')->where('question_text', 'It’s okay to use simple passwords for accounts that don’t contain sensitive information.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId14],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId14],
        ]);

        $questionId15 = DB::table('trueorfalse_questions')->where('question_text', 'Enabling biometrics, such as fingerprint or facial recognition, can add another layer of security to devices.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId15],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId15],
        ]);

        $questionId16 = DB::table('trueorfalse_questions')->where('question_text', 'Using a password that’s a single common word, like "password," is safe if the account is rarely used.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId16],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId16],
        ]);

        $questionId17 = DB::table('trueorfalse_questions')->where('question_text', 'A password like "12345" is secure if it’s only used on a personal device.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId17],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId17],
        ]);

        $questionId18 = DB::table('trueorfalse_questions')->where('question_text', 'Passphrases using random, unrelated words can be stronger and easier to remember than complex passwords.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId18],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId18],
        ]);

        $questionId19 = DB::table('trueorfalse_questions')->where('question_text', 'Using both upper and lowercase letters in a password makes it more secure.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId19],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId19],
        ]);

        $questionId20 = DB::table('trueorfalse_questions')->where('question_text', 'A password manager automatically creates and stores strong, unique passwords for each account.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId20],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId20],
        ]);

        // Social Engineering
        $questionId21 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineering attacks often involve manipulating people rather than exploiting technical vulnerabilities.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId21],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId21],
        ]);

        $questionId22 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing emails are a common form of social engineering.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId22],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId22],
        ]);

        $questionId23 = DB::table('trueorfalse_questions')->where('question_text', 'Tailgating is a social engineering tactic where attackers follow employees into secure areas.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId23],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId23],
        ]);

        $questionId24 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineering attacks never involve in-person interactions; they only happen online.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId24],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId24],
        ]);

        $questionId25 = DB::table('trueorfalse_questions')->where('question_text', 'In pretexting attacks, the attacker creates a fake scenario to gain information from the target.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId25],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId25],
        ]);

        $questionId26 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineering relies on exploiting trust and human behavior to gain unauthorized access.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId26],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId26],
        ]);

        $questionId27 = DB::table('trueorfalse_questions')->where('question_text', 'Dumpster diving is a social engineering tactic that involves searching through trash to find sensitive information.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId27],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId27],
        ]);

        $questionId28 = DB::table('trueorfalse_questions')->where('question_text', 'It’s safe to provide information over the phone if the caller claims to be from your bank and knows your name.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId28],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId28],
        ]);

        $questionId29 = DB::table('trueorfalse_questions')->where('question_text', 'Baiting is a tactic where attackers lure individuals into exposing information or systems with an enticing offer.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId29],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId29],
        ]);

        $questionId30 = DB::table('trueorfalse_questions')->where('question_text', 'Shoulder surfing is a social engineering tactic where attackers watch someone enter sensitive information.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId30],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId30],
        ]);

        $questionId31 = DB::table('trueorfalse_questions')->where('question_text', 'Most social engineering attacks are easy to identify if the attacker is a stranger.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId31],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId31],
        ]);

        $questionId32 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineers often pretend to be technical support to gain access to systems.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId32],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId32],
        ]);

        $questionId33 = DB::table('trueorfalse_questions')->where('question_text', 'Vishing is a type of social engineering conducted over the phone.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId33],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId33],
        ]);

        $questionId34 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineering attacks are most effective when targeting individuals rather than groups.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId34],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId34],
        ]);

        $questionId35 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineers only target high-ranking employees in an organization.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId35],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId35],
        ]);

        $questionId36 = DB::table('trueorfalse_questions')->where('question_text', 'A sense of urgency is often used in social engineering attacks to push victims into quick decisions.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId36],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId36],
        ]);

        $questionId37 = DB::table('trueorfalse_questions')->where('question_text', 'It’s safe to trust emails from coworkers asking for confidential information without verifying.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId37],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId37],
        ]);

        $questionId38 = DB::table('trueorfalse_questions')->where('question_text', 'Social engineers can use information from social media profiles to impersonate someone or gain trust.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId38],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId38],
        ]);

        $questionId39 = DB::table('trueorfalse_questions')->where('question_text', 'Smishing is a social engineering attack that uses SMS or text messages to deceive people.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId39],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId39],
        ]);

        $questionId40 = DB::table('trueorfalse_questions')->where('question_text', 'If someone claims to be a coworker and asks for a password, it’s okay to give it if they seem trustworthy.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId40],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId40],
        ]);

        // Phishing
        $questionId41 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing emails often use urgent language to make the recipient act quickly without thinking.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId41],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId41],
        ]);

        $questionId42 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing can only be carried out through email.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId42],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId42],
        ]);

        $questionId43 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing emails often contain spelling or grammatical errors.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId43],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId43],
        ]);

        $questionId44 = DB::table('trueorfalse_questions')->where('question_text', 'Legitimate companies will never ask for sensitive information, like passwords, via email.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId44],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId44],
        ]);

        $questionId45 = DB::table('trueorfalse_questions')->where('question_text', 'If an email contains a link, it’s always safe to click as long as the sender is known.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId45],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId45],
        ]);

        $questionId46 = DB::table('trueorfalse_questions')->where('question_text', 'Hovering over a link in an email can help reveal if it’s leading to a legitimate website.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId46],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId46],
        ]);

        $questionId47 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing attacks often spoof company logos and email addresses to appear legitimate.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId47],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId47],
        ]);

        $questionId48 = DB::table('trueorfalse_questions')->where('question_text', 'It’s safe to open attachments in an email if it comes from a trusted source.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId48],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId48],
        ]);

        $questionId49 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing attacks can sometimes be avoided by checking the sender’s email address for inconsistencies.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId49],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId49],
        ]);

        $questionId50 = DB::table('trueorfalse_questions')->where('question_text', 'Smishing is a form of phishing that uses text messages to trick people.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId50],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId50],
        ]);

        $questionId51 = DB::table('trueorfalse_questions')->where('question_text', 'If an email contains personalized information, it cannot be a phishing attempt.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId51],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId51],
        ]);

        $questionId52 = DB::table('trueorfalse_questions')->where('question_text', 'Reputable companies will typically address you by your name in legitimate emails.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId52],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId52],
        ]);

        $questionId53 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing can be prevented entirely with antivirus software.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId53],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId53],
        ]);

        $questionId54 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing websites may use URLs that look similar to the legitimate ones but contain slight changes.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId54],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId54],
        ]);

        $questionId55 = DB::table('trueorfalse_questions')->where('question_text', 'A suspicious email should be reported to IT or security teams if you’re at work.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId55],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId55],
        ]);

        $questionId56 = DB::table('trueorfalse_questions')->where('question_text', 'Clicking an "unsubscribe" link in a spam email is always safe.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId56],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId56],
        ]);

        $questionId57 = DB::table('trueorfalse_questions')->where('question_text', 'Emails asking for account verification with links should be treated with caution.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId57],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId57],
        ]);

        $questionId58 = DB::table('trueorfalse_questions')->where('question_text', 'Phishing can target individuals or organizations and often involves impersonation.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId58],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId58],
        ]);

        $questionId59 = DB::table('trueorfalse_questions')->where('question_text', 'If an email looks legitimate and contains a company logo, it is safe to trust.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => false, 'question_id' => $questionId59],
            ['choice_text' => 'False', 'is_correct' => true, 'question_id' => $questionId59],
        ]);

        $questionId60 = DB::table('trueorfalse_questions')->where('question_text', 'Using two-factor authentication (2FA) can help protect against phishing attacks.')->value('id');
        DB::table('trueorfalse_choices')->insert([
            ['choice_text' => 'True', 'is_correct' => true, 'question_id' => $questionId60],
            ['choice_text' => 'False', 'is_correct' => false, 'question_id' => $questionId60],
        ]);
    }
}
