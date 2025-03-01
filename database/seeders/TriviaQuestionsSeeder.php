<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TriviaQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Retrieve Catregory ID
        $cyberthreatCategoryId = DB::table('trivia_categories')->where('name', 'cyber-threat')->value('id');

        $securityBestPracticesCategoryId = DB::table('trivia_categories')->where('name', 'security-best-practice')->value('id');

        $dataprivacyCategoryId = DB::table('trivia_categories')->where('name', 'data-privacy')->value('id');



        // Insert questions for 'Cyber Threat' category
        DB::table('trivia_questions')->insert([
            [
                'question_text' => 'What is malware?',
                'reason' => 'Explanation: Malware, or malicious software, includes viruses, Trojans, and ransomware, which are used to harm or exploit computer systems.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which of the following is NOT a type of malware?',
                'reason' => 'Explanation: Phishing is a social engineering attack, not malware. Malware includes ransomware, spyware, and Trojans.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What does “phishing” refer to in cybersecurity?',
                'reason' => 'Explanation: Phishing uses fake emails or messages that appear legitimate to gather sensitive information from users.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is a Trojan horse?',
                'reason' => 'Explanation: Trojans look harmless but can execute malicious actions once installed, such as stealing data or installing malware.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which attack involves overwhelming a system with traffic to make it unavailable?',
                'reason' => 'Explanation: A Distributed Denial of Service (DDoS) attack floods a server with traffic, making it inaccessible to users.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is the primary goal of ransomware?',
                'reason' => 'Explanation: Ransomware encrypts files and demands a ransom for the decryption key to restore access.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which cyber threat is designed to secretly gather user information?',
                'reason' => 'Explanation: Spyware monitors a user’s activity and gathers data without the user’s knowledge, leading to potential privacy breaches.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is the purpose of an Advanced Persistent Threat (APT)?',
                'reason' => 'Explanation: APTs are advanced attacks aiming for continuous access to valuable systems for espionage or data theft.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which technique is commonly used to exploit vulnerabilities in SQL databases?',
                'reason' => 'Explanation: SQL Injection manipulates SQL queries to access, modify, or delete data in a database.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is a key indicator of a phishing email?',
                'reason' => 'Explanation: Phishing emails often include suspicious links and use urgency to prompt users into acting quickly without verifying.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is a rootkit designed to do?',
                'reason' => 'Explanation: Rootkits conceal malware by hiding processes, making it harder for antivirus software to detect threats.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which malware captures everything typed on a keyboard?',
                'reason' => 'Explanation: Keyloggers record keystrokes, allowing attackers to gather sensitive data such as usernames and passwords.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What does spyware aim to do?',
                'reason' => 'Explanation: Spyware gathers data from users’ devices without their consent, often leading to privacy risks.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which is NOT a common symptom of malware?',
                'reason' => 'Explanation: Malware usually causes slow performance and increased internet usage; it does not improve battery life.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is the goal of social engineering attacks?',
                'reason' => 'Explanation: Social engineering uses manipulation tactics to trick individuals into sharing sensitive information.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is the main purpose of adware?',
                'reason' => 'Explanation: Adware displays ads to generate revenue, often affecting device performance and user experience.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which attack intercepts network communication to steal data?',
                'reason' => 'Explanation: Man-in-the-Middle attacks intercept and manipulate communication between two parties, often to capture sensitive information.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is spear phishing?',
                'reason' => 'Explanation: Spear phishing uses tailored information to make the phishing attempt appear more credible to specific targets.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'Which malware type can replicate itself to spread across networks?',
                'reason' => 'Explanation: Worms are self-replicating malware that spread across networks without user interaction, causing rapid infection.',
                'category_id' => $cyberthreatCategoryId,
            ],
            [
                'question_text' => 'What is a botnet?',
                'reason' => 'Explanation: Botnets are networks of compromised devices controlled remotely to carry out attacks, often used in DDoS.',
                'category_id' => $cyberthreatCategoryId,
            ],

        ]);

        // Insert questions for 'Security Best Practice' category
        DB::table('trivia_questions')->insert([
            [
                'question_text' => 'Which of the following is considered a strong password?',
                'reason' => 'Explanation: A strong password uses a mix of uppercase, lowercase, numbers, and special characters. Option C meets these criteria, while the others do not.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Why is it important to avoid using public Wi-Fi for sensitive transactions?',
                'reason' => 'Explanation: Public Wi-Fi networks are often unencrypted, making it easier for attackers to intercept data, especially during sensitive transactions.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What should you do if you receive an email from an unknown sender with an attachment?',
                'reason' => 'Explanation: Reporting suspicious emails helps IT identify potential phishing or malware and prevents accidental exposure.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is two-factor authentication (2FA)?',
                'reason' => 'Explanation: Two-factor authentication requires two forms of verification, such as a password and a one-time code, adding extra security.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which of these is NOT a good password practice?',
                'reason' => 'Explanation: You should never share passwords, even with trusted people, as this increases the risk of unauthorized access.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is the main purpose of a firewall?',
                'reason' => 'Explanation: Firewalls act as barriers to unauthorized access, protecting networks from external threats.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Why is it important to regularly update your software?',
                'reason' => 'Explanation: Regular updates patch known security vulnerabilities, keeping your device and data safe from potential threats.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which of the following should you do to safely browse the internet?',
                'reason' => 'Explanation: Using a secure and updated browser reduces risks while browsing. Avoiding pop-ups and using HTTPS websites are also recommended practices.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is phishing?',
                'reason' => 'Explanation: Phishing involves sending fake emails or messages to trick people into revealing personal or financial information.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is the safest way to handle sensitive data on a public computer?',
                'reason' => 'Explanation: Clearing browsing history and logging out helps protect sensitive data from being accessed by others.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which of the following is a secure way to manage multiple passwords?',
                'reason' => 'Explanation: A password manager securely stores and encrypts multiple passwords, helping you avoid reuse while keeping them safe.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'When should you back up important data?',
                'reason' => 'Explanation: Regular backups help protect against data loss due to hardware failures, malware, or accidental deletion.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is a VPN primarily used for?',
                'reason' => 'Explanation: VPNs encrypt internet connections, making them safer to use on unsecured networks like public Wi-Fi.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which action reduces the risk of unauthorized physical access to your device?',
                'reason' => 'Explanation: Using a screen lock or password prevents unauthorized individuals from accessing your device.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Why should you be cautious of email attachments from unknown senders?',
                'reason' => 'Explanation: Attachments from unknown sources can carry malware or viruses, making it essential to exercise caution.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which of the following is a good way to prevent unauthorized access to your online accounts?',
                'reason' => 'Explanation: Using complex, unique passwords for each account prevents unauthorized access and limits damage in case one password is compromised.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'What is an important step to take before discarding an old computer or phone?',
                'reason' => 'Explanation: Factory resetting and securely wiping personal data ensures sensitive information isn’t accessible to others.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Why should software be downloaded only from trusted sources?',
                'reason' => 'Explanation: Downloading software from trusted sources minimizes the risk of unintentionally installing malware or compromised programs.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'Which of the following is a sign of a secure website?',
                'reason' => 'Explanation: “HTTPS” indicates that the site is using secure encryption, making it safer for transmitting data.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
            [
                'question_text' => 'How can you protect sensitive information on mobile devices?',
                'reason' => 'Explanation: Device encryption and strong passwords help safeguard sensitive information if the device is lost or stolen.',
                'category_id' => $securityBestPracticesCategoryId,
            ],
        ]);

        // Insert questions for 'Data Privacy' category
        DB::table('trivia_questions')->insert([
            [
                'question_text' => 'What does GDPR stand for?',
                'reason' => 'Explanation: GDPR stands for General Data Protection Regulation, a law in the EU that protects individuals’ data privacy rights.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following is considered personally identifiable information (PII)?',
                'reason' => 'Explanation: Personally identifiable information (PII) includes data like email addresses that can be used to identify individuals.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What is the main purpose of data encryption?',
                'reason' => 'Explanation: Encryption protects data by converting it into unreadable code, which can only be accessed with a decryption key.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following is NOT considered sensitive information?',
                'reason' => 'Explanation: Public business addresses are generally accessible, while SSNs, credit card numbers, and passport numbers are sensitive.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Why is it important to have a strong password on accounts with personal data?',
                'reason' => 'Explanation: Strong passwords help secure personal data from unauthorized access, protecting privacy.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What is a data breach?',
                'reason' => 'Explanation: A data breach occurs when unauthorized individuals gain access to confidential data, potentially compromising privacy.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What is the main purpose of a privacy policy on websites?',
                'reason' => 'Explanation: Privacy policies explain how websites collect, store, and use users’ data, providing transparency and protecting users’ rights.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following is a best practice for securing personal information online?',
                'reason' => 'Explanation: Regularly updating and strengthening passwords protects personal information from unauthorized access.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What does data minimization mean in data privacy?',
                'reason' => 'Explanation: Data minimization involves only collecting data that is necessary for a specific purpose, reducing privacy risks.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of these is a method for protecting personal data when using public Wi-Fi?',
                'reason' => 'Explanation: A VPN protects personal data on public Wi-Fi by encrypting your internet connection, making it harder for attackers to intercept.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Why is it important to check a website’s privacy policy before using it?',
                'reason' => 'Explanation: Privacy policies reveal what data a website collects, helping users make informed decisions about their data privacy.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which law focuses on data protection and privacy for EU citizens?',
                'reason' => 'Explanation: GDPR, the General Data Protection Regulation, protects the privacy of individuals within the European Union.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What is personally identifiable information (PII)?',
                'reason' => 'Explanation: PII is any data that can be used to identify an individual, such as name, address, or Social Security number.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What is the “right to be forgotten” in data privacy?',
                'reason' => 'Explanation: The right to be forgotten allows individuals to request deletion of their personal data from certain services.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following is a method of de-identifying personal data?',
                'reason' => 'Explanation: Tokenization replaces sensitive data with unique identifiers, making it harder to trace back to individuals.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Why should you use privacy settings on social media accounts?',
                'reason' => 'Explanation: Privacy settings on social media allow you to control who can view your personal information, helping protect your privacy.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following actions helps protect data privacy?',
                'reason' => 'Explanation: Two-factor authentication adds an extra layer of security, protecting data privacy by securing accounts.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'What does CCPA stand for?',
                'reason' => 'Explanation: The California Consumer Privacy Act (CCPA) protects the privacy rights of California residents.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of these actions helps minimize the risk of data breaches?',
                'reason' => 'Explanation: Encrypting sensitive data makes it difficult for unauthorized users to access, reducing the risk of data breaches.',
                'category_id' => $dataprivacyCategoryId,
            ],
            [
                'question_text' => 'Which of the following is true about cookies on websites?',
                'reason' => 'Explanation: Cookies track user activity, helping websites remember preferences and often used for analytics or advertising.',
                'category_id' => $dataprivacyCategoryId,
            ],
        ]);
    }
}
