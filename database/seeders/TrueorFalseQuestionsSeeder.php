<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrueorFalseQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passwordsecurityCategoryId = DB::table('trueorfalse_categories')->where('name', 'password-security')->value('id');

        $socialengineeringCategoryId = DB::table('trueorfalse_categories')->where('name', 'social-engineering')->value('id');

        $phishingCategoryId = DB::table('trueorfalse_categories')->where('name', 'phishing')->value('id');

        // // Insert questions for 'Password Security' category
        DB::table('trueorfalse_questions')->insert([
            [
                'question_text' => 'Using a long password with a mix of letters, numbers, and symbols is more secure than a short password.',
                'reason' => 'Explanation: Longer passwords with mixed characters are harder to guess and more secure against brute-force attacks.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'It’s safe to use the same password across multiple websites as long as it’s complex.',
                'reason' => 'Explanation: Reusing passwords increases risk; if one account is compromised, others with the same password can be easily accessed.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Including personal information like your birthdate in your password makes it easier for hackers to guess.',
                'reason' => 'Explanation: Personal details are easily accessible and predictable, so it’s best to avoid them in passwords.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Passwords should be changed frequently to reduce the risk of unauthorized access.',
                'reason' => 'Explanation: Regularly updating passwords can help limit damage in case a password has been exposed or compromised.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'A password manager is a secure way to store and manage multiple complex passwords.',
                'reason' => 'Explanation: Password managers encrypt stored passwords, making it safer and easier to manage unique passwords for different accounts.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'It’s a good idea to share your passwords with close friends and family members for emergencies.',
                'reason' => 'Explanation: Passwords should not be shared, as it increases the risk of unauthorized access.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Adding numbers and symbols to a password makes it harder to crack.',
                'reason' => 'Explanation: Numbers and symbols increase password complexity, making it more challenging for attackers to guess.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Using a single word as a password is a good security practice if the word is uncommon.',
                'reason' => 'Explanation: Single-word passwords, even uncommon ones, are vulnerable to dictionary attacks. It’s better to use a passphrase or mix of characters.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Two-factor authentication (2FA) is recommended even if you have a strong password.',
                'reason' => 'Explanation: 2FA adds an extra layer of security, making it harder for unauthorized users to access an account even if they have the password.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Using a phrase as a password, like "Ilovepizza123!", can be more secure than a random string of numbers and letters.',
                'reason' => 'Explanation: Passphrases can be strong if they are long and include varied characters. They’re also easier to remember.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Using an outdated password that hasn’t been changed for years can increase security.',
                'reason' => 'Explanation: Older passwords are more likely to be exposed in data breaches or guessed, so it’s best to change passwords regularly.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Passwords should be stored in plain text files on your computer for easy access.',
                'reason' => 'Explanation: Plain text files are unprotected and can easily be accessed if the device is compromised. Encrypted storage or a password manager is recommended.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Short passwords are easier for hackers to crack using brute-force attacks.',
                'reason' => 'Explanation: Short passwords can be cracked faster than longer ones due to fewer possible character combinations.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'It’s okay to use simple passwords for accounts that don’t contain sensitive information.',
                'reason' => 'Explanation: Even accounts with non-sensitive information can lead to security risks if compromised, as they may provide clues to other passwords or accounts.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Enabling biometrics, such as fingerprint or facial recognition, can add another layer of security to devices.',
                'reason' => 'Explanation: Biometrics add an additional security layer, making it harder for unauthorized users to access devices.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Using a password that’s a single common word, like "password," is safe if the account is rarely used.',
                'reason' => 'Explanation: Common words are among the first passwords hackers try. Avoid using simple words as passwords, even for infrequently used accounts.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'A password like "12345" is secure if it’s only used on a personal device.',
                'reason' => 'Explanation: "12345" is a very weak password, easy to guess, and should be avoided, even on personal devices.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Passphrases using random, unrelated words can be stronger and easier to remember than complex passwords.',
                'reason' => 'Explanation: Passphrases are often long, unique, and easier to remember, making them a good alternative to traditional complex passwords.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'Using both upper and lowercase letters in a password makes it more secure.',
                'reason' => 'Explanation: Mixing uppercase and lowercase letters increases password complexity, which helps to protect against brute-force attacks.',
                'category_id' => $passwordsecurityCategoryId,
            ],
            [
                'question_text' => 'A password manager automatically creates and stores strong, unique passwords for each account.',
                'reason' => 'Explanation: Password managers generate complex, unique passwords for each account, making it easier to maintain strong security practices.',
                'category_id' => $passwordsecurityCategoryId,
            ],
        ]);

        // // Insert questions for 'Social Engineering' category
        DB::table('trueorfalse_questions')->insert([
            [
                'question_text' => 'Social engineering attacks often involve manipulating people rather than exploiting technical vulnerabilities.',
                'reason' => 'Explanation: Social engineering relies on psychological manipulation rather than technical exploits to gain information or access.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Phishing emails are a common form of social engineering.',
                'reason' => 'Explanation: Phishing emails trick users into providing sensitive information, making them a popular social engineering tactic.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Tailgating is a social engineering tactic where attackers follow employees into secure areas.',
                'reason' => 'Explanation: Tailgating involves unauthorized individuals entering secure areas by following someone with access.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineering attacks never involve in-person interactions; they only happen online.',
                'reason' => 'Explanation: Social engineering can occur in person, over the phone, or online, as it’s about manipulating individuals in various ways.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'In pretexting attacks, the attacker creates a fake scenario to gain information from the target.',
                'reason' => 'Explanation: Pretexting involves creating a fabricated story to manipulate someone into sharing information.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineering relies on exploiting trust and human behavior to gain unauthorized access.',
                'reason' => 'Explanation: Social engineering tactics exploit human psychology and trust to bypass security protocols.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Dumpster diving is a social engineering tactic that involves searching through trash to find sensitive information.',
                'reason' => 'Explanation: Dumpster diving involves sifting through discarded documents for valuable information like passwords or account details.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'It’s safe to provide information over the phone if the caller claims to be from your bank and knows your name.',
                'reason' => 'Explanation: Attackers may use partial information to appear legitimate. Always verify the caller independently before sharing sensitive information.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Baiting is a tactic where attackers lure individuals into exposing information or systems with an enticing offer.',
                'reason' => 'Explanation: Baiting involves offering something enticing, like a free USB drive or prize, to trick people into compromising security.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Shoulder surfing is a social engineering tactic where attackers watch someone enter sensitive information.',
                'reason' => 'Explanation: Shoulder surfing involves spying over someone’s shoulder to capture sensitive data like passwords or PINs.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Most social engineering attacks are easy to identify if the attacker is a stranger.',
                'reason' => 'Explanation: Social engineers often pose as trusted sources or use familiarity to lower suspicion, making attacks harder to identify.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineers often pretend to be technical support to gain access to systems.',
                'reason' => 'Explanation: Impersonating technical support is a common social engineering tactic, as it exploits employees’ willingness to cooperate with IT staff.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Vishing is a type of social engineering conducted over the phone.',
                'reason' => 'Explanation: Vishing (voice phishing) involves social engineering over the phone, where attackers try to extract information from the victim.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineering attacks are most effective when targeting individuals rather than groups.',
                'reason' => 'Explanation: Attacking individuals allows social engineers to tailor their approach, exploiting specific behaviors and weaknesses.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineers only target high-ranking employees in an organization.',
                'reason' => 'Explanation: Social engineers can target anyone within an organization, as even lower-level employees may have access to valuable information.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'A sense of urgency is often used in social engineering attacks to push victims into quick decisions.',
                'reason' => 'Explanation: Social engineers use urgency to prevent victims from thinking critically or verifying information, increasing the chance of compliance.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'It’s safe to trust emails from coworkers asking for confidential information without verifying.',
                'reason' => 'Explanation: Always verify unexpected requests for confidential information, even from known contacts, as accounts could be compromised.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Social engineers can use information from social media profiles to impersonate someone or gain trust.',
                'reason' => 'Explanation: Social media profiles can provide information that helps attackers impersonate others or build trust with the target.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'Smishing is a social engineering attack that uses SMS or text messages to deceive people.',
                'reason' => 'Explanation: Smishing, or SMS phishing, is a social engineering tactic that uses text messages to trick people into revealing information.',
                'category_id' => $socialengineeringCategoryId,
            ],
            [
                'question_text' => 'If someone claims to be a coworker and asks for a password, it’s okay to give it if they seem trustworthy.',
                'reason' => 'Explanation: Passwords should never be shared, even with coworkers. Confirm the person’s identity and report any suspicious requests.',
                'category_id' => $socialengineeringCategoryId,
            ],
        ]);

        // // Insert questions for 'Phishing' category
        DB::table('trueorfalse_questions')->insert([
            [
                'question_text' => 'Phishing emails often use urgent language to make the recipient act quickly without thinking.',
                'reason' => 'Explanation: Phishing emails commonly use urgency to pressure recipients into acting without verifying the legitimacy of the email.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing can only be carried out through email.',
                'reason' => 'Explanation: Phishing can occur through various channels, including SMS (smishing), phone calls (vishing), and social media messages.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing emails often contain spelling or grammatical errors.',
                'reason' => 'Explanation: Phishing emails frequently contain errors, which can be a red flag indicating the message may not be legitimate.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Legitimate companies will never ask for sensitive information, like passwords, via email.',
                'reason' => 'Explanation: Reputable organizations typically do not request sensitive information over email due to security concerns.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'If an email contains a link, it’s always safe to click as long as the sender is known.',
                'reason' => 'Explanation: Even if the sender appears familiar, links in unexpected emails can lead to phishing sites or malware.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Hovering over a link in an email can help reveal if it’s leading to a legitimate website.',
                'reason' => 'Explanation: Hovering over a link without clicking allows you to view the URL, helping to identify if it matches the claimed source.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing attacks often spoof company logos and email addresses to appear legitimate.',
                'reason' => 'Explanation: Phishers frequently use logos, email addresses, and branding to make their messages appear authentic.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'It’s safe to open attachments in an email if it comes from a trusted source.',
                'reason' => 'Explanation: Even emails from trusted sources can be compromised. Attachments should be opened only if they’re expected and verified.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing attacks can sometimes be avoided by checking the sender’s email address for inconsistencies.',
                'reason' => 'Explanation: Phishers often use slight variations in email addresses to impersonate legitimate senders, so checking for inconsistencies is helpful.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Smishing is a form of phishing that uses text messages to trick people.',
                'reason' => 'Explanation: Smishing, or SMS phishing, uses text messages to deceive recipients into providing personal information or clicking malicious links.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'If an email contains personalized information, it cannot be a phishing attempt.',
                'reason' => 'Explanation: Phishing emails can include personal information, often gathered from social media or previous data breaches, to appear legitimate.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Reputable companies will typically address you by your name in legitimate emails.',
                'reason' => 'Explanation: Legitimate organizations often use your name in communications, while generic greetings can be a red flag in phishing attempts.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing can be prevented entirely with antivirus software.',
                'reason' => 'Explanation: While antivirus software can help, phishing prevention also requires user awareness and caution when interacting with emails and links.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing websites may use URLs that look similar to the legitimate ones but contain slight changes.',
                'reason' => 'Explanation: Phishing sites often use URLs with slight variations, like misspelled words or extra characters, to deceive users.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'A suspicious email should be reported to IT or security teams if you’re at work.',
                'reason' => 'Explanation: Reporting phishing attempts to IT can help protect the organization by preventing others from falling for the same scam.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Clicking an "unsubscribe" link in a spam email is always safe.',
                'reason' => 'Explanation: Phishers sometimes use fake “unsubscribe” links to confirm active email addresses, so it’s safer to delete or mark spam instead.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Emails asking for account verification with links should be treated with caution.',
                'reason' => 'Explanation: Account verification emails with links can be phishing attempts; verify with the company directly rather than clicking links in emails.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Phishing can target individuals or organizations and often involves impersonation.',
                'reason' => 'Explanation: Phishing attacks can target both individuals and businesses by impersonating trusted sources to gain sensitive information.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'If an email looks legitimate and contains a company logo, it is safe to trust.',
                'reason' => 'Explanation: Phishers often replicate logos and branding to look authentic, so verifying the source of any suspicious email is essential.',
                'category_id' => $phishingCategoryId,
            ],
            [
                'question_text' => 'Using two-factor authentication (2FA) can help protect against phishing attacks.',
                'reason' => 'Explanation: 2FA adds an extra layer of security, making it harder for attackers to gain access even if they obtain your password.',
                'category_id' => $phishingCategoryId,
            ],
        ]);
    }
}
