<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Cyber Threat
        $questionId1 = DB::table('trivia_questions')->where('question_text', 'What is malware?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Malicious software designed to harm or exploit systems', 'is_correct' => true, 'question_id' => $questionId1],
            ['choice_text' => 'Software that improves system performance', 'is_correct' => false, 'question_id' => $questionId1],
            ['choice_text' => 'A tool to secure networks', 'is_correct' => false, 'question_id' => $questionId1],
            ['choice_text' => 'Software that enhances website speed', 'is_correct' => false, 'question_id' => $questionId1],
        ]);

        $questionId2 = DB::table('trivia_questions')->where('question_text', 'Which of the following is NOT a type of malware?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Ransomware', 'is_correct' => false, 'question_id' => $questionId2],
            ['choice_text' => 'Spyware', 'is_correct' => false, 'question_id' => $questionId2],
            ['choice_text' => 'Phishing', 'is_correct' => true, 'question_id' => $questionId2],
            ['choice_text' => 'Trojan', 'is_correct' => false, 'question_id' => $questionId2],
        ]);

        $questionId3 = DB::table('trivia_questions')->where('question_text', 'What does “phishing” refer to in cybersecurity?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'A type of password-cracking software', 'is_correct' => false, 'question_id' => $questionId3],
            ['choice_text' => 'An attempt to trick users into providing sensitive information', 'is_correct' => true, 'question_id' => $questionId3],
            ['choice_text' => 'A virus that infects hard drives', 'is_correct' => false, 'question_id' => $questionId3],
            ['choice_text' => 'Software used to enhance online privacy', 'is_correct' => false, 'question_id' => $questionId3],
        ]);

        $questionId4 = DB::table('trivia_questions')->where('question_text', 'What is a Trojan horse?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'A type of hardware device', 'is_correct' => false, 'question_id' => $questionId4],
            ['choice_text' => 'Malicious software that disguises itself as legitimate', 'is_correct' => true, 'question_id' => $questionId4],
            ['choice_text' => 'A safe program for data storage', 'is_correct' => false, 'question_id' => $questionId4],
            ['choice_text' => 'A protective software for firewalls', 'is_correct' => false, 'question_id' => $questionId4],
        ]);

        $questionId5 = DB::table('trivia_questions')->where('question_text', 'Which attack involves overwhelming a system with traffic to make it unavailable?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Phishing', 'is_correct' => false, 'question_id' => $questionId5],
            ['choice_text' => 'SQL Injection', 'is_correct' => false, 'question_id' => $questionId5],
            ['choice_text' => 'DDoS', 'is_correct' => true, 'question_id' => $questionId5],
            ['choice_text' => 'Spyware', 'is_correct' => false, 'question_id' => $questionId5],
        ]);

        $questionId6 = DB::table('trivia_questions')->where('question_text', 'What is the primary goal of ransomware?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To encrypt files and demand payment for their release', 'is_correct' => true, 'question_id' => $questionId6],
            ['choice_text' => 'To monitor users\' browsing history', 'is_correct' => false, 'question_id' => $questionId6],
            ['choice_text' => 'To boost computer performance', 'is_correct' => false, 'question_id' => $questionId6],
            ['choice_text' => 'To permanently delete all files on a system', 'is_correct' => false, 'question_id' => $questionId6],
        ]);

        $questionId7 = DB::table('trivia_questions')->where('question_text', 'Which cyber threat is designed to secretly gather user information?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Worm', 'is_correct' => false, 'question_id' => $questionId7],
            ['choice_text' => 'Adware', 'is_correct' => false, 'question_id' => $questionId7],
            ['choice_text' => 'Spyware', 'is_correct' => true, 'question_id' => $questionId7],
            ['choice_text' => 'Phishing', 'is_correct' => false, 'question_id' => $questionId7],
        ]);

        $questionId8 = DB::table('trivia_questions')->where('question_text', 'What is the purpose of an Advanced Persistent Threat (APT)?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To infect mobile devices with malware', 'is_correct' => false, 'question_id' => $questionId8],
            ['choice_text' => 'To gain long-term access to high-value targets for data theft', 'is_correct' => true, 'question_id' => $questionId8],
            ['choice_text' => 'To prevent unauthorized access to a network', 'is_correct' => false, 'question_id' => $questionId8],
            ['choice_text' => 'To improve system speed', 'is_correct' => false, 'question_id' => $questionId8],
        ]);

        $questionId9 = DB::table('trivia_questions')->where('question_text', 'Which technique is commonly used to exploit vulnerabilities in SQL databases?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Phishing', 'is_correct' => false, 'question_id' => $questionId9],
            ['choice_text' => 'Man-in-the-Middle attack', 'is_correct' => false, 'question_id' => $questionId9],
            ['choice_text' => 'SQL Injection', 'is_correct' => true, 'question_id' => $questionId9],
            ['choice_text' => 'DDoS attack', 'is_correct' => false, 'question_id' => $questionId9],
        ]);

        $questionId10 = DB::table('trivia_questions')->where('question_text', 'What is a key indicator of a phishing email?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Personalized subject line', 'is_correct' => false, 'question_id' => $questionId10],
            ['choice_text' => 'Presence of a company logo', 'is_correct' => false, 'question_id' => $questionId10],
            ['choice_text' => 'Suspicious links and urgent language', 'is_correct' => true, 'question_id' => $questionId10],
            ['choice_text' => 'Standard greeting', 'is_correct' => false, 'question_id' => $questionId10],
        ]);

        $questionId11 = DB::table('trivia_questions')->where('question_text', 'What is a rootkit designed to do?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Increase processing speed', 'is_correct' => false, 'question_id' => $questionId11],
            ['choice_text' => 'Hide the presence of malicious software', 'is_correct' => true, 'question_id' => $questionId11],
            ['choice_text' => 'Improve battery performance', 'is_correct' => false, 'question_id' => $questionId11],
            ['choice_text' => 'Optimize network security', 'is_correct' => false, 'question_id' => $questionId11],
        ]);

        $questionId12 = DB::table('trivia_questions')->where('question_text', 'Which malware captures everything typed on a keyboard?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Keylogger', 'is_correct' => true, 'question_id' => $questionId12],
            ['choice_text' => 'Worm', 'is_correct' => false, 'question_id' => $questionId12],
            ['choice_text' => 'Spyware', 'is_correct' => false, 'question_id' => $questionId12],
            ['choice_text' => 'Ransomware', 'is_correct' => false, 'question_id' => $questionId12],
        ]);

        $questionId13 = DB::table('trivia_questions')->where('question_text', 'What does spyware aim to do?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Encrypt user files', 'is_correct' => false, 'question_id' => $questionId13],
            ['choice_text' => 'Gather user information secretly', 'is_correct' => true, 'question_id' => $questionId13],
            ['choice_text' => 'Improve device performance', 'is_correct' => false, 'question_id' => $questionId13],
            ['choice_text' => 'Provide internet browsing protection', 'is_correct' => false, 'question_id' => $questionId13],
        ]);

        $questionId14 = DB::table('trivia_questions')->where('question_text', 'Which is NOT a common symptom of malware?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Pop-up ads', 'is_correct' => false, 'question_id' => $questionId14],
            ['choice_text' => 'Slow performance', 'is_correct' => false, 'question_id' => $questionId14],
            ['choice_text' => 'Improved battery life', 'is_correct' => true, 'question_id' => $questionId14],
            ['choice_text' => 'Increased internet traffic', 'is_correct' => false, 'question_id' => $questionId14],
        ]);

        $questionId15 = DB::table('trivia_questions')->where('question_text', 'What is the goal of social engineering attacks?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To manipulate people into revealing confidential information', 'is_correct' => true, 'question_id' => $questionId15],
            ['choice_text' => 'To enhance computer graphics', 'is_correct' => false, 'question_id' => $questionId15],
            ['choice_text' => 'To create backups of personal data', 'is_correct' => false, 'question_id' => $questionId15],
            ['choice_text' => 'To test computer speed', 'is_correct' => false, 'question_id' => $questionId15],
        ]);

        $questionId16 = DB::table('trivia_questions')->where('question_text', 'What is the main purpose of adware?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To display unwanted advertisements on a device', 'is_correct' => true, 'question_id' => $questionId16],
            ['choice_text' => 'To secure a device from malware', 'is_correct' => false, 'question_id' => $questionId16],
            ['choice_text' => 'To monitor internet traffic', 'is_correct' => false, 'question_id' => $questionId16],
            ['choice_text' => 'To encrypt files for payment', 'is_correct' => false, 'question_id' => $questionId16],
        ]);

        $questionId17 = DB::table('trivia_questions')->where('question_text', 'Which attack intercepts network communication to steal data?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Man-in-the-Middle attack', 'is_correct' => true, 'question_id' => $questionId17],
            ['choice_text' => 'Phishing', 'is_correct' => false, 'question_id' => $questionId17],
            ['choice_text' => 'Adware', 'is_correct' => false, 'question_id' => $questionId17],
            ['choice_text' => 'Ransomware', 'is_correct' => false, 'question_id' => $questionId17],
        ]);

        $questionId18 = DB::table('trivia_questions')->where('question_text', 'What is spear phishing?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'A phishing attack targeting specific individuals', 'is_correct' => true, 'question_id' => $questionId18],
            ['choice_text' => 'A type of malware that replicates itself', 'is_correct' => false, 'question_id' => $questionId18],
            ['choice_text' => 'A protective measure in networking', 'is_correct' => false, 'question_id' => $questionId18],
            ['choice_text' => 'A method for encrypting sensitive emails', 'is_correct' => false, 'question_id' => $questionId18],
        ]);

        $questionId19 = DB::table('trivia_questions')->where('question_text', 'Which malware type can replicate itself to spread across networks?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Worm', 'is_correct' => true, 'question_id' => $questionId19],
            ['choice_text' => 'Spyware', 'is_correct' => false, 'question_id' => $questionId19],
            ['choice_text' => 'Trojan', 'is_correct' => false, 'question_id' => $questionId19],
            ['choice_text' => 'Ransomware', 'is_correct' => false, 'question_id' => $questionId19],
        ]);

        $questionId20 = DB::table('trivia_questions')->where('question_text', 'What is a botnet?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'A network of devices used in DDoS attacks', 'is_correct' => true, 'question_id' => $questionId20],
            ['choice_text' => 'A secure server for data storage', 'is_correct' => false, 'question_id' => $questionId20],
            ['choice_text' => 'A type of social engineering attack', 'is_correct' => false, 'question_id' => $questionId20],
            ['choice_text' => 'Software used to prevent malware', 'is_correct' => false, 'question_id' => $questionId20],
        ]);

        // Security Best Practice
        $questionId21 = DB::table('trivia_questions')->where('question_text', 'Which of the following is considered a strong password?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => '12345678', 'is_correct' => false, 'question_id' => $questionId21],
            ['choice_text' => 'Password123', 'is_correct' => false, 'question_id' => $questionId21],
            ['choice_text' => '@P@55w0rD!', 'is_correct' => true, 'question_id' => $questionId21],
            ['choice_text' => 'MyName123', 'is_correct' => false, 'question_id' => $questionId21],
        ]);

        $questionId22 = DB::table('trivia_questions')->where('question_text', 'Why is it important to avoid using public Wi-Fi for sensitive transactions?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Public Wi-Fi is always slow', 'is_correct' => false, 'question_id' => $questionId22],
            ['choice_text' => 'Public Wi-Fi networks are less secure and can expose data to attackers', 'is_correct' => true, 'question_id' => $questionId22],
            ['choice_text' => 'It costs more to use public Wi-Fi for transactions', 'is_correct' => false, 'question_id' => $questionId22],
            ['choice_text' => 'Public Wi-Fi is only for entertainment use', 'is_correct' => false, 'question_id' => $questionId22],
        ]);

        $questionId23 = DB::table('trivia_questions')->where('question_text', 'What should you do if you receive an email from an unknown sender with an attachment?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Open the attachment to check what it is', 'is_correct' => false, 'question_id' => $questionId23],
            ['choice_text' => 'Delete the email immediately', 'is_correct' => false, 'question_id' => $questionId23],
            ['choice_text' => 'Report the email to your IT department', 'is_correct' => true, 'question_id' => $questionId23],
            ['choice_text' => 'Forward the email to colleagues for their opinion', 'is_correct' => false, 'question_id' => $questionId23],
        ]);

        $questionId24 = DB::table('trivia_questions')->where('question_text', 'What is two-factor authentication (2FA)?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Using two different email accounts to log in', 'is_correct' => false, 'question_id' => $questionId24],
            ['choice_text' => 'Using two passwords for one account', 'is_correct' => false, 'question_id' => $questionId24],
            ['choice_text' => 'An added security step that requires two forms of verification', 'is_correct' => true, 'question_id' => $questionId24],
            ['choice_text' => 'Only using fingerprint recognition for security', 'is_correct' => false, 'question_id' => $questionId24],
        ]);

        $questionId25 = DB::table('trivia_questions')->where('question_text', 'Which of these is NOT a good password practice?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Using unique passwords for each account', 'is_correct' => false, 'question_id' => $questionId25],
            ['choice_text' => 'Sharing your password with trusted friends', 'is_correct' => true, 'question_id' => $questionId25],
            ['choice_text' => 'Using a password manager to store passwords securely', 'is_correct' => false, 'question_id' => $questionId25],
            ['choice_text' => 'Regularly updating your passwords', 'is_correct' => false, 'question_id' => $questionId25],
        ]);

        $questionId26 = DB::table('trivia_questions')->where('question_text', 'What is the main purpose of a firewall?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To clean viruses from your computer', 'is_correct' => false, 'question_id' => $questionId26],
            ['choice_text' => 'To prevent unauthorized access to a network', 'is_correct' => true, 'question_id' => $questionId26],
            ['choice_text' => 'To speed up internet connection', 'is_correct' => false, 'question_id' => $questionId26],
            ['choice_text' => 'To store backup data', 'is_correct' => false, 'question_id' => $questionId26],
        ]);

        $questionId27 = DB::table('trivia_questions')->where('question_text', 'Why is it important to regularly update your software?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To add new games', 'is_correct' => false, 'question_id' => $questionId27],
            ['choice_text' => 'To improve aesthetics', 'is_correct' => false, 'question_id' => $questionId27],
            ['choice_text' => 'To protect against known security vulnerabilities', 'is_correct' => true, 'question_id' => $questionId27],
            ['choice_text' => 'To reduce computer speed', 'is_correct' => false, 'question_id' => $questionId27],
        ]);

        $questionId28 = DB::table('trivia_questions')->where('question_text', 'Which of the following should you do to safely browse the internet?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Click on all pop-up ads', 'is_correct' => false, 'question_id' => $questionId28],
            ['choice_text' => 'Avoid HTTPS websites', 'is_correct' => false, 'question_id' => $questionId28],
            ['choice_text' => 'Use a secure and updated web browser', 'is_correct' => true, 'question_id' => $questionId28],
            ['choice_text' => 'Disable your firewall', 'is_correct' => false, 'question_id' => $questionId28],
        ]);

        $questionId29 = DB::table('trivia_questions')->where('question_text', 'What is phishing?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Sending fake emails to steal personal information', 'is_correct' => true, 'question_id' => $questionId29],
            ['choice_text' => 'Encrypting emails for security', 'is_correct' => false, 'question_id' => $questionId29],
            ['choice_text' => 'Blocking spam emails', 'is_correct' => false, 'question_id' => $questionId29],
            ['choice_text' => 'A firewall feature', 'is_correct' => false, 'question_id' => $questionId29],
        ]);

        $questionId30 = DB::table('trivia_questions')->where('question_text', 'What is the safest way to handle sensitive data on a public computer?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Save files directly to the computer', 'is_correct' => false, 'question_id' => $questionId30],
            ['choice_text' => 'Use a USB drive without encryption', 'is_correct' => false, 'question_id' => $questionId30],
            ['choice_text' => 'Log out completely and clear the browsing history', 'is_correct' => true, 'question_id' => $questionId30],
            ['choice_text' => 'Leave the computer without logging out', 'is_correct' => false, 'question_id' => $questionId30],
        ]);

        $questionId31 = DB::table('trivia_questions')->where('question_text', 'Which of the following is a secure way to manage multiple passwords?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Use the same password for all accounts', 'is_correct' => false, 'question_id' => $questionId31],
            ['choice_text' => 'Write passwords on a sticky note', 'is_correct' => false, 'question_id' => $questionId31],
            ['choice_text' => 'Store them in a password manager', 'is_correct' => true, 'question_id' => $questionId31],
            ['choice_text' => 'Email passwords to yourself', 'is_correct' => false, 'question_id' => $questionId31],
        ]);

        $questionId32 = DB::table('trivia_questions')->where('question_text', 'When should you back up important data?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Only when your device is acting up', 'is_correct' => false, 'question_id' => $questionId32],
            ['choice_text' => 'Regularly, to protect against data loss', 'is_correct' => true, 'question_id' => $questionId32],
            ['choice_text' => 'Once a year', 'is_correct' => false, 'question_id' => $questionId32],
            ['choice_text' => 'Only when you are about to delete files', 'is_correct' => false, 'question_id' => $questionId32],
        ]);

        $questionId33 = DB::table('trivia_questions')->where('question_text', 'What is a VPN primarily used for?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Speeding up internet access', 'is_correct' => false, 'question_id' => $questionId33],
            ['choice_text' => 'Securing a network connection, especially on public Wi-Fi', 'is_correct' => true, 'question_id' => $questionId33],
            ['choice_text' => 'Removing malware', 'is_correct' => false, 'question_id' => $questionId33],
            ['choice_text' => 'Sharing files between devices', 'is_correct' => false, 'question_id' => $questionId33],
        ]);

        $questionId34 = DB::table('trivia_questions')->where('question_text', 'Which action reduces the risk of unauthorized physical access to your device?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Leaving your device unlocked', 'is_correct' => false, 'question_id' => $questionId34],
            ['choice_text' => 'Using a screen lock or password', 'is_correct' => true, 'question_id' => $questionId34],
            ['choice_text' => 'Disabling two-factor authentication', 'is_correct' => false, 'question_id' => $questionId34],
            ['choice_text' => 'Sharing your device with others', 'is_correct' => false, 'question_id' => $questionId34],
        ]);

        $questionId35 = DB::table('trivia_questions')->where('question_text', 'Why should you be cautious of email attachments from unknown senders?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'They can slow down your computer', 'is_correct' => false, 'question_id' => $questionId35],
            ['choice_text' => 'They may contain malware', 'is_correct' => true, 'question_id' => $questionId35],
            ['choice_text' => 'They are always encrypted', 'is_correct' => false, 'question_id' => $questionId35],
            ['choice_text' => 'They offer free services', 'is_correct' => false, 'question_id' => $questionId35],
        ]);

        $questionId36 = DB::table('trivia_questions')->where('question_text', 'Which of the following is a good way to prevent unauthorized access to your online accounts?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Use a short, simple password', 'is_correct' => false, 'question_id' => $questionId36],
            ['choice_text' => 'Disable two-factor authentication', 'is_correct' => false, 'question_id' => $questionId36],
            ['choice_text' => 'Use complex, unique passwords for each account', 'is_correct' => true, 'question_id' => $questionId36],
            ['choice_text' => 'Reuse the same password for all accounts', 'is_correct' => false, 'question_id' => $questionId36],
        ]);

        $questionId37 = DB::table('trivia_questions')->where('question_text', 'What is an important step to take before discarding an old computer or phone?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Deleting only photos', 'is_correct' => false, 'question_id' => $questionId37],
            ['choice_text' => 'Wiping all personal data and factory resetting', 'is_correct' => true, 'question_id' => $questionId37],
            ['choice_text' => 'Giving it to someone else without changes', 'is_correct' => false, 'question_id' => $questionId37],
            ['choice_text' => 'Removing the battery', 'is_correct' => false, 'question_id' => $questionId37],
        ]);

        $questionId38 = DB::table('trivia_questions')->where('question_text', 'Why should software be downloaded only from trusted sources?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To get faster downloads', 'is_correct' => false, 'question_id' => $questionId38],
            ['choice_text' => 'To avoid downloading malware', 'is_correct' => true, 'question_id' => $questionId38],
            ['choice_text' => 'Because it’s free', 'is_correct' => false, 'question_id' => $questionId38],
            ['choice_text' => 'To increase battery life', 'is_correct' => false, 'question_id' => $questionId38],
        ]);

        $questionId39 = DB::table('trivia_questions')->where('question_text', 'Which of the following is a sign of a secure website?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'No padlock in the address bar', 'is_correct' => false, 'question_id' => $questionId39],
            ['choice_text' => 'URL starts with "https"', 'is_correct' => true, 'question_id' => $questionId39],
            ['choice_text' => 'Many ads on the page', 'is_correct' => false, 'question_id' => $questionId39],
            ['choice_text' => 'Flashing pop-ups', 'is_correct' => false, 'question_id' => $questionId39],
        ]);

        $questionId40 = DB::table('trivia_questions')->where('question_text', 'How can you protect sensitive information on mobile devices?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Keep the device unlocked for convenience', 'is_correct' => false, 'question_id' => $questionId40],
            ['choice_text' => 'Enable device encryption and use a strong password', 'is_correct' => true, 'question_id' => $questionId40],
            ['choice_text' => 'Turn off automatic updates', 'is_correct' => false, 'question_id' => $questionId40],
            ['choice_text' => 'Only use public Wi-Fi for browsing', 'is_correct' => false, 'question_id' => $questionId40],
        ]);

        // Data Privacy
        $questionId41 = DB::table('trivia_questions')->where('question_text', 'What does GDPR stand for?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'General Data Privacy Regulation', 'is_correct' => false, 'question_id' => $questionId41],
            ['choice_text' => 'Global Data Privacy Rules', 'is_correct' => false, 'question_id' => $questionId41],
            ['choice_text' => 'Government Data Protection Requirement', 'is_correct' => false, 'question_id' => $questionId41],
            ['choice_text' => 'General Data Protection Regulation', 'is_correct' => true, 'question_id' => $questionId41],
        ]);

        $questionId42 = DB::table('trivia_questions')->where('question_text', 'Which of the following is considered personally identifiable information (PII)?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Job title', 'is_correct' => false, 'question_id' => $questionId42],
            ['choice_text' => 'Email address', 'is_correct' => true, 'question_id' => $questionId42],
            ['choice_text' => 'Company revenue', 'is_correct' => false, 'question_id' => $questionId42],
            ['choice_text' => 'Date of a work meeting', 'is_correct' => false, 'question_id' => $questionId42],
        ]);

        $questionId43 = DB::table('trivia_questions')->where('question_text', 'What is the main purpose of data encryption?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To reduce file size', 'is_correct' => false, 'question_id' => $questionId43],
            ['choice_text' => 'To make data unreadable without authorization', 'is_correct' => true, 'question_id' => $questionId43],
            ['choice_text' => 'To improve download speed', 'is_correct' => false, 'question_id' => $questionId43],
            ['choice_text' => 'To organize files in folders', 'is_correct' => false, 'question_id' => $questionId43],
        ]);

        $questionId44 = DB::table('trivia_questions')->where('question_text', 'Which of the following is NOT considered sensitive information?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Social Security number', 'is_correct' => false, 'question_id' => $questionId44],
            ['choice_text' => 'Public business address', 'is_correct' => true, 'question_id' => $questionId44],
            ['choice_text' => 'Credit card number', 'is_correct' => false, 'question_id' => $questionId44],
            ['choice_text' => 'Passport number', 'is_correct' => false, 'question_id' => $questionId44],
        ]);

        $questionId45 = DB::table('trivia_questions')->where('question_text', 'Why is it important to have a strong password on accounts with personal data?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'It improves internet speed', 'is_correct' => false, 'question_id' => $questionId45],
            ['choice_text' => 'It protects sensitive information from unauthorized access', 'is_correct' => true, 'question_id' => $questionId45],
            ['choice_text' => 'It helps organize files', 'is_correct' => false, 'question_id' => $questionId45],
            ['choice_text' => 'It’s required by most websites', 'is_correct' => false, 'question_id' => $questionId45],
        ]);

        $questionId46 = DB::table('trivia_questions')->where('question_text', 'What is a data breach?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'A temporary internet outage', 'is_correct' => false, 'question_id' => $questionId46],
            ['choice_text' => 'Unauthorized access to confidential data', 'is_correct' => true, 'question_id' => $questionId46],
            ['choice_text' => 'An accidental data backup', 'is_correct' => false, 'question_id' => $questionId46],
            ['choice_text' => 'A scheduled system update', 'is_correct' => false, 'question_id' => $questionId46],
        ]);

        $questionId47 = DB::table('trivia_questions')->where('question_text', 'What is the main purpose of a privacy policy on websites?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To enhance website design', 'is_correct' => false, 'question_id' => $questionId47],
            ['choice_text' => 'To inform users how their data will be collected and used', 'is_correct' => true, 'question_id' => $questionId47],
            ['choice_text' => 'To promote online advertisements', 'is_correct' => false, 'question_id' => $questionId47],
            ['choice_text' => 'To store user passwords', 'is_correct' => false, 'question_id' => $questionId47],
        ]);

        $questionId48 = DB::table('trivia_questions')->where('question_text', 'Which of the following is a best practice for securing personal information online?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Sharing your passwords with friends', 'is_correct' => false, 'question_id' => $questionId48],
            ['choice_text' => 'Avoiding the use of privacy settings on social media', 'is_correct' => false, 'question_id' => $questionId48],
            ['choice_text' => 'Regularly updating passwords and using strong ones', 'is_correct' => true, 'question_id' => $questionId48],
            ['choice_text' => 'Using the same password for all accounts', 'is_correct' => false, 'question_id' => $questionId48],
        ]);

        $questionId49 = DB::table('trivia_questions')->where('question_text', 'What does data minimization mean in data privacy?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Limiting the amount of data collected to what is necessary', 'is_correct' => true, 'question_id' => $questionId49],
            ['choice_text' => 'Storing data in smaller file sizes', 'is_correct' => false, 'question_id' => $questionId49],
            ['choice_text' => 'Encrypting all collected data', 'is_correct' => false, 'question_id' => $questionId49],
            ['choice_text' => 'Collecting as much data as possible', 'is_correct' => false, 'question_id' => $questionId49],
        ]);

        $questionId50 = DB::table('trivia_questions')->where('question_text', 'Which of these is a method for protecting personal data when using public Wi-Fi?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Disabling all security settings', 'is_correct' => false, 'question_id' => $questionId50],
            ['choice_text' => 'Using a VPN (Virtual Private Network)', 'is_correct' => true, 'question_id' => $questionId50],
            ['choice_text' => 'Turning off encryption', 'is_correct' => false, 'question_id' => $questionId50],
            ['choice_text' => 'Using unsecured websites', 'is_correct' => false, 'question_id' => $questionId50],
        ]);

        $questionId51 = DB::table('trivia_questions')->where('question_text', 'Why is it important to check a website’s privacy policy before using it?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To see what personal data might be collected', 'is_correct' => true, 'question_id' => $questionId51],
            ['choice_text' => 'To find out if the website has ads', 'is_correct' => false, 'question_id' => $questionId51],
            ['choice_text' => 'To know what type of font is used', 'is_correct' => false, 'question_id' => $questionId51],
            ['choice_text' => 'To speed up the browsing experience', 'is_correct' => false, 'question_id' => $questionId51],
        ]);

        $questionId52 = DB::table('trivia_questions')->where('question_text', 'Which law focuses on data protection and privacy for EU citizens?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'COPPA', 'is_correct' => false, 'question_id' => $questionId52],
            ['choice_text' => 'HIPAA', 'is_correct' => false, 'question_id' => $questionId52],
            ['choice_text' => 'CCPA', 'is_correct' => false, 'question_id' => $questionId52],
            ['choice_text' => 'GDPR', 'is_correct' => true, 'question_id' => $questionId52],
        ]);

        $questionId53 = DB::table('trivia_questions')->where('question_text', 'What is personally identifiable information (PII)?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Information that identifies a company', 'is_correct' => false, 'question_id' => $questionId53],
            ['choice_text' => 'Data that can identify an individual', 'is_correct' => true, 'question_id' => $questionId53],
            ['choice_text' => 'Public data that everyone can access', 'is_correct' => false, 'question_id' => $questionId53],
            ['choice_text' => 'Information that’s only related to pets', 'is_correct' => false, 'question_id' => $questionId53],
        ]);

        $questionId54 = DB::table('trivia_questions')->where('question_text', 'What is the “right to be forgotten” in data privacy?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'The right to block ads', 'is_correct' => false, 'question_id' => $questionId54],
            ['choice_text' => 'The right to delete personal data upon request', 'is_correct' => true, 'question_id' => $questionId54],
            ['choice_text' => 'The right to access all stored data', 'is_correct' => false, 'question_id' => $questionId54],
            ['choice_text' => 'The right to update data regularly', 'is_correct' => false, 'question_id' => $questionId54],
        ]);

        $questionId55 = DB::table('trivia_questions')->where('question_text', 'Which of the following is a method of de-identifying personal data?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Tokenization', 'is_correct' => true, 'question_id' => $questionId55],
            ['choice_text' => 'Data duplication', 'is_correct' => false, 'question_id' => $questionId55],
            ['choice_text' => 'Data accumulation', 'is_correct' => false, 'question_id' => $questionId55],
            ['choice_text' => 'Data stacking', 'is_correct' => false, 'question_id' => $questionId55],
        ]);

        $questionId56 = DB::table('trivia_questions')->where('question_text', 'Why should you use privacy settings on social media accounts?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'To allow everyone to see your profile', 'is_correct' => false, 'question_id' => $questionId56],
            ['choice_text' => 'To control who can access your personal information', 'is_correct' => true, 'question_id' => $questionId56],
            ['choice_text' => 'To make your account visible to advertisers', 'is_correct' => false, 'question_id' => $questionId56],
            ['choice_text' => 'To increase the number of followers', 'is_correct' => false, 'question_id' => $questionId56],
        ]);

        $questionId57 = DB::table('trivia_questions')->where('question_text', 'Which of the following actions helps protect data privacy?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Posting personal information publicly', 'is_correct' => false, 'question_id' => $questionId57],
            ['choice_text' => 'Using weak passwords', 'is_correct' => false, 'question_id' => $questionId57],
            ['choice_text' => 'Enabling two-factor authentication', 'is_correct' => true, 'question_id' => $questionId57],
            ['choice_text' => 'Ignoring software updates', 'is_correct' => false, 'question_id' => $questionId57],
        ]);

        $questionId58 = DB::table('trivia_questions')->where('question_text', 'What does CCPA stand for?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'California Consumer Protection Act', 'is_correct' => false, 'question_id' => $questionId58],
            ['choice_text' => 'California Consumer Privacy Act', 'is_correct' => true, 'question_id' => $questionId58],
            ['choice_text' => 'Consumer Control and Privacy Act', 'is_correct' => false, 'question_id' => $questionId58],
            ['choice_text' => 'Consumer Choice Privacy Agreement', 'is_correct' => false, 'question_id' => $questionId58],
        ]);

        $questionId59 = DB::table('trivia_questions')->where('question_text', 'Which of these actions helps minimize the risk of data breaches?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Sharing passwords with others', 'is_correct' => false, 'question_id' => $questionId59],
            ['choice_text' => 'Encrypting sensitive data', 'is_correct' => true, 'question_id' => $questionId59],
            ['choice_text' => 'Using weak passwords', 'is_correct' => false, 'question_id' => $questionId59],
            ['choice_text' => 'Avoiding software updates', 'is_correct' => false, 'question_id' => $questionId59],
        ]);

        $questionId60 = DB::table('trivia_questions')->where('question_text', 'Which of the following is true about cookies on websites?')->value('id');
        DB::table('trivia_choices')->insert([
            ['choice_text' => 'Cookies are used to harm devices', 'is_correct' => false, 'question_id' => $questionId60],
            ['choice_text' => 'Cookies are necessary for viruses to spread', 'is_correct' => false, 'question_id' => $questionId60],
            ['choice_text' => 'Cookies track user activity on websites', 'is_correct' => true, 'question_id' => $questionId60],
            ['choice_text' => 'Cookies delete user data automatically', 'is_correct' => false, 'question_id' => $questionId60],
        ]);
    }
}
